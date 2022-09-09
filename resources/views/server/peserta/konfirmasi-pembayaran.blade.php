@extends('server.layouts.app')
@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<strong class="card-title">Konfirmasi Pembayaran</strong>
			</div>
			<div class="card-body">
				<div class="col-md-6 mb-3 mb-lg-0">
					@if (session()->has('status') && session()->get('status'))
						<span class="alert alert-success">
							<strong>{{session()->get('message')}}</strong>
						</span>
					@elseif(session()->has('status') && session()->get('status') == false)
						<span class="alert alert-danger">
							<strong>{{session()->get('message')}}</strong>
						</span>
					@endif
					<label>Upload Foto/Scan Bukti Pembayaran</label>
					<form action="{{ route('dashboard.peserta.konfirmasi-pembayaran') }}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
						@csrf

						@if ($errors->any())
						    <div class="alert alert-danger">
						        <ul>
						            @foreach ($errors->all() as $error)
						                <li>{{ $error }}</li>
						            @endforeach
						        </ul>
						    </div>
						@endif
						<div class="input-group">
							<div class="input-group-prepend">
							</div>
							<div class="custom-file">
								<input type="file" class="custom-file-input" id="inputGroupFile01" aria-describedby="inputGroupFileAddon01" name="file" required="">
								<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
							</div>
						</div>
						<button type="submit" class="btn btn-primary mt-4" {{auth()->guard('tim')->user()->pembayaran->bukti_pembayaran != null && auth()->guard('tim')->user()->pembayaran->status == 0 ? 'disabled' : ' '}}>Submit File</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection