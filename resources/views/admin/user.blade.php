@extends('admin.main')
@section('content')


		<div class="row">
		  <div class="col-md-15">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<div align="center">Form User
					    </div>
					</div>
					<div class="panel-body">

						<div class="container">
    <div class="row col-md-9 col-md-offset-0 custyle">
    <table class="table table-striped custab">
    <thead>
    <a href="{{route('create-user') }}" class="btn btn-primary btn-xs pull-right"><b>+</b> Tambah Data</a>
    </table>
        <table class="table table-striped custab">
            <thead>
                <th>No</th>
                <th>ID</th>
                <th>Nama User</th>
                <th>Username</th>
                <th>Role</th>
                <th>Aksi</th>
                @foreach ($user as $user )
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role->name }}</td>
                    <td> <form action="{{ route('edit-user',$user->id) }}" method="get">
                        @csrf
                        <button class="btn btn-warning">Edit</button>
                    </td>
                    </form>
                    <td><form action="{{ route('destroy',$user) }}" method="post">
                        @method('delete')
                        @csrf
                        <button class="btn btn-danger">Delete</button>
                    </form>
                    </td>


                </tr>
                @endforeach
                </thead>
            </table>
        </div>
    </div>
@endsection

