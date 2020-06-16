@extends('pub_theme::layouts.app')
@section('content')


    @include('pub_theme::home.partials.most_viewed')


    @include('pub_theme::home.partials.recent_posts')


    @include('pub_theme::home.partials.category')


    {{--
        @include('pub_theme::layouts.partials.subscribe')
    --}}





@endsection
