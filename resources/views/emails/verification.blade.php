@extends('emails.master')

    @section('content')
        
        Hey {{$name}}, This mail has been sent because you changed your email.<br><br />

        <font color="red">In order to get verified your account email:</font><br /><br />

        Please click <a href="{!! url('/verify', ['code'=>$verification_code]) !!}"> Here</a> to confirm your email<br /><br />

    @stop