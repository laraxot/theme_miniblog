<!-- END sidebar-box -->
<div class="sidebar-box">
    <h3 class="heading">Popular Posts</h3>
    <div class="post-entry-sidebar">
        <ul>

            @foreach ($articles as $article)
                @php
                    $article_panel = Panel::get($article);
                @endphp
                <li>
                    <a href="{{ $article_panel->url('show') }}">
                        <img src="images/img_1.jpg" alt="Image placeholder" class="mr-4">
                        <div class="text">
                            <h4>{{ $article->title }}</h4>
                            <div class="post-meta">
                                <span class="mr-2">{{ $article->created_at }} </span>
                            </div>
                        </div>
                    </a>
                </li>
            @endforeach

            {{-- <li>
          <a href="">
            <img src="images/img_2.jpg" alt="Image placeholder" class="mr-4">
            <div class="text">
              <h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>
              <div class="post-meta">
                <span class="mr-2">March 15, 2018 </span>
              </div>
					</div>
				</a>
			</li>
			<li>
        <a href="">
          <img src="images/img_3.jpg" alt="Image placeholder" class="mr-4">
					<div class="text">
						<h4>There’s a Cool New Way for Men to Wear Socks and Sandals</h4>
						<div class="post-meta">
              <span class="mr-2">March 15, 2018 </span>
						</div>
					</div>
				</a>
      </li> --}}



        </ul>
    </div>
</div>
