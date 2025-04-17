<div class="site-section bg-light">
	<div class="container">
		<div class="row align-items-stretch retro-layout-2">
            @php
                $articles=Theme::xotModelEager('article')
                    ->limit(6)->get();
            @endphp
            @foreach($articles->chunk(2) as $chunk)
			<div class="col-md-4">
                @foreach ($chunk as $article)
                <a href="{{ Panel::get($article)->url() }}" class="h-entry mb-30 v-height gradient"
                    style="background-image: url('images/img_1.jpg');">
					<div class="text">
                        <h2>{{ $article->title }}</h2>
						<span class="date">{{ $article->updated_at->diffForHumans() }}</span>
					</div>
                </a>
                @endforeach
            </div>
            @endforeach
		</div>
	</div>
</div>
