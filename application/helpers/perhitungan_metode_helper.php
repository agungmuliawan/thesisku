
<?php
#proses utama
function hitungPerbandingan(array $post)
{
    $ci = &get_instance();
    $ci->load->database();
    $data_training = $ci->db->query('select * from tb_training')->result();
    // $result = $this->db->query("SELECT * FROM tb_kelas")->result();
    // ddd([$post, $data_training]);

    $arr_bobot = hitungBobot($post); #cari bobot dari yang dipilih
    // ddd($arr_bobot);
    $perhitungan_lokasi = [];
    $result = [];
    foreach ($data_training as $key => $value) {
        // ddd($post, $value);
        $detail      = [];
        $sum_bobot = 0;
        $sum_total = 0;
        $total     = 0;
        // ddd($value);
        foreach ($value as $key_val => $value_field_db) { #looping untuk fieldnya
            #start hilangin suffix
            #hilangin array suffix paling terakhir
            $field = explode('_', $key_val); #mecah
            $jumlah_arr = count($field) - 1;
            if ($jumlah_arr > 0) {
                unset($field[$jumlah_arr]); #dibuang
            }
            $key_field = implode('_', $field); #digabungkan
            #end hilangin suffix
            // if (!in_array($key_field, ['id_transaksi', 'id_user'])) {
            if (!in_array($key_field, ['id', 'result'])) {
                $data_bobot = $arr_bobot[$key_field] ?? [];
                $bobot      = $data_bobot['bobot'] ?? 0;
                if ($value_field_db == 0) {
                    $bobot = 0;
                }
                // dd($data_bobot, $key_field);
                $kemiripan  = hitungKemiripan(
                    $pembanding = ($data_bobot['value'] ?? 0),
                    $data_training = $value_field_db,
                    $field = $key_field
                );
                // echo "<hr>";
                // if ($value->id_transaksi == 2) {
                //     dd($key_val, $bobot, $kemiripan);
                // }
                $total      = $bobot * $kemiripan['result'];
                $sum_bobot  += $bobot;
                $sum_total  += $total;
                $detail[$key_field] = [
                    'bobot'     => $bobot,
                    'kemiripan' => $kemiripan,
                    'total'     =>  $total,
                ];
                if ($key_field == 'lokasi') {
                    if (count($kemiripan['detail'] ?? []) > 0) {
                        if (count($perhitungan_lokasi) == 0) {
                            $perhitungan_lokasi = $kemiripan['detail'];
                        }
                        unset($detail[$key_field]['kemiripan']['detail']);
                    }
                }
                // ddd($detail);
            }
        }
        $hasil = 0;
        // dd($sum_total, $sum_bobot);
        if ($sum_bobot > 0) {
            $hasil = $sum_total / $sum_bobot;
        }
        // if ($key == 3)
        //     ddd($arr_bobot, $value, $hasil, $detail);
        $result[$key] = [
            'detail' => $detail,
            'skor' => $hasil,
            'sum_total' => $sum_total,
            'sum_bobot' => $sum_bobot,
            'id_hotel' => $value->result,
            'id_data_training' => $value->id_transaksi,
        ];
        // if ($value->id_transaksi == 1) {
        //     dd($result[0]);
        //     die();
        // }
    }
    // arsort($result);
    $columns = array_column($result, "skor");
    array_multisort($columns, SORT_DESC, $result);
    // $result['perhitungan_lokasi'] = $perhitungan_lokasi;
    // array_push($result, ['perhitungan_lokasi' => $perhitungan_lokasi]);
    $response = [
        'perhitungan_lokasi' => $perhitungan_lokasi,
        'result' => $result
    ];
    return $response;
    //echo "Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse placeat quis fuga! Tenetur incidunt eligendi tempore ducimus nostrum omnis ipsum cumque libero repudiandae officia, at, qui, quae exercitationem expedita minima!";
    ////echo $result;
}
// function hasilperhitungan(array $post) {

