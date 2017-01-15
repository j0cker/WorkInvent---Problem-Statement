@extends('emails.master')

    @section('content')
        
        Hey {{$name}}, This mail has been sent because you changed your password.<br><br /><br><br />

        Your login is going to be:<br /><br />

        Mail: {{ $email }}<br />
        Pass: {{ $pswd }}<br /><br />

    @stop