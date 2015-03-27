@extends('layouts.master')

@section('page')
	<div class="row">
		@include('parts.banner')
	</div>
	<div class="row">
		<div class="col col-md-6" id="registry">
			<h2 class="special">REGISTRY</h2>
			<p>Dear Friends and Family,</p>
			<p>We would love your company most of all, but if gifts are in order, we have registered at the places listed below:</p>
			<a href="https://www-secure.target.com/gift-registry/giftgiver?registryId=YR3UrXUw8-_73WPwUwE4Tw&registryType=WEDDING" class="registry-link" target="_blank"><img alt="Target" src="{{asset('img/target.png')}}"></a>
			<a href="http://www.bedbathandbeyond.com/store/giftregistry/view_registry_guest.jsp?pwsToken=&eventType=Wedding&registryId=541994577&pwsurl=" class="registry-link" target="_blank"><img alt="Bed Bath & Beyond" src="{{asset('img/bbb.png')}}"></a>
			<img id="divider-img" src="{{asset('img/divider.png')}}" alt="Divider">
		</div>
		<div class="col col-md-6">
			<h2 class="special">CONTACT US</h2>
			<h3>olsonwedding2015@hotmail.com</h3>
			<div id="address">
				<h4>Brianna Hegge &amp; Christopher Olson</h4>
				<p>
					2557 Bunkler Lake Blvd NW, Apt #4<br/>
					Andover, Minnesota 55304<br />
					612 . 965 . 8534
				</p>
			</div>
		</div>
	</div>
@endsection