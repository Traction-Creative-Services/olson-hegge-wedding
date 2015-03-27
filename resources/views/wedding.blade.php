@extends('layouts.master')

@section('page')
	
	<div class="row">
		<div class="col col-md-6 ">
			<h1 class="special double-border-top triple-large">The Wedding Day</h1>
			<hr />
            <h3 class="double-large">Friday, June 26<sup>th</sup>, 2015</h3>
            <hr />
            <div class="split">
                <div>
                    <h3>EMBASSY<br/>
                    SUITES</h3>
                </div>
                <div>
                    9701 43rd Avenue South<br/>
                    Bloomington, MN 55425<br/>
                    <a href="http://www.embassyweddings.com" target="_blank">www.embassyweddings.com</a>
                </div>
            </div>
		</div>
        <div class="col col-md-6">
            <div id="map"><iframe height="300" frameborder="0" style="border:0"
src="https://www.google.com/maps/embed/v1/place?q=9701+43rd+Avenue+South,+Bloomington,+MN+55425&key=AIzaSyC2iOo5BoVFsEg-V6PP7firru-VXL8mQUs"></iframe></div>
        </div>
	</div>
    <div class="row double-border-top" id="times">
        <div class="col col-md-6">
            <h2 class="special large">Ceremony</h2>
            <p>The Atrium 4:00 PM</p>
            <img alt="4:00 PM" src="{{asset('img/clock4.png')}}">
        </div>
        <div class="col col-md-6">
            <h2 class="special large">Reception</h2>
            <p>Orchid &amp; Azalea rooms 5:30 PM</p>
            <img alt="5:30 PM" src="{{asset('img/clock530.png')}}">
        </div>
        <hr/>
        <hr/>
    </div>
    <div class="row">
        <div class="col col-md-12">
            <h2 class="large">ACCOMMODATIONS &amp; TRANSPORTATION</h2>
        </div>
    </div>
    <div class="row">
        <div class="col col-md-6">
            <p>Each room has a living area with a separate sleeping area. The king suite has one bed and a pull out sleeper couch in the living area. The double suite is also an option and has two beds with a pull out sleeper couch in the living area.</p>
			<p>Once the block of rooms has been reserved for us, pricing will be posted as well as instructions on how to book your room. Rooms must be reserved no later than three weeks in advance to receive the discounted rate, as any unbooked rooms will be released at three weeks.</p>
			<p>Check in time is at 4:00PM, checkout is 12:00PM. In some cases the hotel can accommodate earlier check ins but it is not a guarantee and is reliant on how busy the hotel is. Please plan accordingly.</p>
			<p>The hotel offers a complimentary cocktail hour (Manager's Reception) in the evenings and a full complimentary breakfast in the mornings.</p>
        </div>
        <div class="col col-md-6">
            <p>Nearly everything will take place at this hotel. Feel free to reserve a room with another friend or family member to save on costs, even if you live in the area!</p>
			<p>For more information please visit their <a href="http://embassysuites3.hilton.com" target="_blank">website</a> or call (952) 854-1000.</p>
			<p>There are complimentary shuttle rides to and from the Minneapolis/St. Paul (MSP) Airport, as well as the Mall of America. The metro-transit light rail also stops just outside the hotel. For more information on the light rail and other places it can take you <a href="http://www.metrotransit.org/metro-blue-line" target="_blank">visit their website</a>.</p>
        </div>
    </div>
@endsection
