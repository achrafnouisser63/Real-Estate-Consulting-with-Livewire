@extends('layouts.master')
@section('css')
<!--  Owl-carousel css-->
<link href="{{URL::asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet" />
<!-- Maps css -->
<link href="{{URL::asset('assets/plugins/jqvmap/jqvmap.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="left-content">
						<div>
						  <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">{{ __('app.welcome').' '.Auth::User()->name }}</h2>
						  <p class="mg-b-0">{{  __('app.tahfiz')  }}</p>
						</div>
					</div>
					
				</div>
				<!-- /breadcrumb -->
@endsection
@section('content')
				<!-- row -->
				<div class="row row-sm">
					<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
						<div class="card overflow-hidden sales-card bg-primary-gradient">
							<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
								<div class="">
									<h6 class="mb-3 tx-12 text-white"> الطلبات </h6>
								</div>
								<div class="pb-0 mt-0">
									<div class="d-flex">
										<div class="">
											<h4 class="tx-20 font-weight-bold mb-1 text-white">{{DB::table('consultations')->where('user_id', '=', Auth::user()->id)->count()}}{{-- {{ DB::table('arbahs')->where('user_id', '=', Auth::user()->id)->SUM('amount'); }} --}}</h4>
											
										</div>
										<span class="float-right my-auto mr-auto">
											
										</span>
									</div>
								</div>
							</div>
							<span id="compositeline" class="pt-1">5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
						<div class="card overflow-hidden sales-card bg-danger-gradient">
							<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
								<div class="">
									<h4 class="mb-3 tx-12 text-white">بدون رد</h4>
								</div>
								<div class="pb-0 mt-0">
									<div class="d-flex">
										<div class="">
											<h4 class="tx-20 font-weight-bold mb-1 text-white">{{DB::table('consultations')->where('user_id', '=', Auth::user()->id)->where('is_valide', '=', 'no')->count()}}</h4>
										</div>
										<span class="float-right my-auto mr-auto">
										</span>
									</div>
								</div>
							</div>
							<span id="compositeline2" class="pt-1">3,2,4,6,12,14,8,7,14,16,12,7,8,4,3,2,2,5,6,7</span>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
						<div class="card overflow-hidden sales-card bg-success-gradient">
							<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
								<div class="">
									<h6 class="mb-3 tx-12 text-white">المجاب عنها</h6>
								</div>
								<div class="pb-0 mt-0">
									<div class="d-flex">
										<div class="">
											<h4 class="tx-20 font-weight-bold mb-1 text-white">{{DB::table('consultations')->where('user_id', '=', Auth::user()->id)->where('is_valide', '=', 'oui')->count()}}</h4>
											
										</div>
										<span class="float-right my-auto mr-auto">
											
										</span>
									</div>
								</div>
							</div>
							<span id="compositeline3" class="pt-1">5,10,5,20,22,12,15,18,20,15,8,12,22,5,10,12,22,15,16,10</span>
						</div>
					</div>
					<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
						<div class="card overflow-hidden sales-card bg-warning-gradient">
							<div class="pl-3 pt-3 pr-3 pb-2 pt-0">
								<div class="">
									<h6 class="mb-3 tx-12 text-white">الرسائل</h6>
								</div>
								<div class="pb-0 mt-0">
									<div class="d-flex">
										<div class="">
											<h4 class="tx-20 font-weight-bold mb-1 text-white">0{{-- {{ DB::table('users')->where('ape', '=', Auth::user()->id)->count(); }} --}}</h4>
										</div>
										<span class="float-right my-auto mr-auto">
										</span>
									</div>
								</div>
							</div>
							<span id="compositeline4" class="pt-1">5,9,5,6,4,12,18,14,10,15,12,5,8,5,12,5,12,10,16,12</span>
						</div>
					</div>
				</div>
				<!-- row closed -->

				<!-- row opened -->
				
				<!-- row close -->

				<!-- row opened -->
				<div class="row row-sm row-deck">
					
					<div class="col-md-12 col-lg-12 col-xl-12">
						<div class="card card-table-two">
							<div class="d-flex justify-content-between">
								<h4 class="card-title mb-1">استشاراتي</h4>
								<i class="mdi mdi-dots-horizontal text-gray"></i>
							</div>
							{{-- <span class="tx-12 tx-muted mb-3 ">This is your most recent earnings for today's date.</span> --}}
							<div class="table-responsive country-table">
								<table class="table table-striped table-bordered mb-0 text-sm-nowrap text-lg-nowrap text-xl-nowrap">
									<thead>
										<tr>
											
											<th class="wd-lg-25p tx-right">الجهة</th>
											<th class="wd-lg-25p tx-right">المدينة</th>
											<th class="wd-lg-25p tx-right">الإستشارة</th>
											
										</tr>
									</thead>
									<tbody>
										{{-- @foreach(DB::table('talab_sahebs')->where('user_id', '=', Auth::user()->id)->where('chow', '=', 'oui')->get() as $arbah) --}}
										@foreach(DB::table('consultations')->where('user_id', '=', Auth::user()->id)->get() as $my_cols)<tr>
											
											<td class="tx-right tx-medium tx-inverse">{{ DB::table('states')->where('id', $my_cols->id)->value('name');}}</td>
											<td class="tx-right tx-medium tx-inverse">{{ DB::table('cities')->where('id', $my_cols->id)->value('name');}}</td>
											<td class="tx-right tx-medium tx-primary">{{  \Illuminate\Support\Str::limit($my_cols->problem,50) }}</td>
											
											<tr>@endforeach
												
												
												
											</tr>
									
										</tr>
										
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
		</div>
		<!-- Container closed -->
@endsection
@section('js')
<!--Internal  Chart.bundle js -->
<script src="{{URL::asset('assets/plugins/chart.js/Chart.bundle.min.js')}}"></script>
<!-- Moment js -->
<script src="{{URL::asset('assets/plugins/raphael/raphael.min.js')}}"></script>
<!--Internal  Flot js-->
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.pie.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.resize.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jquery.flot/jquery.flot.categories.js')}}"></script>
<script src="{{URL::asset('assets/js/dashboard.sampledata.js')}}"></script>
<script src="{{URL::asset('assets/js/chart.flot.sampledata.js')}}"></script>
<!--Internal Apexchart js-->
<script src="{{URL::asset('assets/js/apexcharts.js')}}"></script>
<!-- Internal Map -->
<script src="{{URL::asset('assets/plugins/jqvmap/jquery.vmap.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js')}}"></script>
<script src="{{URL::asset('assets/js/modal-popup.js')}}"></script>
<!--Internal  index js -->
<script src="{{URL::asset('assets/js/index.js')}}"></script>
<script src="{{URL::asset('assets/js/jquery.vmap.sampledata.js')}}"></script>	
@endsection