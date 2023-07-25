{{-- <!-- Button trigger modal -->
    <!-- Modal -->
    <div class="modal fade" id="psertadidikShowModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" >
        <div class="modal-dialog">
            <div class="modal-content">
                 <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>
                <div align="center">
                <h4 class="modal-title" id="exampleModalLabel" >Detail Siswa</h4><br>
               {{-- <img class="img-thumbnail" alt="Foto siswa" id="md_fotomasuk" style="max-height:150px"> --}}
              </div>
              <div class="modal-body">
              <div class="panel panel-default">
              <div class="panel-body tabs">
            <ul class="nav nav-pills">
              {{-- <li class="active"><a href="#pilltab1" data-toggle="tab"><i class="glyphicon glyphicon-user"></i> Peserta Didik</a></li> --}}
              <li><a href="#pilltab1" data-toggle="tab"><i class="glyphicon glyphicon-user"></i> Peserta Didik</a></li>
              <li><a href="#pilltab2" data-toggle="tab"><i class="glyphicon glyphicon-home"></i> Tempat Tinggal</a></li>
              <li><a href="#pilltab3" data-toggle="tab"><i class="glyphicon glyphicon-plus-sign"></i>Kesehatan</a></li>
              <li><a href="#pilltab4" data-toggle="tab"><i class="glyphicon glyphicon-globe"></i>Pendidikan</a></li>
              <li><a href="#pilltab5" data-toggle="tab"><i class="glyphicon glyphicon-star"></i>Ayah Kandung</a></li>
              <li><a href="#pilltab6" data-toggle="tab"><i class="glyphicon glyphicon-star-empty"></i>Ibu Kandung</a></li>
              <li><a href="#pilltab7" data-toggle="tab"><i class="glyphicon glyphicon-heart"></i>Wali</a></li>
              <li><a href="#pilltab8" data-toggle="tab"><i class="glyphicon glyphicon-fire"></i>Kegemaran</a></li>
              <li><a href="#pilltab9" data-toggle="tab"><i class="glyphicon glyphicon-pencil"></i>Perkembangan</a></li>
              <li><a href="#pilltab10" data-toggle="tab"><i class="glyphicon glyphicon-briefcase"></i>Selesai Pendidikan</a></li>
            </ul>


{{-- Isi Tab --}}
            <div class="tab-content">
                <div class="tab-pane fade in active" id="pilltab1">
                <h4>Keterangan Tentang Peserta Didik </h4>
                <div class="container">
                    <div class="row col-md-5 col-md-offset-0 custyle">
                    <table class="table table-striped custab">
                        <tr>
                          <td width="180">No Induk Siswa</td>
                          <td width="2">:</td>
                          <td id="md_nipd">
                          </td>
                        </tr>
                        <tr>
                          <td>Nama Lengkap Peserta Didik </td>
                          <td>:</td>
                          <td id="md_nama_lengkap">
                          </td>
                        </tr>

                        <tr>
                          <td>Nama Panggilan </td>
                          <td>:</td>
                          <td id="md_namapgl">
                          </td>
                        </tr>

                        <tr>
                          <td>Jenis Kelamin </td>
                          <td>:</td>
                          <td id="md_jnsklmn">
                          </td>
                        </tr>

                        <tr>
                          <td>Tempat dan Tanggal Lahir </td>
                          <td>:</td>
                          <td ><table><tr><td id="md_tempat"></td><td>,</td><td id="md_tgllhr"></td></tr></table>
                          </td>
                        </tr>

                        <tr>
                          <td>Agama</td>
                          <td>:</td>
                          <td id="md_agama">
                          </td>
                        </tr>

                        <tr>
                          <td>Kewarganegaraan</td>
                          <td>:</td>
                          <td id="md_kwgnegaraan">
                          </td>
                        </tr>

                        <tr>
                          <td>Anak Keberapa </td>
                          <td>:</td>
                          <td id="md_anakke">
                          </td>
                        </tr>

                        <tr>
                          <td>Jumlah Saudara Kandung </td>
                          <td>:</td>
                          <td id="md_jmlh_s_kdg">
                          </td>
                        </tr>

                        <tr>
                          <td>Jumlah Saudara Tiri </td>
                          <td>:</td>
                          <td id="md_jmlh_s_tiri">
                          </td>
                        </tr>

                        <tr>
                          <td>Jumlah Saudara Angkat </td>
                          <td>:</td>
                          <td id="md_jmlh_s_angkat">
                          </td>
                        </tr>

                        <tr>
                          <td>Anak Yatim/Piatu/Yatim Piatu </td>
                          <td>:</td>
                          <td id="md_anaky_yp_p">
                          </td>
                        </tr>

                        <tr>
                          <td>Bahasa Sehari-hari di Rumah</td>
                          <td>:</td>
                          <td id="md_bhs">
                          </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>





        <div class="tab-pane fade" id="pilltab2">
            <h4>Keterangan Tempat Tinggal</h4>
                <div class="container">
                    <div class="row col-md-5 col-md-offset-0 custyle">
                        <table class="table table-striped custab">
                            <tr>
                              <td width="180">Alamat</td>
                              <td width="2">:</td>
                              <td id="md_almt">
                              </td>
                            </tr>
                            <tr>
                              <td>Kontak</td>
                              <td>:</td>
                              <td id="md_nohp">
                              </td>
                            </tr>

                            <tr>
                            <td>Tinggal Dengan</td>
                            <td>:</td>
                            <td id="md_tinggaldgn">
                            </td>
                            </tr>

                            <tr>
                            <td>Jarak Ke Sekolah</td>
                            <td>:</td>
                            <td id="md_jrk_k_sklh">
                            </td>
                            </tr>

                            <tr>
                              <td width="180">Alamat</td>
                              <td width="2">:</td>
                              <td id="md_almt">
                              </td>
                            </tr>


                          </table>
                        </div>
                    </div>
                </div>


        <div class="tab-pane fade" id="pilltab3">
            <h4>Keterangan Kesehatan</h4>
                <div class="container">
                    <div class="row col-md-5 col-md-offset-0 custyle">
                        <table class="table table-striped custab">
                            <tr>
                                <td width="180">Golongan Darah</td>
                                <td width="2">:</td>
                                <td id="md_gol_drh">
                                </td>
                            </tr>

                            <tr>
                                <td>Penyakit yg Pernah Diderita</td>
                                <td>:</td>
                                <td id="md_pnykit_yg_drt">
                                </td>
                            </tr>

                            <tr>
                                <td>Kelainan Jasmani</td>
                                <td>:</td>
                                <td id="md_kel_jasmani">
                                </td>

                            </tr>

                            <tr>
                                <td>Tinggi Badan dan Berat Badan </td>
                                <td>:</td>
                                <td><table><tr><td id="md_tinggi"></td><td>cm, </td><td id="md_bb"></td><td>kg</td></tr></table>
                                </td>
                              </tr>
                          </table>
                    </div>
                </div>
        </div>

        <div class="tab-pane fade" id="pilltab4">
            <h4>Keterangan Pendidikan</h4>
            <br>
            <b>Pendidikan Sebelumnya</b>
            <div class="container">
                <div class="row col-md-5 col-md-offset-0 custyle">
                <table class="table table-striped custab">
                    <tr>
                     <td width="180">Tamatan Dari</td>
                     <td width="2">:</td>
                     <td id="md_tamat_dr">
                     </td>
                   </tr>
                   <tr>
                       <td>Tanggal Dan No Ijazah</td>
                       <td>:</td>
                       <td id="md_tgl_no_ijsh">
                       </td>
                   </tr>
                   <tr>
                     <td>Tanggal Dan No STL/SKHUN</td>
                     <td>:</td>
                     <td id="md_tgl_no_skhu">
                     </td>
                   </tr>
                   <tr>
                     <td>Lama Belajar</td>
                     <td>:</td>
                     <td id="md_lama_bljr">
                     </td>
                     </tr>
                     <tr><td><br><b>Pindahan</b></td><td></td><td></td></tr>
                     <tr>
                      <td>Dari Sekolah</td>
                      <td>:</td>
                      <td id="md_pdh_dr_sklah">
                      </td>
                    </tr>
                    <tr>
                        <td>Alasan</td>
                        <td>:</td>
                        <td id="md_alsan_pdh">
                        </td>
                      </tr>

                    <tr><td><br><b>Diterima disekolah ini</b></td><td></td><td></td></tr>
                    <tr>
                      <td >Kelas</td>
                      <td >:</td>
                      <td id="md_dtrm_kelas">
                      </td>
                    </tr>
                    <tr>
                      <td>Bidang Studi Keahlian</td>
                      <td>:</td>
                      <td id="md_dtrm_bidang">
                      </td>
                    </tr>

                    <tr>
                      <td>Program Studi Keahlian</td>
                      <td>:</td>
                      <td id="md_dtrm_program">
                      </td>
                    </tr>

                    <tr>
                      <td>Kompetensi Keahlian</td>
                      <td>:</td>
                      <td id="md_dtrm_komp">
                      </td>
                      </tr>

                      <tr>
                      <td>Tanggal/Bulan/Tahun</td>
                      <td>:</td>
                      <td id="md_tgl_dtrima">
                      </td>
                    </tr>
                 </table>
             </div>
         </div>
     </div>

     <div class="tab-pane fade" id="pilltab5">
         <h4>Keterangan Tentang Ayah Kandung</h4>
             <div class="container">
                 <div class="row col-md-5 col-md-offset-0 custyle">
                     <table class="table table-striped custab">
                         <tr>
                           <td width="180">Nama</td>
                           <td width="2">:</td>
                           <td id="md_nama_ak">
                           </td>
                         </tr>
                         <tr>
                             <td>Tempat dan Tanggal Lahir</td>
                             <td>:</td>
                             <td> <table><tr><td id="md_tmpt_ayah"></td><td>,</td><td id="md_tgl_ayah"></td></tr></table>
                               </td>
                           </tr>
                           <tr>
                             <td>Agama</td>
                             <td>:</td>
                             <td id="md_agm_ayah">
                             </td>
                           </tr>

                             <tr>
                             <td>Kewarganegaraan</td>
                             <td>:</td>
                             <td id="md_kwg_ayah">
                             </td>
                             </tr>

                             <tr>
                               <td>Pendidikan</td>
                               <td>:</td>
                               <td id="md_pdikan_ayah">
                               </td>
                               </tr>

                               <tr>
                               <td>Pekerjaan</td>
                               <td>:</td>
                               <td id="md_pkrjaan_ayah">
                               </td>
                             </tr>

                             <tr>
                               <td>Pengeluaran Perbulan</td>
                               <td>:</td>
                               <td id="md_pngluaran_ayah">
                               </td>
                               </tr>

                               <tr>
                               <td>Alamat Rumah</td>
                               <td>:</td>
                               <td id="md_almt_ayah">
                               </td>
                               </tr>

                               <tr>
                                 <td>No HP</td>
                                 <td>:</td>
                                 <td id="md_no_hp_ayah">
                                 </td>
                                 </tr>

                                 <tr>
                                 <td>Masih Hidup/Meninggal Dunia</td>
                                 <td>:</td>
                                 <td id="md_hdp_mninggal_ayah">
                                 </td>
                               </tr>
                             </table>
                           </div>
                       </div>
                   </div>

                   <div class="tab-pane fade" id="pilltab6">
                       <h4>Keterangan Tentang Ibu Kandung</h4>
                           <div class="container">
                               <div class="row col-md-5 col-md-offset-0 custyle">
                                   <table class="table table-striped custab">
                                       <tr>
                                           <td width="180">Nama</td>
                                           <td width="2">:</td>
                                           <td id="md_nama_ik">
                                           </td>
                                       </tr>
                                       <tr>
                                           <td>Tempat dan Tanggal Lahir</td>
                                           <td>:</td>
                                           <td><table><tr><td id="md_tmpt_ik"></td>
                                               <td>,</td><td id="md_tgl_lhr_ik"></td></tr></table>
                                           </td>
                                       </tr>
                                       <tr>
                                         <td>Agama</td>
                                         <td>:</td>
                                         <td id="md_agm_ik">
                                         </td>
                                       </tr>
                                       <tr>
                                       <td>Kewarganegaraan</td>
                                       <td>:</td>
                                       <td id="md_kwg_ik">
                                       </td>
                                     </tr>

                                     <tr>
                                       <td>Pendidikan</td>
                                       <td>:</td>
                                       <td id="md_pdk_ik">
                                       </td>
                                       </tr>

                                       <tr>
                                       <td>Pekerjaan</td>
                                       <td>:</td>
                                       <td id="md_pekerjaan_ik">
                                       </td>
                                     </tr>

                                     <tr>
                                         <td>Pengeluaran Perbulan</td>
                                         <td>:</td>
                                         <td id="md_pengeluaran_ibu">
                                         </td>
                                         </tr>

                                         <tr>
                                         <td>Alamat Rumah</td>
                                         <td>:</td>
                                         <td id="md_almat_ik">
                                         </td>
                                         </tr>

                                       <tr>
                                         <td>No HP</td>
                                         <td>:</td>
                                         <td id="md_no_hp_ik">
                                         </td>
                                         </tr>

                                         <tr>
                                         <td>Masih Hidup/Meninggal Dunia</td>
                                         <td>:</td>
                                         <td id="md_hidup_meninggal_ik">
                                         </td>
                                       </tr>
                                     </table>
                                   </div>
                               </div>
                           </div>

                           <div class="tab-pane fade" id="pilltab7">
                               <h4>Keterangan Tentang Wali</h4>
                               <div class="container">
                                   <div class="row col-md-5 col-md-offset-0 custyle">
                                       <table class="table table-striped custab">
                                           <tr>
                                               <td width="180">Nama</td>
                                               <td width="2">:</td>
                                               <td id="md_nama_wali">
                                               </td>
                                             </tr>
                                             <tr>
                                               <td>Tempat dan Tanggal Lahir</td>
                                               <td>:</td>
                                               <td ><table><tr><td id="md_tempt_wali"></td><td>,</td><td id="md_tgl_lhr_wali"></td></tr></table>
                                                 </td>
                                             </tr>
                                             <tr>
                                               <td>Agama</td>
                                               <td>:</td>
                                               <td id="md_agm_wali" >
                                               </td>
                                               </tr>
                                               <tr>
                                               <td>Kewarganegaraan</td>
                                               <td>:</td>
                                               <td id="md_kwg_wali">
                                               </td>
                                             </tr>

                                             <tr>
                                               <td>Pendidikan</td>
                                               <td>:</td>
                                               <td id="md_pdk_wali">
                                               </td>
                                               </tr>
                                               <tr>
                                               <td>Pekerjaan</td>
                                               <td>:</td>
                                               <td id="md_pkerjaan_wali">
                                               </td>
                                             </tr>
                                             <tr>
                                               <td>Pengeluaran Perbulan</td>
                                               <td>:</td>
                                               <td id="md_pengeluaran_wali">
                                               </td>
                                               </tr>
                                               <tr>
                                               <td>Alamat Rumah</td>
                                               <td>:</td>
                                               <td id="md_almt_wali">
                                               </td>
                                               </tr>
                                               <tr>
                                                 <td>No HP</td>
                                                 <td>:</td>
                                                 <td id="md_no_hp_wali">
                                                 </td>
                                                 </tr>
                                             </table>
                                         </div>
                                     </div>
                                 </div>

                                 <div class="tab-pane fade" id="pilltab8">
                                     <h4>Kegemaran Peserta Didik</h4>
                                     <div class="container">
                                         <div class="row col-md-5 col-md-offset-0 custyle">
                                             <table class="table table-striped custab">
                                                 <tr>
                                                     <td width="180">Kesenian</td>
                                                     <td width="2">:</td>
                                                     <td id="md_kgm_kesenian">
                                                     </td>
                                                   </tr>

                                                   <tr>
                                                     <td>Olahraga</td>
                                                     <td>:</td>
                                                     <td id="md_kgm_olhrga">
                                                     </td>
                                                   </tr>

                                                   <tr>
                                                     <td>Kemasyarakatan</td>
                                                     <td>:</td>
                                                     <td id="md_kgm_orgnsasi">
                                                     </td>
                                                   </tr>

                                                   <tr>
                                                     <td>Lain-Lain</td>
                                                     <td>:</td>
                                                     <td id="md_kgm_lain">
                                                     </td>
                                                     </tr>
                                                   </table>
                                               </div>
                                           </div>
                                       </div>

                                       <div class="tab-pane fade" id="pilltab9">
                                         <h4>Keterangan Perkembangan Peserta Didik</h4>
                                         <div class="container">
                                                             <div class="row col-md-5 col-md-offset-0 custyle">
                                                                 <table class="table table-striped custab">
                                                                     <tr>
                                                                         <td width="180">Menerima Beasiswa Tahun</td>
                                                                         <td width="2">:</td>
                                                                         <td>
                                                                             <table><tr><td id="md_beasiswa_thn"></td><td id="md_beasiswa_kls"></td><td id="md_beasiswa_dari"></td></tr></table>
                                                                         </td>
                                                                     </tr>
                                                                 </table>
                                                             </div>
                                                         </div>
                                                         <br><b>Meninggalkan Sekolah Ini</b>
                                                         <div class="container">
                                                             <div class="row col-md-5 col-md-offset-0 custyle">
                                                             <table class="table table-striped custab">
                                                                 <tr>
                                                                     <td width="180">Tanggal Meninggalkan </td>
                                                                     <td width="2">:</td>
                                                                     <td id="md_tgl_tinggal_sklh">
                                                                     </td>
                                                                 </tr>
                                                                 <tr>
                                                                   <td>Alasan</td>
                                                                   <td>:</td>
                                                                   <td id="md_alasan_tinggal">
                                                                   </td>
                                                                 </tr>
                                                               </table></div></div>

                                                               <br><b>Akhir Pendidikan</b>
                                                               <div class="container">
                                                                   <div class="row col-md-5 col-md-offset-0 custyle">
                                                                   <table class="table table-striped custab">
                                                                 <tr>
                                                                   <td width="180">Lulus</td>
                                                                   <td width="2">:</td>
                                                                   <td id="md_lulus_pdk">
                                                                   </td>
                                                                 </tr>

                                                                 <tr>
                                                                   <td>Nomor/Tanggal Ijazah</td>
                                                                   <td>:</td>
                                                                   <td id="md_no_tgl_ijasah">
                                                                   </td>
                                                                 </tr>

                                                                 <tr>
                                                                   <td>Nomor/Tanggal SKHUN</td>
                                                                   <td>:</td>
                                                                   <td id="md_no_tgl_skhu">
                                                                   </td>
                                                                 </tr>
                                                               </table>
                                                             </div>
                                                         </div>
                                                     </div>

                                                     <div class="tab-pane fade" id="pilltab10">
                                                         <div class="container">
                                                                           <div class="row col-md-5 col-md-offset-0 custyle">
                                                                               <table class="table table-striped custab">
                                                                                   <tr>
                                                                                      <td width="180">Melanjutkan Ke</td>
                                                                                      <td width="2">:</td>
                                                                                      <td id="md_mlnjutkan_ke">
                                                                                      </td>
                                                                                    </tr>

                                                                                    <tr>
                                                                                      <td>Bekerja Di</td>
                                                                                      <td>:</td>
                                                                                      <td id="md_bkerja_di">
                                                                                      </td>
                                                                                    </tr>

                                                                                    <tr>
                                                                                      <td>Tanggal Mulai Bekerja</td>
                                                                                      <td>:</td>
                                                                                      <td id="md_tgl_mulai_krja">
                                                                                      </td>
                                                                                    </tr>

                                                                                    <tr>
                                                                                      <td>Nama Perusahaan/Lembaga</td>
                                                                                      <td>:</td>
                                                                                      <td id="md_nma_prshaan">
                                                                                      </td>
                                                                                      </tr>

                                                                                      <tr>
                                                                                      <td>Penghasilan</td>
                                                                                      <td>:</td>
                                                                                      <td id="md_penghasilan">
                                                                                      </td>
                                                                                    </tr>
                                                                                  </table>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>










 {{-- Modal Script --}}
<script type="text/javascript">
$(document).ready(function () {
 $('body').on('click', '#show-psertadidik', function () {
var userURL = $(this).data('url');
$.get(userURL, function (data) {
    $('#psertadidikShowModal').modal('show');
    $('#md_nipd').text(data.nipd);
    $('#md_nama_lengkap').text(data.nama_lengkap);
    $('#md_namapgl').text(data.namapgl);
    $("#md_jnsklmn").text(data.jnsklmn);
    $("#md_tempat").text(data.tempatlhr);
    $("#md_tgllhr").text(data.tgllhr);
    $("#md_agama").text(data.agama );
    $("#md_kwgnegaraan").text(data.kwgnegaraan );
    $("#md_anakke").text( data.anakke);
    $("#md_jmlh_s_kdg").text(data.jml_s_kd);
    $("#md_jmlh_s_tiri").text(data.jml_s_tr );
    $("#md_jmlh_s_angkat").text(data.jml_s_angka);
    $("#md_anaky_yp_p").text(data.anky_yp_p );
    $("#md_bhs").text(data.bhs);
    // });
// })
// });


// $(document).ready(function () {
//  $('body').on('click', '#pilltab2', function () {
// var userURL = $(this).data('url');
// $.get(userURL, function (data) {
    $("#md_almt").text(data.almt) ;
    $("#md_nohp").text(data.nohp);
    $("#md_tinggaldgn").text(data.tinggaldgn);
    $("#md_jrk_k_sklhh").text(data.jrk_k_sklh );
    $("#md_gol_drh").text(data.gol_drh);

    // $("#md_pnykit_yg_drt").text("#pnyki );
    // $("#md_kel_jasmani").text("#kel );
    // $("#md_tinggi").text( );
    // $("#md_bb").t );
    // $("#md_tamat_dr").text("# );
    // $("#md_tgl_no_ijsh").text("#tgl );
    // $("#md_tgl_no_skhu").text("#tgl );
    // $("#md_lama_bljr").text("#l );
    // $("#md_pdh_dr_sklah").text("#pdh_ );
    // $("#md_alsan_pdh").text("#a );
    // $("#md_dtrm_kelas").text("#dt );
    // $("#md_dtrm_bidang").text("#dtr );
    // $("#md_dtrm_program").text("#dtrm );
    // $("#md_dtrm_komp").text("#d );
    // $("#md_tgl_dtrima").text("#tg );
    // $("#md_nama_ak").text(" );
    // $("#md_tmpt_ayah").text("#t );
    // $("#md_tgl_ayah").text("# );
    // $("#md_agm_ayah").text("# );
    // $("#md_kwg_ayah").text("# );
    // $("#md_pdikan_ayah").text("#pdi );
    // $("#md_pkrjaan_ayah").text("#pkrj );
    // $("#md_pngluaran_ayah").text("#pnglua );
    // $("#md_almt_ayah").text("#alm );
    // $("#md_hdp_mninggal_ayah").text("#hdp_mning );
    // $("#md_nama_ik").text(" );
    // $("#md_tmpt_ik").text(" );
    // $("#md_tgl_lhr_ik").text("#tg );
    // $("#md_agm_ik").text( );
    // $("#md_kwg_ik").text( );
    // $("#md_pdk_ik").text( );
    // $("#md_pekerjaan_ik").text("#peke );
    // $("#md_pengeluaran_ibu").text("#pengelu );
    // $("#md_almat_ik").text("# );
    // $("#md_no_hp_ik").text("# );
    // $("#md_hidup_meninggal_ik").text("#hidup_meni );
    // $("#md_nama_wali").text("#n );
    // $("#md_tempt_wali").text("#te );
    // $("#md_tgl_lhr_wali").text("#tgl_ );
    // $("#md_agm_wali").text("# );
    // $("#md_kwg_wali").text("# );
    // $("#md_pdk_wali").text("# );
    // $("#md_pkerjaan_wali").text("#pkerj );
    // $("#md_pengeluaran_wali").text("#pengelua );
    // $("#md_almt_wali").text("#a );
    // $("#md_no_hp_wali").text("#no );
    // $("#md_kgm_kesenian").text("#kgm_ );
    // $("#md_kgm_olhrga").text("#kg );
    // $("#md_kgm_orgnsasi").text("#kgm_ );
    // $("#md_kgm_lain").text("# );
    // $("#md_beasiswa_thn").text("#beas );
    // $("#md_beasiswa_kls").text("#beas );
    // $("#md_beasiswa_dari").text("#beasi );
    // $("#md_tgl_tinggal_sklh").text("#tgl_ting );
    // $("#md_alasan_tinggal").text("#alasan );
    // $("#md_lulus_pdk").text("#l );
    // $("#md_no_tgl_ijasah").text("#no_tg );
    // $("#md_no_tgl_skhu").text("#no_ );
    // $("#md_mlnjutkan_ke").text("#mlnj );
    // $("#md_bkerja_di").text("#bkerja_di data. );
    // $("#md_tgl_mulai_krja").text("#tgl_mulai_krja data. );
    // $("#md_nma_prshaan").text("#nma_prshaan data. );
    // $("#md_penghasilan").text("#penghasilan data. );




});
})
});

{{-- </script> --}} --}}
