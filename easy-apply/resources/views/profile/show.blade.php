<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('scss/style.css') }}">
    <title>Profil</title>
</head>

<section class="background">
    <header>
        <div>
            @include('partials/navbar')
            <section class="header-content">
                <div class="header-content__desc">
                    <h1>Profil</h1>
                    <div></div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean luctus mi orci, vitae gravida
                        enim tristique vitae. Sed vehicula enim a urna iaculis convallis. Aliquam facilisis ante
                        magna, ac feugiat tellus convallis at. Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Aenean luctus mi orci, vitae gravida enim tristique vitae. Sed vehicula enim a urna
                        iaculis convallis. Aliquam facilisis ante magna, ac feugiat</p>
                </div>
                <div class="header-content__image">
                    <img src="../img/profil-img.png" alt="people holding phones">
                </div>
            </section>
        </div>
    </header>
</section>
<section class="a-propos">
    <h2 class="title-blue">À propos de moi</h2>
    <div class="a-propos__edit">
        <a href="" class="button-orange2">Editer<i class="fas fa-pen"></i></a>
    </div>
    <div class="a-propos__elements">
        <div class="upload">
            <div><img src="../img/info1.png" alt=""></div>
            <a href="">Téléversez votre photo</a>
            <div><img src="../img/info2.png" alt=""></div>
            <a href="">Téléversez votre CV</a>
        </div>
        <div class="info">
            <h3>Mes informations personnelles</h3>
            <div>
                <div>
                    <label for="last_name" class="my-2">Nom</label>
                    <input class="btn-primary" type="text" name="last_name"
                        value="{{ old('last_name') }}" required>
                    
                        <label for="date_birth" class="my-2">Date de naissance</label>
                        <input class="btn-primary" type="text" name="date_birth">

                    <label for="city" class="my-2">Ville</label>
                    <input class="btn-primary" type="text" name="city">
                </div>
                <div>
                    <label for="first_name" class="my-2">Prénom</label>
                    <input class="btn-primary" type="text" name="first_name"
                        value="{{ old('first_name') }}" required>

                        <label for="email" class="my-2">Adresse mail</label>
                        <input class="btn-primary" type="text" name="email"
                            value="{{ old('email') }}" required>

                    <label for="postal" class="my-2">Code postal</label>
                    <input class="btn-primary" type="text" name="postal">
                </div>
            </div>
            <h3>Mes informations professionnelles</h3>
            <div>
                <div>
                    <label for="experience" class="my-2">Expérience(s) professionnelle(s)</label>
                    <input class="btn-primary" type="text" name="experience">
                </div>
                <div>
                    <label for="soft_skills" class="my-2">Soft Skills</label>
                    <input class="btn-primary" type="text" name="soft_skills">
                </div>
            </div>
            <label for="description" class="my-2">Description</label>
            <input class="btn-primary desc" type="text" name="description">
            <h3>Mes critères</h3>
            <div>
                <div>
                    <label for="localisation" class="my-2">Localisation</label>
                    <input class="btn-primary" type="text" name="localisation">
                </div>
                <div>
                    <label for="sector" class="my-2">Secteur d'activité</label>
                    <input class="btn-primary" type="text" name="sector">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="historique-candidatures">
    <h2 class="title-blue">Historique des candidatures</h2>
    <div>
        <img src="../img/historique.png" alt="historique des candidatures">
    </div>
</section>
<section class="parametres">
    <h2 class="title-blue">Paramètres du compte</h2>
    <div>
        <a href="">Modifier le mot de passe</a>
        <a href="">Supprimer mon compte</a>
    </div>
</section>
@include('partials/footer')
