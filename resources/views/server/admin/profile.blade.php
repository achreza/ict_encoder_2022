@extends('server.layouts.app')
@section('content')
<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-body">
				<h4 class="box-title">Profile Tim</h4>
				<hr>
				<table class="table table-striped">
					<tbody>
						<tr>
							<td>Nama tim</td>
							<td>:</td>
							<td>{{$profile->nama_tim}}</td>
						</tr>
						<tr>
							<td>No. Hp/Whatsapp</td>
							<td>:</td>
							<td>{{$profile->no_telp}}</td>
						</tr>
						<tr>
							<td>Email</td>
							<td>:</td>
							<td>{{$profile->email}}</td>
						</tr>
						<tr>
							<td>Asal tim</td>
							<td>:</td>
							<td>{{$profile->asal_tim}}</td>
						</tr>
						<tr>
							<td>Pilihan lomba</td>
							<td>:</td>
							<td>{{$profile->lomba->kategoriLomba->nama}}</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>
	</div><!-- /# column -->
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-body">
				<h4 class="box-title">Anggota tim</h4>
				<hr>
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th>Nama</th>
							<th>Jabatan</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($profile->peserta as $key => $value)
							@if ($key == 0)
								<tr>
									<td>{{$value->nama}}</td>
									<td>Ketua</td>
								</tr>
							@else
								<tr>
									<td>{{$value->nama}}</td>
									<td>Anggota {{$key++}}</td>
								</tr>
							@endif
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div><!-- /# column -->
</div>

<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-body">
				<h4 class="box-title">Berkas persyaratan</h4>
				<hr>
				<table class="table table-striped table-inverse">
					<tbody>
						@if ($persyaratan != null )
						@foreach ($persyaratan as $value)
							<tr>
								<td>{{$value->kategoriPersyaratan->nama}}</td>
								<td>:</td>
								<td>
									@if ($value != null)
										<a href="{{$value->isi}}" target="_blank">{{$value->isi}}</a>
									@else
										-
									@endif
								</td>
							</tr>
						@endforeach
						@else
							<tr>
								<td colspan="2">Tidak ada berkas persyaratan</td>
							</tr>
						@endif
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
@endsection