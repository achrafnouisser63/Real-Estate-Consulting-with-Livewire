@extends('layouts.master')
@section('css')
<!--- Internal Select2 css-->
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				
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
				<!-- row -->
				
				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
                      						{{__('app.i3adat')}}	</div>
{{-- 								<p class="mg-b-20">سيتم تفعيل حساب الزبون في أقل من ساعة</p>
 --}}								<div id="wizard1">
									<h3>{{__('app.nacher')}}</h3>
									<form class="form-horizontal"  action="{{url('add_arc')}}" method="POST" >
										@csrf
										<div class="control-group form-group">
											<label class="form-label">{{ __('app.sahab_makal') }}</label>
											<input type="text" class="form-control required" name="name" placeholder="{{ __('app.sahab_makal') }}">
											<x-input-error :messages="$errors->get('name')" class="mt-2" />
										</div>
										<div class="control-group form-group">
											<label class="form-label">{{ __('app.onwan_makal') }} </label>
											<input type="text" class="form-control required"  name="titele" placeholder=" {{ __('app.onwan_makal') }}">
											<x-input-error :messages="$errors->get('titele')" class="mt-2" />
										</div>
										<div class="control-group form-group">
											<label class="form-label">{{ __('app.makal') }}</label>
											<textarea  class="form-control required" name="sujet"  placeholder="{{ __('app.makal') }}"cols="30" rows="10"></textarea>
											<x-input-error :messages="$errors->get('sujet')" class="mt-2" />
										</div>
										
										
									
										<div class="form-group mb-0 mt-3 justify-content-end">
											<div>
												<button type="submit" class="btn btn-primary">{{ __('app.ok') }}</button>
												<a type="submit"href="{{url('admin/dashboard')}}" class="btn btn-secondary">{{ __('app.annelle') }}</a>
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
@endsection