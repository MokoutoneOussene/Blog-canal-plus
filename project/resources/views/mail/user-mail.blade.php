<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('internaut.layouts.css')
</head>

<body style="margin:15px;">

    <div class="pt-4 pb-2">
        <h5 class="card-title text-center pb-0 fs-4">Demande de validation de compte</h5>
        <div class="d-flex justify-content-center py-4">
            <a href="" class="logo d-flex align-items-center w-auto">
                <img src="{{ asset('font/img/Canal_logo.png') }}" alt="">
            </a>
        </div>
    </div>

    <p>Bonjour !</p>
    <p>Un utilisateur vient de vous Demande la validation de son compte</p>
    <a href="{{ route('index') }}">Aller sur site</a>

    @include('admin.layouts.js')
</body>

</html>
