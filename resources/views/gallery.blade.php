@extends('layouts.master')

@section('page')
	<div class="row">
        <ul id="gallery">
        @foreach($imgs as $img)
            <li class="{{$img['type']}}"><img alt="gallery image-{{$img['fn']}}" src="{{asset($img['path'])}}"></li>
        @endforeach    
        </ul>
	</div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            $("#gallery").isotope({
                layoutMode: 'masonryHorizontal',
                itemSelector: 'li'
            })
        })
    </script>
@endsection