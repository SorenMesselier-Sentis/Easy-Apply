<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('scss/style.css')}}">
    <title>Page introuvable | Easy-apply</title>
</head>
<body>
    <header>
    <div>
            @include('partials/navbar');
            <section class="header-content">
                <div class="header-content__desc">
                    <h1>Oups !</h1>
                    <div></div>
                    <p>La page que vous cherchez semble introuvable.</p>
                    <p class="erreur-message">Code erreur : <span>404</span></p>
                    <a href="{{ route('home') }}" class="button-orange">Retourner à l'accueil</a>
                </div>
                <div class="header-content__image__404">
                    <img src="img/404-image.png" alt="fantôme 404">
                </div>
            </section>
        </div>
    </header>
    @include('partials/footer')
</body>
</html>