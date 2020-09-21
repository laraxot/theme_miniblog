<div class="site-section">
	<div class="container">
		<div class="row mb-5">
			<div class="col-12">
				<h2>Recent Posts</h2>
			</div>
		</div>
		<div class="row">
            @php
            $articles=Theme::xotModelEager('article')
                ->orderByDesc('updated_at')
                ->paginate(10);
            @endphp
            @foreach($articles as $article)
            @php
                $article_panel=Panel::get($article);
            @endphp
			<div class="col-lg-4 mb-4">
				<div class="entry2">
					<a href="{{ $article_panel->url() }}">
                        <img src="images/img_1.jpg" alt="Image" class="img-fluid rounded">
                    </a>
					<div class="excerpt">
						<span class="post-category text-white bg-secondary mb-3">Politics</span>
						<h2>
                            <a href="{{ $article_panel->url() }}">{{ $article->title }}</a>
                        </h2>
						<div class="post-meta align-items-center text-left clearfix">
                            {{--

							<figure class="author-figure mb-0 mr-3 float-left">
                                <img src="images/person_1.jpg" alt="Image" class="img-fluid">
                            </figure>
                            --}}
							<span class="d-inline-block mt-1">By <a href="#">{{ $article->user_handle }}</a></span>
							<span>&nbsp;-&nbsp; {{ $article->updated_at }}</span>
						</div>
						<p>{{ $article_panel->getExcerpt() }}</p>
						<p><a href="{{ $article_panel->url() }}">Read More</a></p>
					</div>
				</div>
			</div>
			@endforeach
		</div>
		<div class="row text-center pt-5 border-top">
            {{ $articles->links() }}
            {{--

			<div class="col-md-12">
				<div class="custom-pagination">
					<span>1</span>
					<a href="#">2</a>
					<a href="#">3</a>
					<a href="#">4</a>
					<span>...</span>
					<a href="#">15</a>
				</div>
            </div>
            --}}
		</div>
	</div>
</div>
