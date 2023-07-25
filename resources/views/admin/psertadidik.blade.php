
@extends('admin.main')

<meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>

    @section('content')

	<div class="row">
		  <div class="col-md-15">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<div align="center">Daftar Peserta Didik
					    </div>
					</div>
                    <div class="panel-body">
                        <div class="col-md-12 col-sm-10">
                            <form method="get" action="">
                                @csrf
                                <div class="form-group">
                                    <div class="col-md-4">
                                        <input type="text" name="keyword"  placeholder=" Cari NIPD" class="form-control" style="inline">
                                    </div>
                                    <div class="col-md-2">
                                        <button class="btn btn-primary btn-xm" style="inline">Cari </button>
                                    </div></form>
                                    <div class="col-md-4">
                                          @if (Auth::user()->role_id == 3)
                                        <a href="{{ route('create_psertadidik') }}" class="btn btn-primary " style="width: 50%"><b>+</b> Tambah Data</a>
                                            <p> @if (Session::has('status'))
                                                <div class="alert alert-info" role="alert">
                                                    {{ Session::get('message') }}
                                                </div>
                                                @endif</p> @endif
                                            </div>
                                       </div>

                                   </div>
                               </div>
                               <div class="panel-body">
                                  <div class="col-md-12">
                                   <table class="table table-striped custab">
                                       <thead>
                                           <tr>
                                             <th >No
                                                  </th>
                                              <th >NIPD
                                                  </th>
                                               <th >NISN
                                                  </th>
                                               <th >Nama Lengkap
                                                   </th>
                                               <th >Jenis Kelamin
                                                   </th>
                                               <th >Kelas
                                                  </th>
                                               <th >Status
                                                  </th>
                                                   <th class="text-center">Action</th>
                                             </tr>
                                          </thead>
                                          <tr> @foreach ($psertadidiks as $psertadidik )
                                          <td> {{ $loop->iteration }}</td>
                                          <td> {{ $psertadidik->nipd }} </td>
                                          <td> {{ $psertadidik->nisn }} </td>
                                          <td> {{ $psertadidik->nama_lengkap }}</td>
                                          <td> {{ $psertadidik->jnsklmn }} </td>
                                          <td> {{ $psertadidik->naikkelas->kelas->nama_kelas}}</td>


                                          @if ($psertadidik->verifikasi == 0)

                                          <td><span class="badge bg-warning badge-pill">Belum Di Setujui</span> </td>

                                          @elseif ($psertadidik->verifikasi == 1)

                                          <td> <span class="badge bg-info badge-pill">Sudah Di Setujui</span>
                                                 <a class='btn btn-info btn-xs' href='{{ route('print-psertadidik',$psertadidik->id)}}'><span class="glyphicon glyphicon-print"></span> Print</a>
                                                </td>
                                          @endif

                                          <form action="{{ route('verifikasi', $psertadidik->id) }}" method="post">
                                                @method('patch')
                                                @csrf
                                                @if (Auth::user()->role_id == 2)
                                                      <td><button class='btn btn-warning btn-xs'><span class="glyphicon glyphicon-edit"></span> Verifikasi</button></td></form>
                                                      </td> @endif

                                                      <td class="text-center">

                                                        @if (Auth::user()->role_id == 3)

                                                           @if ($psertadidik->verifikasi == 0)
                                                            <a class='btn btn-info btn-xs' href='{{ route('edit.psertadidik', $psertadidik->id) }}'><span class="glyphicon glyphicon-edit"></span> Edit</a></td>

                                                               @elseif ($psertadidik->verifikasi == 1)
                                                               <span class="badge badge-danger badge-pill">Sudah Terkunci
                                                                @endif
                                                                @endif<td>
                                                                     <a class='btn btn-info btn-xs' href='{{ route('psertadidik.show', $psertadidik->id) }}'><span class="glyphicon glyphicon-edit"></span> Detail</a></td>

                                                                {{-- <a --}}
                                                                {{-- href="javascript:void(0)"
                                                                id="show-psertadidik"
                                                                data-url="{{ route('psertadidik.show', $psertadidik->id) }}"
                                                                class="btn btn-info btn-xs"><span class="glyphicon glyphicon-star"></span>Detail</a> --}}
                                                            </td>

                                                            </div>
                                                    </td>
                                                </form>
                                                </tr>
                                                @endforeach
                                            </table>
                                            {{-- // Page Number continue --}}
                                             {{ $psertadidiks->withQueryString()->links()}}



                               </div>
          </div>
    </div>






@endsection









































































































