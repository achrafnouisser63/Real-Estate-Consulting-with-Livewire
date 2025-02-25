 @extends('layouts.master')
@section('css')
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">{{ __('my_profile') }}</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ حسابي</span>
						</div>
					</div>
					
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				@if (\Session::has('msg'))
          <div class="alert alert-success">
	      <ul>
	     	<li>{!! \Session::get('msg') !!}</li>
	        </ul>
</div>
@endif
				<div class="row row-sm">
					<div class="col-lg-4">
						<div class="card mg-b-20">
							<div class="card-body">
								<div class="pl-0">
									<div class="main-profile-overview">
										<div class="main-img-user profile-user">
											<img alt="" src="{{URL::asset('assets/img/faces/6.jpg')}}"><a class="fas fa-camera profile-edit" href="JavaScript:void(0);"></a>
										</div>
										<div class="d-flex justify-content-between mg-b-20">
											<div>
												<h5 class="main-profile-name">{{ Auth::guard('admin')->user()->name }}</h5>
												<p class="main-profile-name-text">{{ Auth::guard('admin')->user()->email }}</p>
											</div>
										</div>
										
										
										
										<hr class="mg-y-10">
										<a href="{{ url('/admin/password/update') }}"><h5 class="text-small text-muted mb-0">{{ __('app.chng_pss') }} </h5></a>

										
										
										<!--skill bar-->
									</div><!-- main-profile-overview -->
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-8">
						<div class="row row-sm">
							<div class="col-sm-12 col-xl-12 col-lg-12 col-md-12">
								<div class="card ">
									<div class="card-body">
										<form class="form-horizontal"  action="{{url('/admin/edite/profiles')}}" method="POST" >
											@csrf	
										<div class="form-group">
											 </div>
											<div class="form-group">
												<label for="FullName">{{ __('app.nam_kaml') }}</label>
												<input type="text" value="{{ Auth::guard('admin')->user()->name }}" name="name" id="FullName" class="form-control">
												<x-input-error :messages="$errors->get('name')" class="mt-2" />
											</div>
											
											
											
											
											<div class="form-group">
												<label for="FullName">{{ __('app.email') }}</label>
												<input type="text" value="{{ Auth::guard('admin')->user()->email }}" name="email"  id="FullName" class="form-control">
												<x-input-error :messages="$errors->get('email')" class="mt-2" />
											</div>
											
											<div class="form-group">
												<div class="col-sm-6 col-md-3 mg-t-10 mg-md-t-0"><input type="submit" value="{{ __('app.ta3dil') }}" class="btn btn-success btn-with-icon btn-block"></div>

											</div>
										</form>
									</div>
								</div>
							</div>
							
					</div>
				</div>
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
@endsection 