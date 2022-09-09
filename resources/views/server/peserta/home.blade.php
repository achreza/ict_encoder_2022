@extends('server.layouts.app')
@section('content')
<div class="row">
	<div class="col-lg-3 col-md-6">
		<div class="card">
			<div class="card-body">
				<div class="stat-widget-five">
					<div class="stat-icon dib flat-color-2">
						<i class="ti-ruler-pencil"></i>
					</div>
					<div class="stat-content">
						<div class="text-left dib">
							<div class="stat-text">Berhasil</span></div>
							<div class="stat-heading">Pendaftaran</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-6">
		<div class="card">
			<div class="card-body">
				<div class="stat-widget-five">
					<div class="stat-icon dib flat-color-1">
						<i class="pe-7s-cash"></i>
					</div>
					<div class="stat-content">
						<div class="text-left dib">
							<div class="stat-text">{{auth()->guard('tim')->user()->pembayaran->status != 0 ? 'Berhasil' : 'Belum'}}</span></div>
							<div class="stat-heading">Pembayaran</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@if (auth()->guard('tim')->user()->lomba->kategori_lomba_id == 2)
	<div class="col-lg-3 col-md-6">
		<div class="card">
			<div class="card-body">
				<div class="stat-widget-five">
					<div class="stat-icon dib flat-color-3">
						<i class="ti-files"></i>
					</div>
					<div class="stat-content">
						<div class="text-left dib">
							<div class="stat-text">{{$linkProposal != null ? 'Selesai' : 'Belum'}}</div>
							<div class="stat-heading">Proposal</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-3 col-md-6">
		<div class="card">
			<div class="card-body">
				<div class="stat-widget-five">
					<div class="stat-icon dib flat-color-4">
						<i class="ti-ruler-pencil"></i>
					</div>
					<div class="stat-content">
						<div class="text-left dib">
							<div class="stat-text">{{$linkPrototype != null ? 'Selesai' : 'Belum'}}</div>
							<div class="stat-heading">Prototype</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endif
	@if (auth()->guard('tim')->user()->lomba->kategori_lomba_id == 1)
	<div class="col-lg-3 col-md-6">
		<div class="card">
			<div class="card-body">
				<div class="stat-widget-five">
					<div class="stat-icon dib flat-color-4">
						<i class="ti-video-camera"></i>
					</div>
					<div class="stat-content">
						<div class="text-left dib">
							<div class="stat-text">Belum</div>
							<div class="stat-heading">Video</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endif
</div>
<div class="row">
	<div class="col-lg-12">
		<div class="card">
			<div class="card-body">
				<h4 class="box-title">Pemberitahuan</h4>
			</div>
			<div class="card-body">
				@if (auth()->guard('tim')->user()->pembayaran->status == 0)
				<div class="alert alert-danger" role="alert">
					Tim anda belum melalukan konfirmasi pembayaran, silahkan upload bukti pembayaran di menu konfirmasi pembayaran
				</div>
				@else
				<div class="alert alert-success" role="alert">
					Segera lengkapi berkas persyaratan lomba (untuk lomba micro drone race tidak ada berkas persyaratan)
				</div>
				@endif
			</div>
		</div>
		</div><!-- /# column -->
	</div>
	@endsection