@extends('layouts.master')
@section('css')
<!-- Internal Data table css -->
<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-table@1.22.2/dist/bootstrap-table.min.css" rel="stylesheet">

@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">{{ __('app.istichara') }}</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ {{ __('app.my_istichara') }}</span>
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

				<!-- row -->
				<div class="row">
<!--div-->
<div class="col-xl-12">
						<div class="card">
							<div class="card-header pb-0">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mg-b-0">{{ __('app.istichara') }}</h4>
									<i class="mdi mdi-dots-horizontal text-gray"></i>
								</div>
								{{-- <p class="tx-12 tx-gray-500 mb-2">{{ __('app.all_m') }}</p> --}}
							</div>
							<div class="card-body">
								<div class="table-responsive">
								<form action="{{ url('/send') }}/{{ $dd->id }}" method="post">@csrf

									<table class="table text-md-nowrap" id="example2"  >
										
										<thead>
											<tr>
												{{-- <th class="wd-15p border-bottom-0">Id</th>
												<th class="wd-15p border-bottom-0">{{ __('app.nam_kaml') }}</th>
												<th class="wd-20p border-bottom-0">{{ __('app.jiha') }}</th>
												<th class="wd-15p border-bottom-0">{{ __('app.mdina') }}</th>
												<th class="wd-10p border-bottom-0">{{ __('app.istifsar') }}</th>
												<th class="wd-25p border-bottom-0">{{ __('app.rad') }}</th>
												<th class="wd-25p border-bottom-0">{{ __('app.ta3dil') }}</th> --}}

												<th  class="wd-15p border-bottom-0">Id</th>
												<th class="wd-20p border-bottom-0">{{ __('app.nam_kaml') }}</th>
                                                <th class="wd-20p border-bottom-0">{{ __('app.jiha') }}</th>
												<th class="wd-15p border-bottom-0">{{ __('app.mdina') }}</th>
												<th class="wd-20p border-bottom-0">{{ __('app.type') }}</th>
												
												
												
											</tr>
										</thead>
										<tbody>
											 
											<tr>
												
												<td>{{$dd->id}}</td>
												<td>{{$dd->name}}</td>
												<td>{{ DB::table('states')->where('id', $dd->id)->value('name')}}</td>
												<td>{{ DB::table('cities')->where('id', $dd->id)->value('name')}}</td>
												<td>{{$dd->tybe_1   }}  <br>{{$dd->tybe_2  }} <br>{{ $dd->tybe_3  }}</td>
												
												
												
											</tr>
											{{-- <th style="border: solid red;" class="wd-20p border-bottom-0">الإستشارة</th> --}}
											<tr>
											<td style="border: solid rgb(20, 81, 138);" colspan="6">{{$dd->problem}}</td></tr>
								
										</tbody>
									</table>
									
									<div class="form-group">
										<label for="exampleFormControlTextarea1">{{ __('app.rad') }}</label>
										<textarea name="rad" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
									  </div>
									  <button type="submit" class= "btn btn-success  btn-lg btn-block">{{ __('app.sn') }}</button>
									{{--   <a class= "btn btn-success  btn-lg btn-block" href="{{ url('/send') }}/{{ $dd->id }}">إرسال</a></td>  --}}

                                               </form>



								</div>
							</div><!-- bd -->
						</div><!-- bd -->
					</div>
					<!--/div-->
				</div>
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')

{{-- <script src="extensions/mobile/bootstrap-table-mobile.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.22.2/dist/bootstrap-table.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap-table@1.22.2/dist/extensions/mobile/bootstrap-table-mobile.min.js"></script> --}}
<!-- Internal Data tables -->
<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/responsive.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jquery.dataTables.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.bootstrap4.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/jszip.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/pdfmake.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/vfs_fonts.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.html5.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.print.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/buttons.colVis.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatable/js/responsive.bootstrap4.min.js')}}"></script>
<!--Internal  Datatable js -->
<script src="{{URL::asset('assets/js/table-data.js')}}"></script>
@endsection