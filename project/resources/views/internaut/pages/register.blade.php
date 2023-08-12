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

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">CREATION DE COMPTE !</h5>
                                        <p class="text-center small">Vous devez remplir tous les champs</p>
                                    </div>

                                    <form class="row g-3 needs-validation" action="{{ route('add_user') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="text" name="roles_id" value="3" class="form-control" hidden>
                                        <input type="text" name="statut" value="en attente" class="form-control" hidden>
                                        <div class="col-12">
                                            <div class="input-group has-validation">
                                                <span class="input-group-text" id="inputGroupPrepend"><i
                                                        class="bi bi-person-bounding-box"></i></span>
                                                <input type="text" name="name" class="form-control" placeholder="Nom et prénom" required>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                                        </div>

                                        <div class="col-12">
                                            <input type="text" name="code" class="form-control" placeholder="Identifiant CANAL+" required>
                                        </div>

                                        <div class="col-12">
                                            <select name="services_id" class="form-control">
                                                <option value="">Choiser votre service</option>
                                                @foreach (App\Models\Service::all() as $serv)
                                                    <option value="{{ $serv->id }}">{{ $serv->nom_service }}</option>
                                                @endforeach
                                            </select>
                                        </div>

                                        <div class="col-12">
                                            <input type="file" name="photo" class="form-control" placeholder="Votre photo" required>
                                        </div>

                                        <div class="col-12">
                                            <input type="text" name="identifiant" class="form-control" placeholder="Nom d'utilisateur" required>
                                        </div>

                                        <div class="col-12">
                                            <input type="password" name="password" class="form-control" placeholder="Mot de passe" required>
                                        </div>

                                        <div class="col-12 mb-3">
                                            <button class="btn btn-dark w-100" type="submit">Creer le compte</button>
                                        </div>

                                        <p class="text-center small">Vous avez un compte ? 
                                            <a href="{{ route('index') }}" class="text-danger">Se connecter ici</a> 
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
