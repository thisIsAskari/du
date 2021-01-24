<!doctype html>
<html lang="en">

<!-- Mirrored from protable.laborasyon.com/dark/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Jan 2020 17:33:05 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DU Admin Dashboard</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{asset('admin/assets/media/image/favicon.png')}}"/>

    <!-- Plugin styles -->
    <link rel="stylesheet" href="{{asset('admin/vendors/bundle.css')}}" type="text/css">

    <!-- App styles -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/app.min.css')}}" type="text/css">
</head>
<body class="form-membership dark">


<div class="form-wrapper">

    <!-- logo -->
    <div id="logo">
        <img class="logo" src="{{asset('storage/images/logo/'.$home->logo)}}" alt="logo">
        <img class="logo-sm" src="{{asset('storage/images/logo/'.$home->logo)}}" alt="small logo">
        <img class="logo-dark" src="{{asset('storage/images/logo/'.$home->logo)}}" alt="dark logo">
    </div>
    <!-- ./ logo -->

    <h5>Sign in</h5>

    <!-- form -->
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group">
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="form-group">
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="current-password">
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="form-group d-flex justify-content-between">
            <div class="custom-control custom-checkbox">
                <input class="custom-control-input" type="checkbox" name="remember" id="customCheck1" {{ old('remember') ? 'checked' : '' }}>
                <label class="custom-control-label" for="customCheck1">{{ __('Remember Me') }}</label>
            </div>
        </div>
        <button class="btn btn-primary btn-block">Sign in</button>
    </form>
    <!-- ./ form -->

</div>

<!-- Plugin scripts -->
<script src="{{asset('admin/vendors/bundle.js')}}"></script>

<!-- App scripts -->
<script src="{{asset('admin/assets/js/app.min.js')}}"></script>
</body>

<!-- Mirrored from protable.laborasyon.com/dark/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 16 Jan 2020 17:33:05 GMT -->
</html>
