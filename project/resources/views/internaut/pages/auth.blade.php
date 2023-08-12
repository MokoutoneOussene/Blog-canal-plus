<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Authentification</title>
    @include('internaut.layouts.css')
</head>

<body>

    <main>
        <div class="container">

            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="card mb-3 shadow">

                                <div class="card-body">
                                    @if (session()->has('message'))
                                        <div class="alert alert-warning alert-dismissible show" role="alert">
                                            <span class="small">{{ session()->get('message') }} !</span>
                                            <button type="button" class="close" data-dismiss="alert"
                                                aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                    @endif

                                    <div class="pt-4 pb-2 mb-3">
                                        <h5 class="card-title text-center pb-0 fs-4">CONNEXION</h5>
                                    </div>

                                    <form class="row g-3 needs-validation" action="{{ route('login') }}" method="POST">
                                        @csrf
                                        <div class="col-12">
                                            <label for="yourUsername" class="form-label">Identifiant</label>
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend"><i
                                                        class="bi bi-person-bounding-box"></i></span>
                                                <input type="text" name="identifiant" class="form-control"
                                                    id="yourUsername" required>
                                                <div class="invalid-feedback">Renseignez votre identifiant</div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="yourPassword" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control"
                                                id="yourPassword" required>
                                            <div class="invalid-feedback">Renseignez votre password !</div>
                                        </div>

                                        <div class="col-12">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember"
                                                    value="true" id="rememberMe">
                                                <label class="form-check-label" for="rememberMe">Se souvenir de moi
                                                    !</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-dark w-100" type="submit">Se connecter</button>
                                        </div>

                                        <hr>
                                        <p class="text-center small">Vous n'avez pas de compte ?
                                            <a href="{{ route('register') }}" class="text-danger">Créez-un ici</a>
                                        </p>
                                    </form>

                                </div>
                            </div>
                            <div class="credits">
                                Copyright <a href="" class="text-dark">CANAL+</a>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    @include('admin.layouts.js')

</body>

</html>
