

    Hey {{$name}}, Welcome to <a href="{{ url('/') }}">{{ Config::get('app.name') }}</a>.<br><br />

    We appreciated your selection of being part of us. We are committed with you, so we are going to give you the best service ever!.<br /><br />

    Your login is going to be:<br /><br />

    Mail: {{ $email }}<br />
    Pass: {{ $password }}<br /><br />

    <font color="red">In order to get your account ready:</font><br /><br />

    Please click <a href="{!! url('/verify', ['code'=>$verification_code]) !!}"> Here</a> to confirm email<br /><br />

    Thank You.<br /><br />

    Team <a href="{{ url('/') }}">{{ Config::get('app.name') }}</a>