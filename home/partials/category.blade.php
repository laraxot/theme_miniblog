@php
    $article_cats=Theme::XotModelEager('category')->limit(4)->get();
    //dddx($article_cats[0]);
@endphp

<div class="site-section bg-light">
	<div class="container">
		<div class="row align-items-stretch retro-layout">
            @foreach($article_cats as $article_cat)
            @php
                $article_cat_panel=Panel::get($article_cat);
            @endphp
            @if($loop->index==0)
			<div class="col-md-5 order-md-2">
				<a href="{{ $article_cat_panel->url() }}" class="hentry img-1 h-100 gradient" style="background-image: url('images/img_4.jpg');">
					<span class="post-category text-white bg-danger">{{ $article_cat->title }}</span>
					<div class="text">
						<h2>The 20 Biggest Fintech Companies In America 2019</h2>
						<span>February 12, 2019</span>
					</div>
				</a>
            </div>
            @endif
            @if($loop->index==1)
			<div class="col-md-7">
				<a href="{{ $article_cat_panel->url() }}" class="hentry img-2 v-height mb30 gradient" style="background-image: url('images/img_1.jpg');">
					<span class="post-category text-white bg-success">{{ $article_cat->title }}</span>
					<div class="text text-sm">
						<h2>The 20 Biggest Fintech Companies In America 2019</h2>
						<span>February 12, 2019</span>
					</div>
                </a>
            @endif
            @if($loop->index==2)
				<div class="two-col d-block d-md-flex">
					<a href="{{ $article_cat_panel->url() }}" class="hentry v-height img-2 gradient" style="background-image: url('images/img_2.jpg');">
						<span class="post-category text-white bg-primary">{{ $article_cat->title }}</span>
						<div class="text text-sm">
							<h2>The 20 Biggest Fintech Companies In America 2019</h2>
							<span>February 12, 2019</span>
						</div>
					</a>
					<a href="{{ $article_cat_panel->url() }}" class="hentry v-height img-2 ml-auto gradient" style="background-image: url('images/img_3.jpg');">
						<span class="post-category text-white bg-warning">{{ $article_cat->title }}</span>
						<div class="text text-sm">
							<h2>The 20 Biggest Fintech Companies In America 2019</h2>
							<span>February 12, 2019</span>
						</div>
					</a>
                </div>
            @endif
            @if($loop->index==1)
            </div>
            @endif
            @endforeach
		</div>
	</div>
</div>
