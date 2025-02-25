@extends('layouts.master')
@section('css')
<!-- Internal Data table css -->
<link href="{{URL::asset('assets/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('assets/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">{{__('app.istichara')}}</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ {{__('app.lkamla')}}</span>
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
@if (\Session::has('msg2'))
<div class="alert alert-danger">
<ul>
   <li>{!! \Session::get('msg2') !!}</li>
  </ul>
</div>
@endif
				<!-- row opened -->
				<div class="row row-sm">
					<div class="col-xl-12">
						<div class="card">
							<div class="card-header pb-0">
								<div class="d-flex justify-content-between">
									<h4 class="card-title mg-b-0">{{__('app.lkamla')}}</h4>
									<i class="mdi mdi-dots-horizontal text-gray"></i>
								</div>
{{-- 								<p class="tx-12 tx-gray-500 mb-2">Example of Valex Simple Table. <a href="">Learn more</a></p>
 --}}							</div>
							<div class="card-body">
								<div class="table-responsive">
									<table class="table text-md-nowrap" id="example1">
										<thead>
											<tr>
												<th class="wd-15p border-bottom-0">Id</th>
												<th class="wd-15p border-bottom-0">{{ __('app.nam_kaml') }}</th>
												<th class="wd-20p border-bottom-0">{{ __('app.jiha') }}</th>
												<th class="wd-15p border-bottom-0">{{ __('app.mdina') }}</th>
												<th class="wd-10p border-bottom-0">{{ __('app.istifsar') }}</th>
												<th class="wd-25p border-bottom-0">{{ __('app.rad') }}</th>
												<th class="wd-25p border-bottom-0">{{ __('app.ta3dil') }}</th>
											</tr>
										</thead>
										<tbody>
											@foreach($rps as $rp)
											<tr>
												
												<td>{{$rp->id}}</td>
												<td>Chloe</td>
												<td>System Developer</td>
												<td>2018/03/12</td>                        
												<td>$654,765</td>
												<td>{{$rp->reponce}}</td>
												<td>
													<a type="button" class="btn btn-danger"  onclick="return confirm('{{ __('app.bagh_tamsah') }}')" href="{{url('/admin/con-delete')}}/{{ $rp->id}}"><i class="fa fa-trash"></i></a>
													<a type="button" class="btn btn-warning" href="{{url('/admin/con-update')}}/{{ $rp->id}}"><i class="fa fa-edit"></i></a>

												</td>
											</tr>
											
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
					<!--/div-->

					
				</div>
				<!-- /row -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
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