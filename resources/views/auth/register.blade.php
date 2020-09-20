<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create account</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}">

</head>

<body>

    <div class="main">
        <div class="container">
            <form method="POST" action="{{ route('register') }}" class="appointment-form" id="appointment-form">
                {{ csrf_field() }}
                <h2><b>Create account</b></h2>

                <div class="form-group-1 form-group{{ $errors->has('name') ? ' has-error' : '' }}">

                    <div class="col-md-6">
                        <input id="name" type="text" placeholder="Name" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                        @if ($errors->has('name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="col-md-6" class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <input id="email" type="email" placeholder="Email" name="email" value="{{ old('email') }}" required autocomplete="email">

                        @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="col-md-6" class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <input id="password" placeholder="Password" type="password" name="password" required autocomplete="new-password">
                        @if ($errors->has('password'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password') }}</strong>
                        </span>
                        @endif
                    </div>

                    <div class="form-group">
                        <div class="col-md-6">
                            <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>

                </div>

                <div class="form-submit">
                    <button type="submit" class="submit">
                        {{ __('Register') }}
                    </button>
                </div>

                <div class="sigup">
                    <span>Already have an account? </span><a href="/login"> Log in</a>
                </div>
                <div class="home">
                    <a href="/">Home</a>
                </div>

            </form>
        </div>
    </div>
</body>

</html>