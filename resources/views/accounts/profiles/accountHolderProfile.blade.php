@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="profileTitle">
                <h2>Create user profiles</h2>
            </div>
        </div>
    </div>
    <div class="spacer" style="height:2em;"></div>
    <div class="row">
        <div class="col-md-12">
            <form action="storeuserprofile" method="POST">
                <p>Account Holder Name</p>
                <input type="text" name="holderName">
                <div class="spacer" style="height:2em;"></div>
                <p>IC number</p>
                <input type="number" name="ICnumber">
                <div class="spacer" style="height:2em;"></div>
                <p>Mailing Address</p>
                <textarea name="mailAddress" id="" cols="30" rows="5"></textarea>
                <div class="spacer" style="height:2em;"></div>
                <p>Account Number</p>
                <input type="number" name="accountNumber">
                <div class="spacer" style="height:2em;"></div>
                <p>Card Number</p>
                <input type="number" name="cardNumber">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="spacer" style="height:2em;"></div>
                 <button class="btn btn-success">Add</button>
            </form>
            <div class="spacer" style="height:2em;"></div>
           
        </div>
    </div>
    
</div>
@endsection