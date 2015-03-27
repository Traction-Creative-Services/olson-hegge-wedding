@extends('layouts.master')

@section('page')
	<div class="row">
		<div class="col col-md-12" id="guest-form">
            <form method="post" action="">
                <div class="input-group">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name">
                </div>
                <div class="input-group">
                    <label for="message">Message</label>
                    <textarea id="message" name="message"></textarea>
                </div>
                <button class="btn btn-default" id="submit-entry">Sign</button><button class="btn btn-default" id="clear-form">Clear</button>
            </form>
        </div>
	</div>
    <div class="row">
        <div class="col col-md-2">
            <h2 class="special triple-large">Messages</h2>
        </div>
    </div>
    <div id="entries">
    @foreach($entries as $entry)
        <div class="row">
            <div class="col col-md-4">
                <p><span class="special">{{$entry['name']}}</span><br/>
                    {{$entry['datetime']}}</p>
            </div>
            <div class="col col-md-8">
                <p>{{$entry['message']}}</p>
            </div>
        </div>
    @endforeach
    </div>
@endsection

@section('scripts')
    <script>
        var guestBookSaveUrl = '{{route('guestBookSave')}}';
        $(document).ready(function() {
            $('#submit-entry').click(function(e) {
                e.preventDefault();
                guestForm.save();
            });
            
            $('#clear-form').click(function(e) {
                e.preventDefault();
                guestForm.clear();
            });
        })
    </script>
@endsection