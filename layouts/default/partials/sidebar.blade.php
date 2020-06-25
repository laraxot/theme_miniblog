<div class="col-md-12 col-lg-4 sidebar">
	<div class="sidebar-box search-form-wrap">
		<form action="#" class="search-form">
			<div class="form-group">
				<span class="icon fa fa-search"></span>
				<input type="text" class="form-control" id="s" placeholder="Type a keyword and hit enter">
			</div>
		</form>
	</div>
	<!-- END sidebar-box -->
  @php
	$profile = $row->profile;
  @endphp
	@if(is_object($profile))
	@include('pub_theme::layouts.default.sidebar.author', ['profile' => $profile])
	@endif
  <!-- END sidebar-box -->
  
  @include('pub_theme::layouts.default.sidebar.categories')

  <!-- END sidebar-box -->
  @include('pub_theme::layouts.default.sidebar.tags')

</div>