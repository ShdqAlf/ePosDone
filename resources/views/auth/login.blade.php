<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

    <title>DPOS - {{ $title }}</title>
</head>

<body>
    <section class="sec-login">
        <div class="card">
            <div class="card-body">
                <div class="grid-layouts">
                    <div class="right">
                        <img src="{{ asset('assets/img/frame-login.png') }}" alt=""
                            style="width: 100%; height: 100%;">
                    </div>
                    <div class="left">
                        <h1 class="text-center main-title">Masuk</h1>
                        <form method="POST" action="{{ route('auth.login') }}" style="width: 100%;">
                            @csrf
                            @if ($errors->any())
                                @foreach ($errors->all() as $error)
                                    <span class="text-danger">*{{ $error }}</span>
                                @endforeach
                            @endif
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    <input type="email" name="email" class="form-control" id="email"
                                        placeholder="Masukkan Email">
                                </div>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                    <input type="password" class="form-control" id="password"
                                        placeholder="Masukkan Password" name="password">
                                    <span class="input-group-text" id="togglePassword" style="cursor: pointer;">
                                        <i class="fas fa-eye"></i>
                                    </span>
                                </div>
                            </div>
                            {{--  <div class="text-end">
                                <a href="" class="fg-pass">Forget Password ?</a>
                            </div>  --}}
                            <button type="submit" class="btn-login">Masuk</button>
                        </form>

                    </div>
                </div>
            </div>
    </section>

    <script>
        const togglePassword = document.querySelector("#togglePassword");
        const passwordInput = document.querySelector("#password");

        togglePassword.addEventListener("click", function() {
            const type = passwordInput.getAttribute("type") === "password" ? "text" : "password";
            passwordInput.setAttribute("type", type);
            this.querySelector("i").classList.toggle("fa-eye");
            this.querySelector("i").classList.toggle("fa-eye-slash");
        });
    </script>
    <script src="{{ asset('assets/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.js') }}"></script>
</body>

</html>
