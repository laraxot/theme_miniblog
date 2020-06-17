<div class="sidebar-box">
    <div class="bio text-center">
    <img src="images/person_2.jpg" alt="Image Placeholder" class="img-fluid mb-5">
    <div class="bio-body">
        <h2>
            {{ $profile->full_name }}
        </h2>
        <p class="mb-4">
            {{-- 
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                Exercitationem facilis sunt repellendus excepturi beatae porro debitis voluptate nulla quo veniam fuga sit molestias minus.
            --}}
            {{ $profile->bio }}
        </p>
        {{-- <p><ahref="#"class="btnbtn-primarybtn-smroundedpx-4py-2">Readmybio</a></p> --}}
        <p class="social">
        <a href="#" class="p-2"><span class="fa fa-facebook"></span></a>
        <a href="#" class="p-2"><span class="fa fa-twitter"></span></a>
        <a href="#" class="p-2"><span class="fa fa-instagram"></span></a>
        <a href="#" class="p-2"><span class="fa fa-youtube-play"></span></a>
        </p>
    </div>
    </div>
</div>

@php
    //devo prendere i post più popolari!!!!
    //$popular_post = $profile->articles()->orderBy('views_count')->limit(3)->get();

    //https://laracasts.com/discuss/channels/eloquent/order-by-on-relationship
    /*
    $order = 'desc';
    $users = User::join('roles', 'users.role_id', '=', 'roles.id')
    ->orderBy('roles.label', $order)->select('users.*')->paginate(10);
    */
    

    $popular_post = $profile->articles()->limit(3)->get();
@endphp
@include('pub_theme::layouts.default.sidebar.author.popular_post', ['articles' => $popular_post])
