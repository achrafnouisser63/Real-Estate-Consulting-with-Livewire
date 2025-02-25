@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">{{ __('app.istichara') }}</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ {{ __('app.istichara_rad') }}</span>
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
{{-- <th class="wd-15p border-bottom-0">Id</th>
<th class="wd-15p border-bottom-0">{{ __('app.nam_kaml') }}</th>
<th class="wd-20p border-bottom-0">{{ __('app.jiha') }}</th>
<th class="wd-15p border-bottom-0">{{ __('app.mdina') }}</th>
<th class="wd-10p border-bottom-0">{{ __('app.istifsar') }}</th>
<th class="wd-25p border-bottom-0">{{ __('app.rad') }}</th>
<th class="wd-25p border-bottom-0">{{ __('app.ta3dil') }}</th> --}}




				<!-- row -->
				<div >
					<form class="form-horizontal"  action="{{url('upd')}}" method="POST" >@csrf
						
						
						<div class="form-row">
						  <div class="form-group col-md-6">
							<label for="inputEmail4">{{ __('app.jiha') }}</label>
							<input type="text" class="form-control"  placeholder="{{ __('app.jiha') }}" value="{{$talab->sttate}}" disabled>
						  </div>
						  <div class="form-group col-md-6">
							<label for="inputPassword4">المدينة</label>
							<input type="text" class="form-control"  placeholder="{{ __('app.mdina') }}" value="{{$talab->ville}}" disabled>
						  </div>
						</div>
						<div class="form-group">
							<label for="exampleFormControlTextarea1">{{ __('app.istichara_whda') }}</label>
							<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" disabled >{{$talab->problem}}</textarea>
						  </div>
						  <div class="form-group">
							<label for="exampleFormControlTextarea1">{{ __('app.rad') }}</label>
							<textarea class="form-control" name="upd" id="exampleFormControlTextarea1" rows="3" >{{$reponc->reponce}}</textarea>
						  </div>
						  <input type="text" name="id" class="form-control"  placeholder="" value="{{$reponc->id}}" hidden>

						<button type="submit" class="btn btn-primary">{{ __('app.ta3dil') }}</button> 
					  </form>
				</div>
				<!-- row closed -->
			</div>
			<!-- Container closed -->
		</div>
		<!-- main-content closed -->
@endsection
@section('js')
@endsection