@extends('server.layouts.app')
@section('content')
<div class="row">
	<div class="col-md-12">
		<div class="card">
			<div class="card-header">
				<strong class="card-title">Link video kamu (Cinematography)</strong>
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
					<form action="{{ route('dashboard.linkVideo') }}" method="post" accept-charset="utf-8" enctype="multipart/form-data">
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
						<div class="form-group">
							<label for="">Link Video</label>
							<input type="text" name="link_video" class="form-control" value="{{$persyaratan != null ? $persyaratan->isi : ''}}">
							<input type="hidden" name="kategori_persyaratan_id" value="{{$kategoriPersyaratanId}}">
							<input type="hidden" name="id" value="{{$persyaratan != null ? $persyaratan->id : ''}}">
						</div>
						<button type="submit" class="btn btn-primary mt-4">Submit File</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection