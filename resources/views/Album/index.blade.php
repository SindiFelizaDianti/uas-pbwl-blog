@extends('layouts.app')
@section('content')
<style>
            html, body {
                background-color: #ffb6c1;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
<div class="container">
	<h3>Data Album</h3>

	<table class="table table-bordered">
		<thead class="thead-dark">
		<tr class="bg-success">
			<th>ID</th>
			<th>PHOTO ID</th>
			<th>NAMA</th>
			<th>KETERANGAN</th>
			<th>EDIT</th>

		</tr>

		@foreach($rows as $row)
		<tr>
			<td class="bg-light">{{ $row->id }}</td>
			<td class="bg-light">{{ $row->album_pho_id }}</td>
			<td class="bg-light">{{ $row->album_name }}</td>
			<td class="bg-light">{{ $row->album_text }}</td>
			<td class="bg-light"><a href="{{ url('album/' . $row->id . '/edit')}}" class="badge badge-success">EDIT</a>
				<form action="{{ url('album/' . $row->id)}}" method="post" class="d-inline">
					<input name="_method" type="hidden" value="delete">
					@csrf
					<button class="badge badge-danger">DELETE</button>
				</form>
			</td>
		</tr>
		@endforeach
	</table>
	<a href="{{ url('album/create') }}">Tambah Data</a>
</div>

@endsection