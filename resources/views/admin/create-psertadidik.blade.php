@extends('admin.main')

@section('content')

@if ($errors->any())
<div class="alert alert-danger" role="alert">
    <ul>
        @foreach ($errors->all() as $error )</ul>
          <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{ route('store_psertadidik') }}" method="post" enctype="multipart/form-data" >
    @csrf
		  <div class="row">
		    <div class="panel panel-primary">
			    <div class="panel-heading">
						<div align="center">Form Registrasi Peserta Didik
					    </div>
					</div>
				</div>
      </div>

    <div class="row">
            <div class="panel panel-primary">
              <div align="center">
                <div class="col-md-8">
				          <div class="panel panel-default">
					          <div class="panel-body tabs">
                      <p><h4>Keterangan Tentang Peserta Didik </h4></p>

								    <table width="526">
                    <input name="id" type="hidden"  id="id">
                    <tr>
                      <td>NIPD </td>
                      <td>:</td>
                      <td><div class="col-md-10">
                            <div class="form-group">
                              <input type="number" name="nipd" id="nipd" class="form-control" value="{{ $nipd }}" readonly>
	                          </div>
                          </div></td>
                    </tr>
                    <tr>
                      <td>NISN </td>
                      <td>:</td>
                      <td><div class="col-md-10">
                            <div class="form-group">
	                            <input name="nisn" type="number" class="form-control" >
	                          </div>
                          </div>
	                    </td>
                    </tr>

                    <tr>
                      <td width="202">Nama Lengkap Peserta Didik </td>
                      <td width="2">:</td>
                      <td width="306">
	                      <div class="col-md-10">
                          <div class="form-group">
	                        <input name="nama_lengkap" type="text" class="form-control">
	                        </div>
                        </div></td>
                    </tr>

                    <tr>
                      <td>Nama Panggilan </td>
                      <td>:</td>
                      <td><div class="col-md-10">
                            <div class="form-group">
                              <input name="namapgl" type="text" class="form-control" >
                            </div>
                          </div>
                      </td>
                    </tr>

                    <tr>
                      <td>Jenis Kelamin </td>
                      <td>:</td>
                      <td><div class="col-md-5">
                            <div class="form-group">
                              <select name="jnsklmn" size="1" id="select1" class="form-control">
                                <option selected>Laki-laki</option>
                                <option>Perempuan</option>
                              </select>
                            </div>
                          </div></td>
                    </tr>

                    <tr>
                      <td>Tempat dan Tanggal Lahir </td>
                      <td>:</td>
                      <td><div class="col-md-6">
                            <div class="form-group">
                                <input name="tempatlhr" type="text" size="15" class="form-control" >
                            </div>
                          </div>
                          <div class="col-lg-6">
                            <div class="form-group">
                                <input type="date" name="tgllhr" id="tgllhr" class="form-control" value="{{ date('Y-m-d') }}">
                            </div>
                        </div>
                      </tr>
                      <tr>
                        <td>Agama</td>
                        <td>:</td>
                        <td><div class="col-md-5">
                                <div class="form-group">
                                    <select name="agama" size="1" id="select1" class="form-control">
                                        <option>Islam</option>
                                        <option>Kristen</option>
                                        <option>Khatolik</option>
                                        <option>Hindu</option>
                                        <option>Budha</option>
                                        <option>Kepercayaan</option>
                                    </select>
                                </div>
                            </div>
                        </td>
                      </tr>
                      <tr>
                        <td>Kewarganegaraan</td>
                        <td>:</td>
                        <td><div class="col-md-5">
                                <div class="form-group">
                                    <select name="kwgnegaraan" size="1" id="select2" class="form-control">
                                        <option>WNI</option>
                                        <option>WNA</option>
                                    </select>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Anak Keberapa </td>
                        <td>:</td>
                        <td><div class="col-md-10">
                                <div class="form-group">
                                    <input type="number" name="anakke" class="form-control">
                                </div>
                            </div>
                          </td>
                    </tr>

                    <tr>
                        <td>Jumlah Saudara Kandung </td>
                        <td>:</td>
                        <td><div class="col-md-10">
                                <div class="form-group">
                                    <input type="number" name="jml_s_kd" class="form-control">
                                </div>
                            </div>
                        </td>
                    </tr>

                <tr>
                    <td>Jumlah Saudara Tiri </td>
                    <td>:</td>
                    <td><div class="col-md-10">
                            <div class="form-group">
                                <input type="number" name="jml_s_tr" class="form-control">
                            </div>
                        </div>
                    </td>
                </tr>

                <tr>
                      <td>Jumlah Saudara Angkat </td>
                      <td>:</td>
                      <td><div class="col-md-10">
                            <div class="form-group">
                                <input type="number" name="jml_s_angkat" class="form-control">
                            </div>
                        </div>
                      </td>
                </tr>
                <tr>
                    <td>Anak Yatim/Piatu/Yatim Piatu </td>
                    <td>:</td>
                    <td><div class="col-md-10">
                            <div class="form-group">
                                <select name="anky_yp_p" size="1" id="select4" class="form-control">
                                    <option>Tidak</option>
                                    <option>Yatim</option>
                                    <option>Piatu</option>
                                    <option>Yatim Piatu</option>
                                </select>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>Bahasa Sehari-hari di Rumah</td>
                    <td>:</td>
                    <td><div class="col-md-10">
                            <div class="form-group">
                                <input type="text" name="bhs" class="form-control">
                            </div>
                        </div>
                    </td>
                </tr>
                <tr>
                    <td><label for="foto">Foto Awal</label></td>
                    <td>:</td>
                    <td><div class="col-md-10">
                            <div class="form-group">
                                <label for="image" class="form-label">Foto Awal</label>
                                <img  class="foto-preview img-fluid mb-2 col-sm-8" >
                                <input type="file" class="form-control" id="foto_in" name="foto_in" onchange="previewImage()">
                            </div>


                        </div>
                    </td>
                </tr>
            </table>
        </div>
        <table>
        <tr>
          <td></td>
          <td></td><div class="form-group">
          <td><input name="SIMPAN" type="submit" id="SIMPAN" value="SIMPAN" class="btn btn-primary"></td>
          </div>
        </tr>
      </table>
      </div>










</form>
</div>
</div>
<script>

    function previewImage(){
        const image = document.querySelector ('#foto_in');
        const imgPreview = document.querySelector ('.foto-preview');

        imgPreview.style.display ='blok';
    const oFReader = new FileReader();
    oFReader.readAsDataURL(image.files[0]);

    oFReader.onload = function(oFREevent) {
        imgPreview.src = oFREevent.target.result;
    }
    }


</script>

@endsection

