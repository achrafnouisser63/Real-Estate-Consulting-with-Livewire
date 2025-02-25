@extends('layouts.master')
@section('css')
<!--- Internal Select2 css-->
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">{{ __('app.ichtichara_akaria') }}</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ {{ __('app.kaadim_ichtichara_akaria') }}</span>
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

				<!-- rcow -->

				<div class="row">
					<div class="col-lg-12 col-md-12">
						<div class="card">
							<div class="card-body">
								<div class="main-content-label mg-b-5">
									{{ __('app.akari') }}
								</div>
								{{-- <p class="mg-b-20">{{ __('app.msg') }}</p> --}}
								<div id="wizard1">
									{{-- <h3>{{ __('app.info') }}</h3> --}}
									<form class="form-horizontal"  action="{{url('consultation')}}" method="POST" >
										@csrf
										<div class="control-group form-group">
											<label class="form-label">{{ __('app.name') }}</label>
											<input type="text" class="form-control required" name="name" placeholder="{{ __('app.name') }}">
										</div>


										<div class="control-group form-group">
											<label class="form-label">{{ __('app.num_1') }}</label>
											<input type="text" class="form-control required" name="tele1"  placeholder="{{ __('app.num_1') }}  ">
										</div>

										<div class="control-group form-group">
											<label class="form-label">{{ __('app.email') }}</label>
											<input type="email" class="form-control required"  name="email" placeholder="{{ __('app.email') }}">
										</div>

									<h4>{{ __('app.akkar') }}</h4>

										  <br>
										  <livewire:autopopulate-dropdown />
                                          <br>
										  <livewire:autopopulate-dropdown2 />

										  @livewireScripts


                                          <select name="naw3" class="form-select" aria-label="Default select example" wire:model="country_id" wire:change="getCountryStates">
                                            <option value="0">{{ __('app.3amalia') }}</option>

                                                 <option value="1">{{ __('app.chra') }}</option>
                                                 <option value="2">{{ __('app.kra') }} </option>
                                                 <option value="3">{{ __('app.bay3') }}</option>
                                                 <option value="4">{{ __('app.rahn') }} </option>
                                                 <option value="5">{{ __('app.taksim') }}</option>
                                                 <option value="6">{{ __('app.joz2') }} </option>
                                                 <option value="7">{{ __('app.wasia') }}</option>
                                                 <option value="8">{{ __('app.hiba') }} </option>

                                                 <option value="9">{{ __('app.wa3d') }}</option>
                                                 <option value="10">{{ __('app.tahfid') }} </option>
                                                 <option value="11">{{ __('app.tawjih') }}</option>
                                                 <option value="12" style="">{{ __('app.dara2ib') }} </option>
                                        </select>
                                        <br>


									<select name="type1" class="form-select" aria-label="Default select example" wire:model="tybe_1" wire:change="getCountryStates">
										<option value="0">{{ __('app.type') }}</option>

										@foreach(DB::table('tybe_1s')->get() as $t)
											 <option value="{{ $t->name }}">{{ $t->name }}</option>
										@endforeach

									</select>


									<br>
									<select name="type2" class="form-select" aria-label="Default select example" wire:model="tybe_2" wire:change="getCountryStates">
										<option value="0">اصل التملك</option>

										@foreach(DB::table('tybe_2s')->get() as $t)
											 <option value="{{ $t->name }}">{{ $t->name }}</option>
										@endforeach

									</select>

									<br>
									<select name="type3" class="form-select" aria-label="Default select example" wire:model="tybe_3" wire:change="getCountryStates">
										<option value="0">{{ __('app.type') }}</option>

										@foreach(DB::table('tybe_3s')->get() as $t)
											 <option value="{{ $t->name }}">{{ $t->name }}</option>
										@endforeach

									</select>
									<br>


									<div  class="form-group">
										<label for="exampleFormControlTextarea1">{{ __('app.naw3_istichara') }}</label>
										<textarea name="mochkila" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
									  </div>
								<br>

















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
@endsection
