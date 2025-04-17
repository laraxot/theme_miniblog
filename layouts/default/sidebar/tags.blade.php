@php
$tags = Theme::xotModelEager('tag')->get();
@endphp
<div class="sidebar-box">
    <h3 class="heading">Tags</h3>
    <ul class="tags">

        @foreach ($tags as $tag)
            @php
                $tag_panel = Panel::get($tag);
            @endphp
            <li><a href="{{ $tag_panel->url('show') }}">{{ $tag->title }}</a></li>
        @endforeach
        {{-- <li><a href="#">Travel</a></li>
            <li><a href="#">Adventure</a></li>
            <li><a href="#">Food</a></li>
            <li><a href="#">Lifestyle</a></li>
            <li><a href="#">Business</a></li>
            <li><a href="#">Freelancing</a></li>
            <li><a href="#">Travel</a></li>
            <li><a href="#">Adventure</a></li>
            <li><a href="#">Food</a></li>
            <li><a href="#">Lifestyle</a></li>
            <li><a href="#">Business</a></li>
            <li><a href="#">Freelancing</a></li> --}}
    </ul>
</div>
