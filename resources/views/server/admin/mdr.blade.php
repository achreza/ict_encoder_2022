@extends('server.layouts.app')
@section('content')
<div class="row">
	@if (session()->has('status') && session()->get('status'))
			<span class="alert alert-success">
				<strong>{{session()->get('message')}}</strong>
			</span>
		@elseif(session()->has('status') && session()->get('status') == false)
			<span class="alert alert-danger">
				<strong>{{session()->get('message')}}</strong>
			</span>
		@endif
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<strong class="card-title">Daftar peserta Micro Drone Race</stronga >
			</div>
			<div class="card-body">
				<table class="table table-inverse table-striped">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama tim</th>
							<th>Bukti pembayaran</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php $no = 1 ?>
						@foreach ($peserta as $value)
						<tr>
							<td>{{$no++}}</td>
							<td>{{$value->nama_tim}}</td>
							<td>
								@if ($value->pembayaran->bukti_pembayaran == null)
									<a href="#!" class="btn btn-sm btn-danger" >Belum upload</a>
								@else 
									<a href="{{URL::to('pembayaran/'.$value->pembayaran->bukti_pembayaran)}}" class="btn btn-sm btn-success" target="_blank">Check</a>
								@endif
							</td>
							<td>
								@if ($value->pembayaran->status == 0)
									<a href="{{ route('konfirmasi', $value->id) }}" class="btn btn-sm btn-primary">Konfirmasi</a>
								@else 
									<a href="{{ route('konfirmasi.batal', $value->id) }}" class="btn btn-sm btn-danger">Batal konfirmasi</a>
								@endif
								<a href="{{route('peserta.detail', $value->id)}}" class="btn btn-sm btn-warning"><i class="ti-eye"></i></a>
							</td>
						</tr>
						@endforeach
					</tbody>
				</table>

				{{$peserta->links()}}
			</div>
		</div>
	</div>
</div>
@endsection