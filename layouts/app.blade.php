@extends('pub_theme::layouts.plane')
@section('body')
    <div class="site-wrapper">
        @include('pub_theme::layouts.partials.headnav')
        @yield('content')
        @include('pub_theme::layouts.partials.footer')
    </div>
@endsection