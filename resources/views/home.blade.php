@extends('layouts.master')

@section('page')
	<div class="row">
		<div id="banner-row" class="col col-md-12">
			<a id="gallery-link" href="{{route('gallery')}}"><img alt="Gallery" src="{{asset('img/view-galler.png')}}"></a>
			<img id="banner-img" alt="Gallery" src="">	
		</div>
	</div>
	<div class="row">
		<div class="col col-md-6" id="registry">
			<h2 class="special">REGISTRY</h2>
			<p>Dear Friends and Family,</p>
			<p>We would love your company most of all, but if gifts are in order, we have registered at the places listed below:</p>
			<img id="divider-img" src="{{asset('img/divider.png')}}" alt="Divider">
		</div>
		<div class="col col-md-6">
			<h2 class="special">CONTACT US</h2>
			<h3>olsonwedding2015@hotmail.com</h3>
			<div id="address">
				<h4>Brianna Hegge &amp; Christopher Olson</h4>
				<p>
					1234 Main Street<br/>
					Coon Rapids, MN 55433<br/>
					123 . 456 . 7890
				</p>
			</div>
		</div>
	</div>
@endsection
