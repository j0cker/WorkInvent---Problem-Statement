@extends('emails.master')

    @section('content')

        You have changed your password.<br><br />

        Your login is now going to be:<br /><br />

        Mail: {{ $email }}<br />
        Pass: {{ $password }}<br /><br />

    @stop