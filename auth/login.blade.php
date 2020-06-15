{{--
<!DOCTYPE html>
<html lang="en">
	@include('pub_theme::layouts.partials.htmlheader')
	<body>
		--}}
		@php
		//dddx(get_defined_vars());
		@endphp
		@extends('pub_theme::layouts.app'/*,['footer'=>'off', 'headernav'=>'off','body_style'=>'padding-top:0px']*/)
		@section('content')
		<div class="container-fluid px-3">
			<div class="row min-vh-100">
				<div class="col-md-8 col-lg-6 col-xl-5 d-flex align-items-center">
					<div class="w-100 py-5 px-md-5 px-xl-6 position-relative">
						<div class="mb-5">
							<img src="{{ Theme::asset('pub_theme::img/logo-square.svg') }}" alt="..." style="max-width: 4rem;" class="img-fluid mb-3">
							<h2>@lang('food::auth.login.welcome_back')</h2>
						</div>
						<form class="form-validate" role="form" method="POST" action="{{ route('login',\Request::input('referrer','/')) }}">
							@csrf
							@include('theme::includes.flash')
							{{ Form::bsEmail('email',null,['class'=>'form-control form-control-user1'] ) }}
							{{--
							{{ Form::bsPassword('password',null,['class'=>'form-control form-control-user1']) }}
							--}}
							<div class="form-group mb-4">
								<div class="row">
									<div class="col">
										<label for="password" class="form-label"> Password</label>
									</div>
									<div class="col-auto">
										{{--
										<a href="#" class="form-text small">Forgot password?</a>
										--}}
										<a class="form-text small" href="{{ route('password.request') }}">
										@lang('food::auth.forgot_password')
										{{-- __('ForgotYourPassword?') --}}
										</a>
									</div>
								</div>
								<input name="password" id="password" placeholder="Password" type="password" required data-msg="Please enter your password" class="form-control">
							</div>
							<div class="form-group mb-4">
								<div class="custom-control custom-checkbox">
									<input id="loginRemember" type="checkbox" class="custom-control-input">
									<label for="loginRemember" class="custom-control-label text-muted">
									<span class="text-sm">
									@lang('food::auth.remember_me')
									{{-- Rememberme --}}
									</span>
									</label>
								</div>
							</div>
							<!-- Submit-->
							<button class="btn btn-lg btn-block btn-primary">@lang('food::auth.sign_in')</button>
							<hr data-content="OR" class="my-3 hr-text letter-spacing-2">
                            <a href="{{ route('login.provider',['lang'=>$lang,'provider'=>'facebook']) }}"
                                class="btn btn btn-outline-primary btn-block btn-social mb-3">
							    <i class="fa-2x fa-facebook-f fab btn-social-icon"></i>
							    @lang('food::auth.login.connect_with_facebook')
                                {{--
                                Connect
                                <span class="d-none d-sm-inline">with Facebook</span>
                                --}}
                            </a>
							<a href="{{ route('login.provider',['lang'=>$lang,'provider'=>'google']) }}" class="btn btn btn-outline-muted btn-block btn-social mb-3">
							<i class="fa-2x fa-google fab btn-social-icon"> </i>
							@lang('food::auth.connect_with_google')
							{{--
							Connect <span class="d-none d-sm-inline">with Google</span>
							--}}
                            </a>
							<hr class="my-4">
							<p class="text-center">
								<small class="text-muted text-center">
								{{-- Don'thaveanaccountyet? --}}
								@lang('food::auth.no_account_yet')
								<a href="{{ route('container0.create',['lang'=>$lang,'container0'=>'profile']) }}">
								@lang('food::auth.sign_up')
								</a>
								</small>
							</p>
						</form>
						<a href="{{ url($lang) }}" class="close-absolute mr-md-5 mr-xl-6 pt-5">
							<svg class="svg-icon w-3rem h-3rem">
								<use xlink:href="#close-1"> </use>
							</svg>
						</a>
					</div>
				</div>
				{{-- 
					<div class="col-md-4 col-lg-6 col-xl-7 d-none d-md-block">
						<!-- Image-->
						<div style="background-image: url({{ Theme::asset('pub_theme::img/photo/photo-1497436072909-60f360e1d4b1.jpg') }});" class="bg-cover h-100 mr-n3">
						</div>
					</div>
					--}}
			</div>
		</div>
		@endsection
