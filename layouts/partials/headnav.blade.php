    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
    
    <header class="site-navbar" role="banner">
      <div class="container-fluid">
        <div class="row align-items-center">
          
          <div class="col-12 search-form-wrap js-search-form">
            <form method="get" action="#">
              <input type="text" id="s" class="form-control" placeholder="Search...">
              <button class="search-btn" type="submit"><span class="icon-search"></span></button>
            </form>
          </div>

          @php
            //dddx(get_defined_vars());
          @endphp

          <div class="col-4 site-logo">
            <a href="index.html" class="text-black h2 mb-0">Mini Blog</a>
          </div>

          <div class="col-8 text-right">
            <nav class="site-navigation" role="navigation">
              <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block mb-0">


                <li>

                  @auth
                    <a href="{{ route('logout',$params) }}" class=""
                      onclick="event.preventDefault();
                      document.getElementById('logout-form').submit();">
                      {{-- <iclass="fasfa-sign-out-altmr-2text-muted"></i> --}}@lang('lu::auth.sign_out')
                    </a>
                    <form id="logout-form"
                      action="{{ route('logout',$params) }}"
                      method="POST"
                      style="display: none;">
                      {{ csrf_field() }}
                    </form>
                    {{-- 
                    loggato
                    --}}



                    <li><a href="category.html">Crea articolo</a></li>




                    @else
                    {{-- nonloggato --}}
                      <li class="nav-item">
                      <a href="{{ route('login') }}" class="nav-link">
                      @lang('lu::auth.sign_in')
                      </a>
                      </li>
                      <li class="nav-item">
                      <a href="{{ route('container0.create',['lang'=>$lang,'container0'=>'profile']) }}" class="nav-link">
                      @lang('lu::auth.sign_up')
                      </a>
                      </li>
                    @endauth
                </li>


                


                {{-- 
                  <li><a href="category.html">Home</a></li>
                  <li><a href="category.html">Politics</a></li>
                  <li><a href="category.html">Tech</a></li>
                  <li><a href="category.html">Entertainment</a></li>
                  <li><a href="category.html">Travel</a></li>
                  <li><a href="category.html">Sports</a></li>
                  --}}
                <li class="d-none d-lg-inline-block"><a href="#" class="js-search-toggle"><span class="icon-search"></span></a></li>
              </ul>
            </nav>
            <a href="#" class="site-menu-toggle js-menu-toggle text-black d-inline-block d-lg-none"><span class="icon-menu h3"></span></a></div>
          </div>

      </div>
    </header>