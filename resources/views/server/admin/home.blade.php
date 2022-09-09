@extends('server.layouts.app')
@section('content')
<div class="row">
	<div class="col-lg-4 col-md-6">
		<div class="card">
			<div class="card-body">
				<div class="stat-widget-five">
					<div class="stat-icon dib flat-color-1">
						<i class="ti-video-clapper"></i>
					</div>
					<div class="stat-content">
						<div class="text-left dib">
							<div class="stat-text">{{$cinema}}</span></div>
							<div class="stat-heading">Cinematography</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-4 col-md-6">
		<div class="card">
			<div class="card-body">
				<div class="stat-widget-five">
					<div class="stat-icon dib flat-color-2">
						<i class="ti-tablet"></i>
					</div>
					<div class="stat-content">
						<div class="text-left dib">
							<div class="stat-text">{{$iai}}</span></div>
							<div class="stat-heading">Innovative App Idea</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-4 col-md-6">
		<div class="card">
			<div class="card-body">
				<div class="stat-widget-five">
					<div class="stat-icon dib flat-color-3">
						<i class="ti-game"></i>
					</div>
					<div class="stat-content">
						<div class="text-left dib">
							<div class="stat-text">{{$mdr}}</span></div>
							<div class="stat-heading">Micro Drone Race</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	@endsection