@if (auth('admin')->check())
  @include('layouts.main-header.admin-main-header')
 @endif

@if (auth('web')->check())
                @include('layouts.main-header.user-main-header')
 @endif