// }
#untuk set bobot dari pilihan form dari user KP, KU, KT
function hitungBobot(array $post)
{
    // dd($post);
    #nilai perbandingan
    $kp = perbandinganBobot()['kp']; #kebutuhan prioritas
    $ku = perbandinganBobot()['ku']; #kebutuhan umum
    $kt = perbandinganBobot()['kt']; #kebutuhan tambahan

    $bobot = [];
    // $lokasi_from = $post['daerah_anda'];
    $lokasi_to   = $post['tujuan_anda'];
    unset($post['tujuan_anda']);
    // unset($post['daerah_anda']);
    // ddd($post);
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
    // ddd($bobot);
    return $bobot;
}

#perbandingan kemiripan
#data_training => nilai data traning
#pembanding => nilai pembanding
#field => field prefix dari db
function hitungKemiripan($pembanding = 1, $data_training = 2, $field)
{
    /** Bintang
     * 1 => 5
     * 2 => 4
     * 3 => 3
     */
    $ci = &get_instance();
    $ci->load->database();

    $kemiripan = 0;
    $calculate_kemiripan = 0.2; #sudah ditentukan
    $hasil_kemiripan = 0;
    if ($pembanding > 0 && $data_training > 0) {
        $hasil_kemiripan = $data_training - $pembanding;
        if ($hasil_kemiripan == 0) {
            $kemiripan = 1;
        } else {
            if ($field == 'lokasi') {
                $calculate_kemiripan = 0.1; #sudah ditentukan
                // ddd($kemiripan, $calculate_kemiripan, $hasil_kemiripan, $data_training, $pembanding);
                // $data_lokasi = $ci->db->query('select * from tb_lokasi where id_lokasi in  (' . $pembanding . ', ' . $data_training . ')')->result();
                // ddd($data_lokasi);
                $data_lokasi_all = $ci->db->query('select * from tb_lokasi')->result();
                $lokasi_asal = $ci->db->query('select * from tb_lokasi where id_lokasi  =' . $pembanding)->result()[0];
                $lokasi_pembanding = $ci->db->query('select * from tb_lokasi where id_lokasi =' . $data_training)->result()[0];
                $arr_result = [];
                foreach ($data_lokasi_all as $key => $data_training) {
                    $arr_result[$data_training->id_lokasi] = hitungJarakLokasi($lokasi_asal, $data_training);
                }
                // asort($arr_result); #diurutkan
                #urutkan
                $result = array_column($arr_result, 'result');
                array_multisort($result, SORT_ASC, $arr_result);
                // var_dump($new);
                // ddd($lokasi_asal, $lokasi_pembanding, $arr_result);
                $iterasi = 0;
                foreach ($arr_result as $id_lokasi => $data_training) { #cari lokasi pembanding diurutan keberapa
                    if ($lokasi_pembanding->id_lokasi == $data_training['lokasi_pembanding']->id_lokasi) {
                        break;
                    }
                    $iterasi++; #untuk cek urutan
                    // dd('iterasi', $iterasi);
                }
                $kemiripan = 1 - ($calculate_kemiripan * abs($iterasi));
                // ddd($iterasi, $kemiripan,  $arr_result);
                return [
                    'result' => $kemiripan,
                    'hitungan' => "1 - ($calculate_kemiripan * abs($iterasi)",
                    'detail' => $arr_result,
                ];
            } else {
                $kemiripan = 1 - ($calculate_kemiripan * abs($hasil_kemiripan));
            }
        }
    }
    // dd('kemiripan', $data_training, $pembanding, $kemiripan, $hasil_kemiripan);
    // return $kemiripan;
    return [
        'result' => $kemiripan
    ];
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
    $result = [
        'lokasi_asal' => $lokasi_asal,
        'lokasi_pembanding' => $lokasi_pembanding,
        'result' => $nilai_d,
        'delta_lat' => "(3.14 / 180) * ($lokasi_pembanding->lat - $lokasi_asal->lat)",
        'delta_long' => "(3.14 / 180) * ($lokasi_pembanding->long - $lokasi_asal->long)",
        'nilai_a' => "sin($delta_lat / 2)",
        'nilai_b' => "pow($nilai_a, 2)",
        'nilai_c' => "cos($lokasi_asal->lat) * cos($lokasi_pembanding->lat) * pow(sin($delta_long / 2), 2)",
        'nilai_d' => "6371 * 2 * asin(sqrt($nilai_a + $nilai_c))",
    ];
    return $result;
    // ddd($result);
    // return $nilai_d;
    // var_dump($nilai_d);
}
