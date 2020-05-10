@include('components.header')
<link rel="stylesheet" type="text/css" href="{{ asset('styles/login_styles.css') }}">
<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
<body>
    <form action="{{ route('login') }}" class="login-form" method="POST">
        @csrf
        <h1>Login</h1>
        <div class="txtb">
            <input type="email" name="email">
            <span data-placeholder="Email"></span>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>
        <div class="txtb">
            <input type="password" name="password" class="@error('password') is-invalid @enderror">
            @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <span data-placeholder="Password"></span>
        </div>

        <input type="submit" class="logbtn" value="Login">
        <div class="bottom-text">
            Don`t have account yet? <a href="/register-user">Sign up</a>
        </div>
    </form>

    @include('components.scripts')
    <script type="text/javascript">
        $(".txtb input").on("focus", function () {
            $(this).addClass("focus");
        });

        $(".txtb input").on("blur", function () {
            if($(this).val() == "")
            $(this).removeClass("focus");
        });
    </script>