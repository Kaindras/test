<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PsertadidikSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
          $data =[
            ['id'=>'1',
            'nama_lengkap' =>'Eka Indra Supriyatna',
            'nipd' =>'7000',
            'nisn' =>'1234567890',
            'namapgl' =>'kaindras',
            'jnsklmn' =>'Laki-laki',
            'tempatlhr' => 'Jakarta',
            'tgllhr'=>'1980-12-25',
            'agama' => 'Islam',
            'kwgnegaraan' =>'WNI',
            'anakke' =>'1',
            'jml_s_kd' =>'0',
            'jml_s_tr'=>'0',
            'jml_s_angkat'=>'0',
            'anky_yp_p'=>'Yatim Piatu',
            'bhs'=>'Indonesia',
            'foto_in' =>'',
            'foto_out' =>'',
            'verifikasi'=>0,
            ]
          ];


        DB::table('psertadidiks')->insert($data);

        $data2 =[
            [
            'almt' =>'Bekasi',
            'nohp' => '081299576662',
            'tinggaldgn' => 'Keluarga',
            'jrk_k_sklh' => '2.5',
            'psertadidik_id'=>1
            ],

            ];
            DB::table('tinggals')->insert($data2);

            $data3 =[
            [
           'gol_drh'=> 'B',
           'pnykit_yg_drt'=> 'Typus',
           'kel_jasmani'=>'Rabun Jauh',
           'tinggi'=> '165',
           'bb'=> '55',
            'psertadidik_id' => 1,
            ]
        ];
            DB::table('kesehatans')->insert($data3);

        $data4 = [
            [

            'nama_ayah' => 'Djarliar',
            'tmpt_ayah' => 'Medan',
            'tgl_ayah' => '1962-03-08',
            'agama_ayah' => 'Islam',
            'kwg_ayah' => 'WNA',
            'pndidikan_ayah' => 'SMP',
            'pkrjaan_ayah' => 'Dagang',
            'pngeluaran_ayah' => '2000000',
            'almt_ayah' => 'Medan',
            'nohp_ayah' => '081299576662',
            'hdp_mninggal_ayah'=>'Meninggal',
            'psertadidik_id' => 1,
            ]
            ];
            DB::table('ayahkandungs')->insert($data4);

        $data5 = [
            [

            'nama_ibu' => 'Ruslina',
            'tmpt_ibu' => 'Jakarta',
            'tgl_ibu' => '1962-03-08',
            'agama_ibu' => 'Islam',
            'kwg_ibu' => 'Indonesia',
            'pndidikan_ibu' => 'SMP',
            'pkrjaan_ibu' => 'Dagang',
            'pngeluaran_ibu' => '10000',
            'almt_ibu' => 'Jakarta',
            'nohp_ibu' => '08123',
            'hdp_mninggal_ibu' => 'Meninggal',
            'psertadidik_id' => 1,
            ]
            ];
            DB::table('ibukandungs')->insert($data5);

        $data6 = [
            [
            'nama_wali' => 'Wali Songo',
            'tmpt_wali' =>  'Jakarta',
            'tgl_wali' => '1968-12-12',
            'agama_wali' => 'Islam',
            'kwg_wali' =>  'Perancis',
            'pndidikan_wali' => 'SSS',
            'pkrjaan_wali' => 'Dagang',
            'pngeluaran_wali' => '5.000.000',
            'almt_wali' => 'Jakarta',
            'nohp_wali' =>  '089877',
            'hdp_mninggal_wali' => '',
            'psertadidik_id' => 1,
            ]
            ];
            DB::table('walis')->insert($data6);

        $data7 = [
            [
           'kgm_kesenian' => 'Dance Modern',
           'kgm_olhraga' => 'Sepakbola',
           'kgm_orgnsasi' => 'Pecinta Alam',
           'kgm_lain' =>  'KNPI',
           'psertadidik_id' => 1
            ]
            ];
            DB::table('kegemarans')->insert($data7);

        $data8 = [
            [
           'beasiswa_thn' => '1987',
           'beasiswa_kls' => '1 SD',
           'beasiswa_dari' => 'Orang Tua Asuh',
           'tgl_tinggal_sklh' => '1996-06-06',
           'alasan_tinggal' => 'alasan',
           'lulus_pdk' => '1996',
           'no_tgl_ijasah' => 'Dd0101001',
           'no_tgl_skhu' => 'Dd0101001',
           'mlanjutkan_ke' => 'SMA',
           'bkerja_di' => 'SMP 196',
           'tgl_mulai_krja' =>'2010-11-10',
           'nma_prshaan' => 'SMPN 196 Jakarta',
           'penghasilan' => 'Rp. 5.000.000',
           'psertadidik_id' => 1,
            ]
            ];
            DB::table('perkembangans')->insert($data8);

        $data9 = [
            [

            'nama_ppdb'=>'Zonasi',
            'nik'=>'123456789101122',
            'kk'=>'123456789101122',
           'psertadidik_id' => 1
            ]
            ];
            DB::table('ppdbs')->insert($data9);
        $data10 = [
            [
            'tamat_dr' => 'SDN Lubang Buaya 09',
            'tgl_no_ijsh' => '06-06-Dd0001',
            'tgl_no_skhu' => '06-06-Dd0002',
            'lama_bljr' => '6',
            'pdh_dr_sklh' => '',
            'alasan_pdh' => '',
            'dtrm_kelas' => '7A',
            'dtrm_bidang' => '',
            'dtrm_program' => '',
            'dtrm_komp' => '',
            'tgl_dtrima' => '1993-07-07',
            'psertadidik_id' => 1
            ]
            ];
            DB::table('pendidikans')->insert($data10);
        $data11 = [
            [

            'tahun' =>'2023',
            'kelas_id'=>1,
            'thnplajaran_id' =>1,
            'psertadidik_id'=> 1,
            'user_id' =>1,

            ]
            ];
            DB::table('naikkelas')->insert($data11);

        //     $data12 = [
        //         [
        //         'id' => 1,
        //         'nama_kelas'=>'MOPDB'
        //         ]
        //         ];
        //         DB::table('naikkelas')->insert($data12);






    }
}
