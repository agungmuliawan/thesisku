<?php

function hitungPerbandingan(array $post)
{
    $ci = &get_instance();
    $ci->load->database();
    $data_training = $ci->db->query('select * from tb_training')->result();
    // $result = $this->db->query("SELECT * FROM tb_kelas")->result();
    // ddd([$post, $data_training]);

    $arr_bobot = hitungBobot($post);
    $result = [];
    foreach ($data_training as $key => $value) {
        // ddd($post, $value);
        $skor      = [];
        $sum_bobot = 0;
        $sum_total = 0;
        $total     = 0;
        // ddd($value);-
        foreach ($value as $key_val => $item) {
            $field = explode('_', $key_val);
            $jumlah_arr = count($field) - 1;
            if ($jumlah_arr > 0) {
                unset($field[$jumlah_arr]);
            }
            $key_field = implode('_', $field);
            // if (!in_array($key_field, ['id_transaksi', 'id_user'])) {
            if ($key_field != 'id') {
                $data_bobot = $arr_bobot[$key_field] ?? [];
                $bobot      = $data_bobot['bobot'] ?? 0;
                if ($item == 0) {
                    $bobot = 0;
                }
                // dd($data_bobot, $key_field);
                $kemiripan  = hitungKemiripan(($data_bobot['value'] ?? 0), $item, $key_field);
                // echo "<hr>";
                $total      = $bobot * $kemiripan;
                $sum_bobot  += $bobot;
                $sum_total  += $total;
                $skor[$key_field] = [
                    'bobot'     => $bobot,
                    'kemiripan' => $kemiripan,
                    'total'     =>  $total
                ];
            }
        }
        $hasil = 0;
        // dd($sum_total, $sum_bobot);
        if ($sum_bobot > 0) {
            $hasil = $sum_total / $sum_bobot;
        }
        // if ($key == 3)
        //     ddd($arr_bobot, $value, $hasil, $skor);
        $result[$key] = [
            // 'detail' => $skor,
            'skor' => $hasil,
        ];
    }
    arsort($result);
    return $result;
}

function hitungBobot(array $post)
{
    #nilai perbandingan
    $kp = 0.65; #kebutuhan prioritas
    $ku = 0.23; #kebutuhan umum
    $kt = 0.12; #kebutuhan tambahan

    $bobot = [];
    $lokasi_from = $post['daerah_anda'];
    $lokasi_to   = $post['tujuan_anda'];
    unset($post['tujuan_anda']);
    unset($post['daerah_anda']);
    foreach ($post as $key => $kebutuhan) {
        foreach ($kebutuhan as $kebutuhan_key => $item) {
            $value = $item;
            if (!is_numeric($value)) {
                $value = 1;
            }

            if ($key == 'kp') {
                $bobot[$kebutuhan_key] = [
                    'bobot' => $kp,
                    'value' => $value,
                ];
            }
            if ($key == 'ku') {
                $bobot[$kebutuhan_key] = [
                    'bobot' => $ku,
                    'value' => $value,
                ];
            }
            if ($key == 'kt') {
                $bobot[$kebutuhan_key] = [
                    'bobot' => $kt,
                    'value' => $value,
                ];
            }
        }
    }
    $bobot['lokasi'] = [
        'bobot' => $kp,
        'value' => $lokasi_to,
    ];

    return $bobot;
}

function hitungKemiripan($value, $pembanding, $field)
{
    $ci = &get_instance();
    $ci->load->database();

    $kemiripan = 0;
    $calculate_kemiripan = 0.2;
    $hasil_kemiripan = 0;
    if ($pembanding > 0 && $value > 0) {
        $hasil_kemiripan = $value - $pembanding;
        if ($hasil_kemiripan == 0) {
            $kemiripan = 1;
        } else {
            if ($field == 'lokasi') {
                // ddd($kemiripan, $calculate_kemiripan, $hasil_kemiripan, $value, $pembanding);
                $calculate_kemiripan = 0.1;
                $data_lokasi = $ci->db->query('select * from tb_lokasi where id_lokasi in  (' . $value . ', ' . $pembanding . ')')->result();
                $data_lokasi_all = $ci->db->query('select * from tb_lokasi')->result();
                $lokasi_asal = $data_lokasi[0];
                $lokasi_pembanding = $data_lokasi[1];
                $arr_result = [];
                foreach ($data_lokasi_all as $key => $value) {
                    $arr_result[$value->id_lokasi] = hitungJarakLokasi($lokasi_asal, $value);
                }
                asort($arr_result);

                $iterasi = 0;
                foreach ($arr_result as $key => $value) {
                    if ($key == $lokasi_pembanding->id_lokasi) {
                        break;
                    }
                    $iterasi++;
                }
                $kemiripan = 1 - ($calculate_kemiripan * abs($iterasi));
                // ddd($iterasi, $kemiripan,  $arr_result);
            } else {
                $kemiripan = 1 - ($calculate_kemiripan * abs($hasil_kemiripan));
            }
        }
    }
    // dd('kemiripan', $value, $pembanding, $kemiripan, $hasil_kemiripan);
    return $kemiripan;
}


function hitungJarakLokasi($lokasi_asal, $lokasi_pembanding)
{

    $delta_lat  = (3.14 / 180) * ($lokasi_pembanding->lat - $lokasi_asal->lat); #(3,14/180) * (lat pembanding - lat asal)
    $delta_long = (3.14 / 180) * ($lokasi_pembanding->long - $lokasi_asal->long); #(3,14/180) * (long pembanding - long asal)
    $nilai_a    = sin($delta_lat / 2); # sin(delta_lat/2)^2
    $nilai_a = pow($nilai_a, 2);
    $nilai_c = cos($lokasi_asal->lat) * cos($lokasi_pembanding->lat) * pow(sin($delta_long / 2), 2); #(COS(lat awal) * ( cos(lat pembanding) ) * sin (delta long/2)) ^ 2
    // $nilai_c = pow($nilai_c, 2);
    $nilai_d = 6371 * 2 * asin(sqrt($nilai_a + $nilai_c)); #=6371*2*ASIN(SQRT(M10+N10))
    // if ($lokasi_pembanding->id_lokasi == 10)
    //     ddd($delta_lat, $delta_long, $nilai_a, $nilai_c, $nilai_d);

    return $nilai_d;
}
\
