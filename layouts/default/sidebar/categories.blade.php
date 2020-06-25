@php
    $categories = Theme::xotModelEager('category')->get();
@endphp

<div class="sidebar-box">
    <h3 class="heading">Categories</h3>
    <ul class="categories">

        @foreach($categories as $category)
            <li><a href="#">{{ $category->title }} <span>({{ $category->articles->count() }})</span></a></li>
        @endforeach
        {{-- 
            <li><a href="#">Food <span>(12)</span></a></li>
            <li><a href="#">Travel <span>(22)</span></a></li>
            <li><a href="#">Lifestyle <span>(37)</span></a></li>
            <li><a href="#">Business <span>(42)</span></a></li>
            <li><a href="#">Adventure <span>(14)</span></a></li>
            --}}
    </ul>
</div>