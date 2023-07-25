@extends('admin.main')

@section('content')


		<div class="row">
		  <div class="col-md-15">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<div align="center">From Mata Pelajaran
					    </div>
					</div>
					<div class="panel-body">
						<div class="container">
                            <div class="row col-md-9 col-md-offset-0 custyle">
                                <form action="{{ route('store-user') }}" method="post">
                                    @csrf
                                    <table width="526">
                                    <tr>
                                    <td>Nama User</td>
                                    <td>:</td>
                                    <td>
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <input name="name" type="text" class="form-control">
                                        </div>
                                    </div>
                                    </td>
                                    </tr>
                                    <tr>
                                    <td>E-Mail Username</td>
                                    <td>:</td>
                                    <td>
                                    <div class="col-md-10">
                                        <div class="form-group">
                                            <input name="email" type="email" class="form-control">
                                        </div>
                                    </div>
                                    </td>
                                    </tr>
                                    <td>Role</td>
                                    <td>:</td>
                                    <td>
                                        <div class="col-md-10">
                                            <div class="form-group">
                                                <select name="role_id" class="form-control">
                                                    <option>Role</option>
                                                    @foreach ($role as $role )
                                                    <option {{$role->id}}>{{$role->id}}</option>
                                                    @endforeach
                                                </select>

                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                <td>Password</td>
                                <td>:</td>
                                <td>
                                <div class="col-md-10">
                                    <div class="form-group">
                                        <input name="password" type="password" class="form-control">
                                    </div>
                                </div>
                                </td>
                                </tr>
                                <tr>
                                <tr>
                                        <td></td><td></td><td></td>
                                    <td>
                                        <div class="form-group">
                                    <input name="SIMPAN" type="submit" id="SIMPAN" value="SIMPAN" class="btn btn-primary"></td>
                                    </div>
                                    </tr>
                                    </table>
                                    </form>
                                @endsection















		</div>
</div>
