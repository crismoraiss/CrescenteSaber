<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/docs/4.0/assets/img/favicons/favicon.ico">

    <title>Login Crescente Saner</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/sign-in/">

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('assets/css/singin.css') }}" rel="stylesheet">

    <style>
        body {
            background-image: url('{{ asset('assets/images/img/login.png') }}');
            background-size: cover;
        }
    </style>
</head>

<body class="text-center">
    <form action="" method="POST" class="form-signin">
        @csrf
        <img class="mb-4" src="{{ asset('assets/images/img/logo.png') }}" alt="Logo Crescente saber" style="width: 80%">
        <h1 class="h3 mb-3 font-weight-normal">Bem vindo!</h1>

        <label for="inputEmail" class="sr-only"></label>
        <input type="email" name="email" class="form-control" placeholder="Email"
            value="{{ old('email') }}" />
        {{ $errors->has('email') ? $errors->first('email') : '' }}

        <label for="inputPassword" class="sr-only"></label>
        <input type="password" name="password" class="form-control" placeholder="Senha"
            value="{{ old('password') }}" />
        {{ $errors->has('password') ? $errors->first('password') : '' }}

        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me" class="checkbox"> Lembrar de mim
            </label>
        </div>
        <a href="{{ route('/') }}"><button class="btn btn-outline-secondary btn-block">Voltar</button></a>
        <button class="btn btn-success btn-block" type="submit" value="login">Entrar</button>
        <p class="mt-5 mb-3 text-muted">&copy; 2024 CloudWise</p>
        
    </form>
</body>

</html>
