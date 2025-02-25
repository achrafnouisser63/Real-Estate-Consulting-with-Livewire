@extends('layouts.master')
@section('css')
@endsection
@section('page-header')
				<!-- breadcrumb -->
				<div class="breadcrumb-header justify-content-between">
					<div class="my-auto">
						<div class="d-flex">
							<h4 class="content-title mb-0 my-auto">الاستشارات</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ الرد على استشارتي</span>
						</div>
					</div>
					
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')




				<!-- row -->
				<div >
					<form>
						<div class="form-row">
						  <div class="form-group col-md-6">
							<label for="inputEmail4">الجهة</label>
							<input type="text" class="form-control"  placeholder="الجهة" value="{{$user->sttate}}" disabled>
						  </div>
						  <div class="form-group col-md-6">
							<label for="inputPassword4">المدينة</label>
							<input type="text" class="form-control"  placeholder="المدينة" value="{{$user->ville}}" disabled>
						  </div>
						</div>
						<div class="form-group">
							<label for="exampleFormControlTextarea1">الاستشارة</label>
							<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" disabled >{{$user->problem}}</textarea>
						  </div>
						  <div class="form-group">
							<label for="exampleFormControlTextarea1">الرد</label>
							<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" disabled>{{$rad->reponce}}</textarea>
						  </div>
						
						{{-- <button type="submit" class="btn btn-primary">Sign in</button> --}}
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