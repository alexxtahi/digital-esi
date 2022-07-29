<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Connexion - ESI</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('majestic-master/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('majestic-master/vendors/base/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="{{ asset('majestic-master/css/style.css') }}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{ asset('majestic-master/images/favicon.png') }}" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-stretch auth auth-img-bg">
                <div class="row flex-grow">
                    <div class="col-lg-6 d-flex align-items-center justify-content-center">
                        <div class="auth-form-transparent text-left p-3">
                            {{-- <div class="brand-logo">
                                <img src="{{ asset('majestic-master/images/logo.svg" alt="logo">
                            </div> --}}

                            <!-- Session Status -->
                            <x-auth-session-status class="mb-4" :status="session('status')" />

                            <!-- Validation Errors -->
                            <x-auth-validation-errors class="mb-4" :errors="$errors" />

                            <h4>Bienvenue !</h4>
                            <h6 class="font-weight-light">Remplissez le formulaire pour vous connecter</h6>
                            <form class="pt-3" method="POST" action="{{ route('login') }}">
                                @method('POST')
                                @csrf
                                <div class="form-group">
                                    <label for="exampleInputEmail">Adresse mail</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend bg-transparent">
                                            <span class="input-group-text bg-transparent border-right-0">
                                                <i class="mdi mdi-account-outline text-primary"></i>
                                            </span>
                                        </div>
                                        <input type="email" class="form-control form-control-lg border-left-0"
                                            name="email" value="{{ old('email') }}" id="exampleInputEmail"
                                            placeholder="Email" autofocus required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword">Mot de passe</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend bg-transparent">
                                            <span class="input-group-text bg-transparent border-right-0">
                                                <i class="mdi mdi-lock-outline text-primary"></i>
                                            </span>
                                        </div>
                                        <input type="password" class="form-control form-control-lg border-left-0"
                                            name="password" value="{{ old('password') }}" id="exampleInputPassword"
                                            placeholder="Mot de passe" autocomplete="current-password" required>
                                    </div>
                                </div>
                                {{-- <div class="my-2 d-flex justify-content-between align-items-center">
                                    <div class="form-check">
                                        <label class="form-check-label text-muted">
                                            <input type="checkbox" class="form-check-input" />
                                            Rester connecté
                                        </label>
                                    </div>
                                    <a href="#" class="auth-link text-black">Mot de passe oublié ?</a>
                                </div> --}}
                                <div class="my-3">
                                    <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn"
                                        type="submit">Connexion</button>
                                </div>
                                {{-- <div class="text-center mt-4 font-weight-light">
                                    Don't have an account? <a href="register-2.html" class="text-primary">Create</a>
                                </div> --}}
                            </form>
                        </div>
                    </div>
                    <div style="background: url({{ asset('img/blog/blog1.jpg') }}) no-repeat center/cover;"
                        class="col-lg-6 login-half-bg d-flex flex-row">
                        <p class="text-white font-weight-medium text-center flex-grow align-self-end">
                            Ecole Supérieure d'Industrie</p>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="{{ asset('majestic-master/vendors/base/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="{{ asset('majestic-master/js/off-canvas.js') }}"></script>
    <script src="{{ asset('majestic-master/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('majestic-master/js/template.js') }}"></script>
    <!-- endinject -->
</body>

</html>
