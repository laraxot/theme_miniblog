@extends('pub_theme::layouts.app')
@section('content')

@php
    //dddx(get_defined_vars());
@endphp


    <div class="site-cover site-cover-sm same-height overlay single-page" style="background-image: url('images/img_2.jpg');">
      <div class="container">
        <div class="row same-height justify-content-center">
          <div class="col-md-12 col-lg-10">
            <div class="post-entry text-center">
              @foreach($row->categories as $category)
                <span class="post-category text-white bg-success mb-3">{{ $category->title }}</span>
              @endforeach
              <h1 class="mb-4"><a href="#">{{ $row->title }}</a></h1>
              <div class="post-meta align-items-center text-center">
                <figure class="author-figure mb-0 mr-3 d-inline-block"><img src="images/person_1.jpg" alt="Image" class="img-fluid"></figure>
                <span class="d-inline-block mt-1">{{ $row->full_name }}</span>
                <span>&nbsp;-&nbsp; {{ $row->created_at }}</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <section class="site-section py-lg">
      <div class="container">
        
        <div class="row blog-entries element-animate">

          <div class="col-md-12 col-lg-8 main-content">
            
            <div class="post-content-body">
              {{-- 
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Praesentium nam quas inventore, ut iure iste modi eos adipisci ad ea itaque labore earum autem nobis et numquam, minima eius. Nam eius, non unde ut aut sunt eveniet rerum repellendus porro.</p>
                <p>Sint ab voluptates itaque, ipsum porro qui obcaecati cumque quas sit vel. Voluptatum provident id quis quo. Eveniet maiores perferendis officia veniam est laborum, expedita fuga doloribus natus repellendus dolorem ab similique sint eius cupiditate necessitatibus, magni nesciunt ex eos.</p>
                <p>Quis eius aspernatur, eaque culpa cumque reiciendis, nobis at earum assumenda similique ut? Aperiam vel aut, ex exercitationem eos consequuntur eaque culpa totam, deserunt, aspernatur quae eveniet hic provident ullam tempora error repudiandae sapiente illum rerum itaque voluptatem. Commodi, sequi.</p>
                --}}
                {{ $row->txt }}
            <div class="row mb-5 mt-5">
              <div class="col-md-12 mb-4">
                <img src="images/img_1.jpg" alt="Image placeholder" class="img-fluid rounded">
              </div>
              <div class="col-md-6 mb-4">
                <img src="images/img_2.jpg" alt="Image placeholder" class="img-fluid rounded">
              </div>
              <div class="col-md-6 mb-4">
                <img src="images/img_3.jpg" alt="Image placeholder" class="img-fluid rounded">
              </div>
            </div>
            {{-- 
              <p>Quibusdam autem, quas molestias recusandae aperiam molestiae modi qui ipsam vel. Placeat tenetur veritatis tempore quos impedit dicta, error autem, quae sint inventore ipsa quidem. Quo voluptate quisquam reiciendis, minus, animi minima eum officia doloremque repellat eos, odio doloribus cum.</p>
              <p>Temporibus quo dolore veritatis doloribus delectus dolores perspiciatis recusandae ducimus, nisi quod, incidunt ut quaerat, magnam cupiditate. Aut, laboriosam magnam, nobis dolore fugiat impedit necessitatibus nisi cupiditate, quas repellat itaque molestias sit libero voluptas eveniet omnis illo ullam dolorem minima.</p>
              <p>Porro amet accusantium libero fugit totam, deserunt ipsa, dolorem, vero expedita illo similique saepe nisi deleniti. Cumque, laboriosam, porro! Facilis voluptatem sequi nulla quidem, provident eius quos pariatur maxime sapiente illo nostrum quibusdam aliquid fugiat! Earum quod fuga id officia.</p>
              <p>Illo magnam at dolore ad enim fugiat ut maxime facilis autem, nulla cumque quis commodi eos nisi unde soluta, ipsa eius aspernatur sint atque! Nihil, eveniet illo ea, mollitia fuga accusamus dolor dolorem perspiciatis rerum hic, consectetur error rem aspernatur!</p>
              
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Temporibus magni explicabo id molestiae, minima quas assumenda consectetur, nobis neque rem, incidunt quam tempore perferendis provident obcaecati sapiente, animi vel expedita omnis quae ipsa! Obcaecati eligendi sed odio labore vero reiciendis facere accusamus molestias eaque impedit, consequuntur quae fuga vitae fugit?</p>
              --}}
            </div>

            
            <div class="pt-5">
              <p>
                Categories:  {{-- <ahref="#">Food</a>,<ahref="#">Travel</a> --}} 
                @foreach($row->categories as $category)
                  <a href="#">{{ $category->title }}</a>,
                @endforeach
                Tags: {{-- <ahref="#">#manila</a>,<ahref="#">#asia</a> --}}
                @foreach($row->tags as $tag)
                  <a href="#">#{{ $tag->title }}</a>,
                @endforeach
              </p>
            </div>



            {{-- 
              @include('pub_theme::layouts.default.comments')
              --}}


          </div>
          
          <!-- END main-content -->
          @include('pub_theme::layouts.default.partials.sidebar')
          {{--
--}}

          <!-- END sidebar -->

        </div>
      </div>
    </section>

    
    {{-- 
    @include('pub_theme::layouts.default.most_related_post')

      @include('pub_theme::layouts.default.subscribe_newsletter')
    --}}



@endsection