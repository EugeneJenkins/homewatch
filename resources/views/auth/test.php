<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create account</title>
    <link rel="stylesheet" href="{{ asset('css/register.css') }}?22">

</head>
<body>

<div class="main">
    <div class="container">
        <form method="POST" action="{{ route('register') }}" class="appointment-form" id="appointment-form">
            @csrf
            <h2><b>Create account</b></h2>
            <div class="form-group-1">
                <input id="name" type="text" placeholder="Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                @error('name')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
                <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
                <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                @enderror
                <input id="password-confirm" placeholder="Confirm Password" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
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