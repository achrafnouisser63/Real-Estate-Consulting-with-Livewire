<!-- main-sidebar -->
		<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
		<aside class="app-sidebar sidebar-scroll">
			<div class="main-sidebar-header active ">
				<a class="desktop-logo logo-light active" href="{{ url('/' . $page='dashboard') }}"><img class="sign-favicon ht-70 " src="{{URL::asset('assets/img/brand/2.png')}}" class="main-logo" alt="logo"></a>
				<a class="desktop-logo logo-dark active" href="{{ url('/' . $page='dashboard') }}"><img src="{{URL::asset('assets/img/brand/2.png')}}" class="main-logo dark-theme" alt="logo"></a>
				<a class="logo-icon mobile-logo icon-light active" href="{{ url('/' . $page='dashboard') }}"><img src="{{URL::asset('assets/img/brand/2.png')}}" class="logo-icon" alt="logo"></a>
				<a class="logo-icon mobile-logo icon-dark active" href="{{ url('/' . $page='dashboard') }}"><img src="{{URL::asset('assets/img/brand/2.png')}}" class="logo-icon dark-theme" alt="logo"></a>
			</div>
			@if (auth('admin')->check())
                @include('layouts.main-sidebar.admin-main-sidebar')
            @endif

            @if (auth('web')->check())
                @include('layouts.main-sidebar.user-main-sidebar')
            @endif

            
		</aside>
<!-- main-sidebar -->
