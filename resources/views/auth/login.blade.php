<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">

</head>

<body>

    <div class="main">
        <div class="container">
            <form  method="POST" action="{{ route('login') }}" class="appointment-form" id="appointment-form">
            <h2><b>Login</b></h2>
                {{ csrf_field() }}

                <div class="form-group1 form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                    <input id="email" type="email" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif

                    <input id="password" type="password"  placeholder="Password" name="password" required autocomplete="current-password">
                </div>

                <div class="form-submit">
                    <button type="submit" class="submit">
                        {{ __('Login') }}
                    </button>
                </div>

                <div class="sigup">
                    <span>Don't have an account? </span><a href="/register"> Sign up</a>
                </div>
                <div class="home">
                    <a href="/">Home</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>