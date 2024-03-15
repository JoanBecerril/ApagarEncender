<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link rel="icon" href="{{ asset('src/ONOFF_LOGO_BLANCO.png') }}" type="image">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <title>Login | On-Off</title>
</head>

<body>

    <div class="login">
        <img src="{{ asset('/src/ONOFF_LOGO_GRANDE_2_BLANCO.png') }}">

        <div class="loginform">
            <form id="form-login" method="POST" action="{{ route('login.store') }}">
                @csrf

                @if (session('error'))
                    <div class="alert alert-danger">{{ session('error') }}</div>
                @endif

                @if (session('success'))
                    <div class="alert alert-success">{{ session('success') }}</div>
                @endif

                <div class="form-group">
                    <label for="email_usr">Email:</label>
                    <input type="email" class="form-control" aria-describedby="emailHelp"
                        placeholder="Introduce tu correo electrónico" id="email_usr" name="email_usr"
                        value="{{ old('email_usr') }}">
                    @error('email_usr')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>

                <div class="form-group password-input">
                    <label for="pwd_usr">Contraseña:</label>
                    <div class="input-group">
                        <input type="password" class="form-control" placeholder="Introduce tu contraseña" id="pwd_usr"
                            name="pwd_usr" value="{{ old('pwd_usr') }}">
                        <div class="input-group-append">
                            <button type="button" id="toggle-password" class="btn btn-link"><i
                                    class="bi bi-eye"></i></button>
                        </div>
                    </div>
                    @error('pwd_usr')
                        <small style="color: red">{{ $message }}</small>
                    @enderror
                </div>

                <div class="cont-btn">
                    <button href="{{ route('cliente') }}" type="submit" class="btn btn-primary" id="form-btn">Iniciar
                        sesión</button>
                </div>
            </form>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const togglePasswordButton = document.getElementById("toggle-password");
            const passwordInput = document.getElementById("pwd_usr");

            togglePasswordButton.addEventListener("click", function() {
                if (passwordInput.type === "password") {
                    passwordInput.type = "text";
                    togglePasswordButton.innerHTML = '<i class="bi bi-eye-slash"></i>';
                } else {
                    passwordInput.type = "password";
                    togglePasswordButton.innerHTML = '<i class="bi bi-eye"></i>';
                }
            });
        });
    </script>
</body>

</html>
