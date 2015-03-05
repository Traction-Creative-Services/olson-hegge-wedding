@extends('layouts.master')

@section('page')
	<div class="row">
		<div id="banner-row" class="col col-md-12">
			<a id="gallery-link" href="{{route('gallery')}}"><img alt="Gallery" src="{{asset('img/view-galler.png')}}"></a>
			<img id="banner-img" alt="Gallery" src="">	
		</div>
	</div>
	<div class="row">
		<div class="col col-md-12 double-border-top">
			<h2 class="special">How They Met</h2>
			<hr />
		</div>
	</div>
    <div class="row">
        <div class="col col-md-6">
            <h3>When She Noticed Him</h3>
        </div>
        <div class="col col-md-6">
            <h3>When He Noticed Her</h3>
        </div>
    </div>
    <div class="row">
        <div class="col col-md-12 double-border-top">
            <h2 class="special">The Proposal</h2>
            <hr/>
        </div>
    </div>
    <div class="row">
        <div class="col col-md-6">
            <h3>Her Story</h3>
        </div>
        <div class="col col-md-6">
            <h3>His Story</h3>
        </div>
    </div>
@endsection
