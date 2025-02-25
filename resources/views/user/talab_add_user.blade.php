{{-- @extends('layouts.master')
@section('css')
<!--- Internal Select2 css-->
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">{{ __('app.new_c') }}</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ {{ __('app.r_new_c') }}</span>
						</div>
					</div>
					
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
@if (\Session::has('msg'))
<div class="alert alert-success">
<ul>
   <li>{!! \Session::get('msg') !!}</li>
  </ul>
</div>
@endif
@if (\Session::has('msg_2'))
<div class="alert alert-danger">
<ul>
   <li>{!! \Session::get('msg_2') !!}</li>
  </ul>
</div>
@endif
				<!-- rcow -->
				
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									{{ __('app.new_c') }}
								</div>
								<p class="mg-b-20">{{ __('app.msg') }}</p>
								<div id="wizard1">
									<h3>{{ __('app.info') }}</h3>
									<form class="form-horizontal"  action="{{url('addmombers')}}" method="POST" >
										@csrf
										<div class="control-group form-group">
											<label class="form-label">{{ __('app.name') }}</label>
											<input type="text" class="form-control required" name="name" placeholder="{{ __('app.name') }}">
										</div>
										<div class="control-group form-group">
											<label class="form-label">{{ __('app.cin') }}</label>
											<input type="text" class="form-control required"  name="national" placeholder="{{ __('app.cin') }}">
										</div>
										<div class="control-group form-group">
											<label class="form-label">{{ __('app.adrss') }}</label>
											<input type="text" class="form-control required" name="adress"  placeholder="{{ __('app.adrss') }}">
										</div>
										<div class="control-group form-group">
											<label class="form-label">{{ __('app.num_1') }}</label>
											<input type="text" class="form-control required" name="tele1"  placeholder="{{ __('app.num_1') }}  ">
										</div>
										<div class="control-group form-group">
											<label class="form-label">{{ __('app.num_2') }}</label>
											<input type="text" class="form-control required" name="tele2"  placeholder="{{ __('app.num_1') }}">
										</div>
										<div class="control-group form-group">
											<label class="form-label">{{ __('app.email') }}</label>
											<input type="email" class="form-control required"  name="email" placeholder="{{ __('app.email') }}">
										</div>
										<div class="control-group form-group">
											<label class="form-label">{{ __('app.pass') }}</label>
											<input type="password" class="form-control required"  name="password" placeholder="{{ __('app.pass') }}">
										</div>
										
									<h3>{{ __('app.inf_pay') }} </h3>
									
										<div class="table-responsive mg-t-20">
											<table class="table table-bordered">
												<tbody>
													<tr>
														<td>{{ __('app.arbh_db') }}</td>
														<td class="text-right">{{ App\Models\Arbah::where('user_id', Auth::user()->id)->sum('amount')+App\Models\arbah_share::where('user_id', Auth::user()->id)->sum('arbah') }}</td>
													</tr>
													<tr>
														<td><span>{{ __('app.khasm') }}</span></td>
														<td class="text-right text-muted"><span>119 {{ __('app.dh') }}</span></td>
													</tr>
													<tr>
														<td><span>{{ __('app.khasm_t') }}</span></td>
														<td><h2 class="price text-right mb-0">119 {{ __('app.dh') }}</h2></td>
													</tr>
												</tbody>
											</table>
										</div>
										<div class="form-group mb-0 mt-3 justify-content-end">
											<div>
												<button type="submit" class="btn btn-primary">{{ __('app.ok') }}</button>
												<button type="submit" class="btn btn-secondary">{{ __('app.annelle') }}</button>
											</div>
										</div>
									</form>
									
								</div>
							</div>
						</div>
					</div>
					
				</div>
				</div>
				<!-- row closed -->
			
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
<!--Internal  Select2 js -->
<script src="{{URL::asset('assets/plugins/select2/js/select2.min.js')}}"></script>
<!-- Internal Jquery.steps js -->
<script src="{{URL::asset('assets/plugins/jquery-steps/jquery.steps.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/parsleyjs/parsley.min.js')}}"></script>
<!--Internal  Form-wizard js -->
{{-- <script src="{{URL::asset('assets/js/form-wizard.js')}}"></script> --}}
@endsection --}}