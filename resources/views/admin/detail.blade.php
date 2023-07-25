@extends('admin.main')

@section('content')
{{-- @dd($psertadidik); --}}

<div class="row">
	<div class="col-md-15">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div align="center">Data Detail Peserta Didik
                </div>
            </div></div>
            <div align="center">
                @if($psertadidik->foto_in !='')
                <img src="{{asset('/storage/foto_in/'. $psertadidik->foto_in)}}" alt="" width="150px">
                @else
                <img src="{{asset('image/default-image.png')}}" alt="" width="200px">
             @endif
            </div>


        <div class="panel panel-default">
	        <div class="panel-body tabs">
	            <ul class="nav nav-pills">
	                <li class="active"><a href="#pilltab1" data-toggle="tab"><i class="glyphicon glyphicon-user"></i> Peserta Didik</a></li>
                    <li><a href="#pilltab2" data-toggle="tab"><i class="glyphicon glyphicon-home"></i> Tempat Tinggal</a></li>
                    <li><a href="#pilltab3" data-toggle="tab"><i class="glyphicon glyphicon-plus-sign"></i>Kesehatan</a></li>
                    <li><a href="#pilltab4" data-toggle="tab"><i class="glyphicon glyphicon-globe"></i>Pendidikan</a></li>
                    <li><a href="#pilltab5" data-toggle="tab"><i class="glyphicon glyphicon-star"></i>Ayah Kandung</a></li>
                    <li><a href="#pilltab6" data-toggle="tab"><i class="glyphicon glyphicon-star-empty"></i>Ibu Kandung</a></li>
                    <li><a href="#pilltab7" data-toggle="tab"><i class="glyphicon glyphicon-heart"></i>Wali</a></li>
                    <li><a href="#pilltab8" data-toggle="tab"><i class="glyphicon glyphicon-fire"></i>Kegemaran</a></li>
                    <li><a href="#pilltab9" data-toggle="tab"><i class="glyphicon glyphicon-pencil"></i>Perkembangan</a></li>
                    <li><a href="#pilltab10" data-toggle="tab"><i class="glyphicon glyphicon-briefcase"></i>Selesai Pendidikan</a></li>
                    <li><a href="#pilltab11" data-toggle="tab"><i class="glyphicon glyphicon-briefcase"></i>Lain-lain</a></li>
                </ul>

                <div class="tab-content">
                    <div class="tab-pane fade in active" id="pilltab1">
                        <h4>Keterangan Tentang Peserta Didik </h4>
                        <div class="container">
                            <div class="row col-md-5 col-md-offset-0 custyle">

                            <table class="table table-striped custab">
                                <tr>
                                  <td width="180">No Induk Siswa</td>
                                  <td width="2">:</td>
                                  <td>{{ $psertadidik->nipd }}
                                  </td>
                                </tr>
                                <tr>
                                  <td>Nama Lengkap Peserta Didik </td>
                                  <td>:</td>
                                  <td > {{ $psertadidik->nama_lengkap }}
                                  </td>
                                </tr>
                                <tr>
                                  <td>Nama Panggilan </td>
                                  <td>:</td>
                                  <td id="md_namapgl">{{ $psertadidik->namapgl }}
                                  </td>
                                </tr>
                                <tr>
                                  <td>Jenis Kelamin </td>
                                  <td>:</td>
                                  <td id="md_jnsklmn">{{ $psertadidik->jnsklmn }}
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
                                  <td id="md_agama">{{ $psertadidik->agama }}
                                  </td>
                                </tr>
                                <tr>
                                  <td>Kewarganegaraan</td>
                                  <td>:</td>
                                  <td id="md_kwgnegaraan">{{ $psertadidik->kwgnegaraan }}
                                  </td>
                                </tr>
                                <tr>
                                  <td>Anak Keberapa </td>
                                  <td>:</td>
                                  <td id="md_anakke">{{ $psertadidik->anakke }}
                                  </td>
                                </tr>
                                <tr>
                                  <td>Jumlah Saudara Kandung </td>
                                  <td>:</td>
                                  <td id="md_jmlh_s_kd">{{ $psertadidik->jml_s_kd }}
                                  </td>
                                </tr>
                                <tr>
                                  <td>Jumlah Saudara Tiri </td>
                                  <td>:</td>
                                  <td id="md_jmlh_s_tiri">{{ $psertadidik->jml_s_tr }}
                                  </td>
                                </tr>
                                <tr>
                                  <td>Jumlah Saudara Angkat </td>
                                  <td>:</td>
                                  <td id="md_jmlh_s_angkat">{{ $psertadidik->jml_s_angkat }}
                                  </td>
                                </tr>
                                <tr>
                                  <td>Anak Yatim/Piatu/Yatim Piatu </td>
                                  <td>:</td>
                                  <td id="md_anaky_yp_p">{{ $psertadidik->anky_yp_p }}
                                  </td>
                                </tr>
                                <tr>
                                  <td>Bahasa Sehari-hari di Rumah</td>
                                  <td>:</td>
                                  <td id="md_bhs">{{ $psertadidik->bhs }}
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
                                  <td id="md_almt">{{ $psertadidik->tinggal->almt }}
                                  </td>
                                </tr>
                                <tr>
                                  <td>Kontak</td>
                                  <td>:</td>
                                  <td id="md_nohp">{{ $psertadidik->tinggal->nohp }}
                                  </td>
                                </tr>

                                <tr>
                                <td>Tinggal Dengan</td>
                                <td>:</td>
                                <td id="md_tinggaldgn">{{ $psertadidik->tinggal->tinggaldgn }}
                                </td>
                                </tr>

                                <tr>
                                <td>Jarak Ke Sekolah</td>
                                <td>:</td>
                                <td id="md_jrk_k_sklh">{{ $psertadidik->tinggal->jrk_k_sklh }}
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
                                      <td id="md_gol_drh">{{ $psertadidik->kesehatan->gol_drh }}
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>Penyakit yg Pernah Diderita</td>
                                      <td>:</td>
                                      <td id="md_pnykit_yg_drt">{{ $psertadidik->kesehatan->pnykit_yg_drt }}
                                      </td>
                                    </tr>
                                    <tr>
                                      <td>Kelainan Jasmani</td>
                                      <td>:</td>
                                      <td id="md_kel_jasmani">{{ $psertadidik->kesehatan->kel_jasmani }}
                                      </td>
                                    </tr>

































                                    <tr>
                                      <td>Tinggi Badan dan Berat Badan </td>
                                      <td>:</td>
                                      <td><table><tr><td id="md_tinggi">{{ $psertadidik->kesehatan->tinggi }}</td><td>cm, </td><td id="md_bb">{{ $psertadidik->kesehatan->bb }}</td><td>kg</td></tr></table>
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
                                            <td id="md_tamat_dr">{{ $psertadidik->pendidikan->tamat_dr }}
                                            </td>
                                          </tr>

                                          <tr>
                                            <td>Tanggal Dan No Ijazah</td>
                                            <td>:</td>
                                            <td id="md_tgl_no_ijsh">{{ $psertadidik->pendidikan->tgl_no_ijsh }}
                                            </td>
                                          </tr>

                                          <tr>
                                            <td>Tanggal Dan No STL/SKHUN</td>
                                            <td>:</td>
                                            <td id="md_tgl_no_skhu">{{ $psertadidik->pendidikan->tgl_no_skhu }}
                                            </td>
                                          </tr>

                                          <tr>
                                            <td>Lama Belajar</td>
                                            <td>:</td>
                                            <td id="md_lama_bljr">{{ $psertadidik->pendidikan->lama_bljr }}
                                            </td>
                                            </tr>

                                        <tr><td><br><b>Pindahan</b></td><td></td><td></td></tr>

                                           <tr>
                                            <td>Dari Sekolah</td>
                                            <td>:</td>
                                            <td id="md_pdh_dr_sklah">{{ $psertadidik->pendidikan->pdh_dr_sklh }}
                                            </td>
                                          </tr>

                                          <tr>
                                            <td>Alasan</td>
                                            <td>:</td>
                                            <td id="md_alsan_pdh">{{ $psertadidik->pendidikan->alasan_pdh }}
                                            </td>
                                          </tr>

                                        <tr><td><br><b>Diterima disekolah ini</b></td><td></td><td></td></tr>

                                          <tr>
                                            <td >Kelas</td>
                                            <td >:</td>
                                            <td id="md_dtrm_kelas">{{ $psertadidik->pendidikan->dtrm_kelas }}
                                            </td>
                                          </tr>

                                          <tr>
                                            <td>Bidang Studi Keahlian</td>
                                            <td>:</td>
                                            <td id="md_dtrm_bidang">{{ $psertadidik->pendidikan->dtrm_bidang }}
                                            </td>
                                          </tr>

                                          <tr>
                                            <td>Program Studi Keahlian</td>
                                            <td>:</td>
                                            <td id="md_dtrm_program">{{ $psertadidik->pendidikan->dtrm_program }}
                                            </td>
                                          </tr>

                                          <tr>
                                            <td>Kompetensi Keahlian</td>
                                            <td>:</td>
                                            <td id="md_dtrm_komp">{{ $psertadidik->pendidikan->dtrm_komp }}
                                            </td>
                                            </tr>

                                            <tr>
                                            <td>Tanggal/Bulan/Tahun</td>
                                            <td>:</td>
                                            <td id="md_tgl_dtrima">{{ $psertadidik->pendidikan->tgl_dtrima }}
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
                                              <td id="md_nama_ak">{{ $psertadidik->ayahkandung->nama_ayah }}
                                              </td>
                                            </tr>
                                            <tr>
                                              <td>Tempat dan Tanggal Lahir</td>
                                              <td>:</td>
                                              <td> <table><tr><td id="md_tmpt_ayah">{{ $psertadidik->ayahkandung->tmpt_ayah }}</td><td>,</td><td id="md_tgl_ayah">{{ $psertadidik->ayahkandung->tgl_ayah }}</td></tr></table>
                                                </td>
                                            </tr>
                                            <tr>
                                              <td>Agama</td>
                                              <td>:</td>
                                              <td id="md_agm_ayah">{{ $psertadidik->ayahkandung->agama_ayah }}
                                              </td>
                                            </tr>

                                              <tr>
                                              <td>Kewarganegaraan</td>
                                              <td>:</td>
                                              <td id="md_kwg_ayah">{{ $psertadidik->ayahkandung->kwg_ayah }}
                                              </td>
                                              </tr>

                                              <tr>
                                                <td>Pendidikan</td>
                                                <td>:</td>
                                                <td id="md_pdikan_ayah">{{ $psertadidik->ayahkandung->pndidikan_ayah }}
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>Pekerjaan</td>
                                                <td>:</td>
                                                <td id="md_pkrjaan_ayah">{{ $psertadidik->ayahkandung->pkrjaan_ayah }}
                                                </td>
                                              </tr>
                                              <tr>
                                                <td>Pengeluaran Perbulan</td>
                                                <td>:</td>
                                                <td id="md_pngluaran_ayah">{{ $psertadidik->ayahkandung->pngeluaran_ayah }}
                                                </td>
                                                </tr>
                                                <tr>
                                                <td>Alamat Rumah</td>
                                                <td>:</td>
                                                <td id="md_almt_ayah">{{ $psertadidik->ayahkandung->almt_ayah }}
                                                </td>
                                                </tr>
                                                <tr>
                                                  <td>No HP</td>
                                                  <td>:</td>
                                                  <td id="md_no_hp_ayah">{{ $psertadidik->ayahkandung->nohp_ayah }}
                                                  </td>
                                                  </tr>
                                                  <tr>
                                                  <td>Masih Hidup/Meninggal Dunia</td>
                                                  <td>:</td>
                                                  <td id="md_hdp_mninggal_ayah">{{ $psertadidik->ayahkandung->hdp_mninggal_ayah }}
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
                                                        <td id="md_nama_ik">{{ $psertadidik->ibukandung->nama_ibu }}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tempat dan Tanggal Lahir</td>
                                                        <td>:</td>
                                                        <td><table>
                                                            <tr><td id="md_tmpt_ik">{{ $psertadidik->ibukandung->tmpt_ibu }}</td><td>,</td><td id="md_tgl_lhr_ik">{{ $psertadidik->ibukandung->tgl_ibu }}</td>
                                                            </tr>
                                                        </table>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                      <td>Agama</td>
                                                      <td>:</td>
                                                      <td id="md_agm_ik">{{ $psertadidik->ibukandung->agama_ibu }}
                                                      </td>
                                                    </tr>
                                                    <tr>
                                                    <td>Kewarganegaraan</td>
                                                    <td>:</td>
                                                    <td id="md_kwg_ik">{{ $psertadidik->ibukandung->kwg_ibu }}
                                                    </td>
                                                  </tr>
                                                  <tr>
                                                    <td>Pendidikan</td>
                                                    <td>:</td>
                                                    <td id="md_pdk_ik">{{ $psertadidik->ibukandung->pndidikan_ibu }}
                                                    </td>
                                                    </tr>
                                                    <tr>
                                                    <td>Pekerjaan</td>
                                                    <td>:</td>
                                                    <td id="md_pekerjaan_ik">{{ $psertadidik->ibukandung->pkrjaan_ibu }}
                                                    </td>
                                                  </tr>
                                                  <tr>
                                                    <td>Pengeluaran Perbulan</td>
                                                    <td>:</td>
                                                    <td id="md_pengeluaran_ibu">{{ $psertadidik->ibukandung->pngeluaran_ibu }}
                                                    </td>
                                                    </tr>
                                                    <tr>
                                                    <td>Alamat Rumah</td>
                                                    <td>:</td>
                                                    <td id="md_almat_ik">{{ $psertadidik->ibukandung->almt_ibu }}
                                                    </td>
                                                    </tr>
                                                    <tr>
                                                      <td>No HP</td>
                                                      <td>:</td>
                                                      <td id="md_no_hp_ik">{{ $psertadidik->ibukandung->nohp_ibu }}
                                                      </td>
                                                      </tr>
                                                      <tr>
                                                      <td>Masih Hidup/Meninggal Dunia</td>
                                                      <td>:</td>
                                                      <td id="md_hidup_meninggal_ik">{{ $psertadidik->ibukandung->hdp_mninggal_ibu }}
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
                                                 <td id="md_nama_wali">{{ $psertadidik->wali->nama_wali }}
                                                 </td>
                                               </tr>
                                               <tr>
                                                 <td>Tempat dan Tanggal Lahir</td>
                                                 <td>:</td>
                                                 <td ><table><tr><td id="md_tempt_wali">{{ $psertadidik->wali->tmpt_wali }}</td><td>,</td><td id="md_tgl_lhr_wali">{{ $psertadidik->wali->tgl_wali }}</td></tr></table>
                                                   </td>
                                               </tr>
                                               <tr>
                                                 <td>Agama</td>
                                                 <td>:</td>
                                                 <td id="md_agm_wali" >{{ $psertadidik->wali->agama_wali }}
                                                 </td>
                                                </tr>
                                                <tr>
                                                 <td>Kewarganegaraan</td>
                                                 <td>:</td>
                                                 <td id="md_kwg_wali">{{ $psertadidik->wali->kwg_wali }}
                                                 </td>
                                               </tr>
                                               <tr>
                                                 <td>Pendidikan</td>
                                                 <td>:</td>
                                                 <td id="md_pdk_wali">{{ $psertadidik->wali->pndidikan_wali }}
                                                 </td>
                                                 </tr>

                                                 <tr>
                                                 <td>Pekerjaan</td>
                                                 <td>:</td>
                                                 <td id="md_pkerjaan_wali">{{ $psertadidik->wali->pkrjaan_wali }}
                                                 </td>
                                               </tr>
                                               <tr>
                                                 <td>Pengeluaran Perbulan</td>
                                                 <td>:</td>
                                                 <td id="md_pengeluaran_wali">{{ $psertadidik->wali->pngeluaran_wali }}
                                                 </td>
                                                 </tr>
                                                 <tr>
                                                 <td>Alamat Rumah</td>
                                                 <td>:</td>
                                                 <td id="md_almt_wali">{{ $psertadidik->wali->almt_wali }}
                                                 </td>
                                                </tr>
                                                <tr>
                                                    <td>No HP</td>
                                                    <td>:</td>
                                                    <td id="md_no_hp_wali">{{ $psertadidik->wali->nohp_wali }}
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
                                                            <td id="md_kgm_kesenian">{{ $psertadidik->kegemaran->kgm_kesenian }}
                                                            </td>
                                                          </tr>
                                                          <tr>
                                                            <td>Olahraga</td>
                                                            <td>:</td>
                                                            <td id="md_kgm_olhrga">{{ $psertadidik->kegemaran->kgm_olhraga }}
                                                            </td>
                                                          </tr>
                                                          <tr>
                                                            <td>Kemasyarakatan</td>
                                                            <td>:</td>
                                                            <td id="md_kgm_orgnsasi">{{ $psertadidik->kegemaran->kgm_orgnsasi }}
                                                            </td>
                                                          </tr>
                                                          <tr>
                                                            <td>Lain-Lain</td>
                                                            <td>:</td>
                                                            <td id="md_kgm_lain">{{ $psertadidik->kegemaran->kgm_lain }}
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
                                                                    <table><tr><td id="md_beasiswa_thn">{{ $psertadidik->perkembangan->beasiswa_thn }}</td><td id="md_beasiswa_kls">{{ $psertadidik->perkembangan->beasiswa_kls }}</td><td id="md_beasiswa_dari">{{ $psertadidik->perkembangan->beasiswa_dari }}</td></tr></table>
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
                                                                      <td id="md_tgl_tinggal_sklh">{{ $psertadidik->perkembangan->tgl_tinggal_sklh }}
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>Alasan</td>
                                                                    <td>:</td>
                                                                    <td id="md_alasan_tinggal">{{ $psertadidik->perkembangan->alasan_tinggal }}
                                                                    </td>
                                                                  </tr>
                                                                </table>
                                                            </div>
                                                        </div>
                                                        <br><b>Akhir Pendidikan</b>
                                                        <div class="container">
                                                            <div class="row col-md-5 col-md-offset-0 custyle">
                                                            <table class="table table-striped custab">
                                                          <tr>
                                                            <td width="180">Lulus</td>
                                                            <td width="2">:</td>
                                                            <td id="md_lulus_pdk">{{ $psertadidik->perkembangan->lulus_pdk }}
                                                            </td>
                                                          </tr>
                                                          <tr>
                                                            <td>Nomor/Tanggal Ijazah</td>
                                                            <td>:</td>
                                                            <td id="md_no_tgl_ijasah">{{ $psertadidik->perkembangan->no_tgl_ijasah }}
                                                            </td>
                                                          </tr>
                                                          <tr>
                                                            <td>Nomor/Tanggal SKHUN</td>
                                                            <td>:</td>
                                                            <td id="md_no_tgl_skhu">{{ $psertadidik->perkembangan->no_tgl_skhu }}
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
                                                                <td id="md_mlnjutkan_ke">{{ $psertadidik->perkembangan->mlanjutkan_ke }}
                                                                </td>
                                                              </tr>

                                                              <tr>
                                                                <td>Bekerja Di</td>
                                                                <td>:</td>
                                                                <td id="md_bkerja_di">{{ $psertadidik->perkembangan->bkerja_di }}
                                                                </td>
                                                              </tr>
                                                              <tr>
                                                                  <td>Tanggal Mulai Bekerja</td>
                                                                  <td>:</td>
                                                                  <td id="md_tgl_mulai_krja">{{ $psertadidik->perkembangan->tgl_mulai_krja }}
                                                                  </td>
                                                              </tr>
                                                              <tr>
                                                                <td>Nama Perusahaan/Lembaga</td>
                                                                <td>:</td>
                                                                <td id="md_nma_prshaan">{{ $psertadidik->perkembangan->nma_prshaan }}
                                                                </td>
                                                                </tr>

                                                                <tr>
                                                                <td>Penghasilan</td>
                                                                <td>:</td>
                                                                <td id="md_penghasilan">{{ $psertadidik->perkembangan->penghasilan }}
                                                                </td>
                                                              </tr>
                                                            </table>
                                                         </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane fade" id="pilltab11">
                                                        <div class="container">
                                                            <div class="row col-md-5 col-md-offset-0 custyle">
                                                                <table class="table table-striped custab">
                                                                    <tr>
                                                                       <td width="180">Jalur PPDB</td>
                                                                       <td width="2">:</td>
                                                                       <td id="md_mlnjutkan_ke">{{ $psertadidik->ppdb->nama_ppdb}}
                                                                       </td>
                                                                     </tr>
                                                                     <tr>
                                                                       <td>NIK</td>
                                                                       <td>:</td>
                                                                       <td id="md_bkerja_di">{{ $psertadidik->ppdb->nik }}
                                                                       </td>
                                                                     </tr>

                                                                     <tr>
                                                                       <td>No Kartu Keluarga</td>
                                                                       <td>:</td>
                                                                       <td id="md_tgl_mulai_krja">{{  $psertadidik->ppdb->kk}}
                                                                       </td>
                                                                     </tr>

                                                                     {{-- <tr>
                                                                       <td>Foto Masuk</td>
                                                                       <td>:</td>
                                                                       <td id="md_foto_in">{{ $psertadidik->foto_in }}
                                                                       </td>
                                                                       </tr>

                                                                       <tr>
                                                                       <td>Foto Lulus</td>
                                                                       <td>:</td>
                                                                       <td id="md_foto_out">{{ $psertadidik->foto_out }}
                                                                       </td>
                                                                     </tr> --}}
                                                                   </table>
                                                                </div>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>


@endsection




























































































