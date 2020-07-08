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
	<h3>Input Data Post</h3>
	<form method="post" action="{{url('/post')}}">
	@csrf
		<table class="table table-bordered">
			<tr class="bg-info">
				<td>KATEGORI ID</td>
				<td><input type="text" name="post_cat_id" class="form-control"></td>
			</tr>
			<tr class="bg-info">
				<td>TANGGAL</td>
				<td><input type="date" name="post_date" class="form-control"></td>
			</tr>
			<tr class="bg-info">
				<td>SLUG</td>
				<td><input type="text" name="post_slug" class="form-control"></td>
			</tr>
			<tr class="bg-info">
				<td>JUDUL</td>
				<td><input type="text" name="post_tittle" class="form-control"></td>
			</tr>
			<tr class="bg-info">
				<td>KETERANGAN</td>
				<td><input type="text" name="post_text" class="form-control"></td>
			</tr>

			<tr class="bg-info">
				<td></td>
			<td><button type="submit" class="bg-link">SIMPAN</button></td>
			</tr>
		</table>

	</form>
</div>

@endsection