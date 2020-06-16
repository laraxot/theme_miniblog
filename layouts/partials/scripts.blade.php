<!-- JavaScript files-->
@stack('scripts_before')
<script>
    var basePath = '';
    var base_url='{{ url('') }}';
    var lang='{{ \App::getLocale() }}';
    {{--  var google_maps_api='{{ config('xra.google.maps.api') }}'; --}}
@if(\Request::has('address'))
    var address ="{{ \Request::input('address') }}";
@endif
@if(\Request::has('lat') && \Request::has('lng'))
    var lat ="{{ \Request::input('lat') }}";
    var lng ="{{ \Request::input('lng') }}";
@endif
window.Auth = @json([
    'signedIn' => Auth::check(),
    'id'=>Auth::id(),
]);
window.Urls = @json([
    'api' => url('/api'),
    'login' => route('login')
]);
</script>
@php
    Theme::add('pub_theme::dist/js/manifest.js',1);
    Theme::add('pub_theme::dist/js/vendor.js',2);
    Theme::add('pub_theme::dist/js/app.js',3);

    Theme::add('pub_theme::resources/js/aos.js');
    Theme::add('pub_theme::resources/js/main.js'); 
    //Theme::add('theme::js/modal_ajax.js');
    //Theme::add('theme::js/modal_iframe.js');
@endphp
  {!! Theme::showScripts(false) !!}
  @stack('scripts')
