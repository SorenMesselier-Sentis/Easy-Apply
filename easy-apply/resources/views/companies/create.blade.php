<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"
        integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('scss/style.css') }}">
    <title>Inscription entreprise</title>
</head>

<body>
    <section class="background">
        <header>
            <div>
                @include('partials/navbar')
            </div>
        </header>

        <div class="form">
            <div class="formCard">
                <h2>Inscrivez-vous en tant qu'entreprise</h2>
                <form class="" method="POST" action="{{ route('company.store') }}">
                    @csrf {{-- Token check --}}
                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

                    <div class="displayduZ">
                        <div class="part1">
                            <label for="name" class="my-2">Nom de l'entreprise</label><br>
                            <input class="btn-primary" type="text" name="name" value="{{ old('name') }}" required>
                            @error('name')
                                <p>{{ $message }} </p>
                            @enderror

                            <label for="email" class="my-2"><br>Votre Email</label><br>
                            <input class="btn-primary" type="mail" name="email">
                            @error('email')
                                <p>{{ $message }} </p>
                            @enderror

                            <label for="description" class="my-2"><br>Description</label><br>
                            <input class="btn-primary" type="text" name="description">
                            @error('birth_date')
                                <p>{{ $message }} </p>
                            @enderror

                            <label for="phone_number" class="my-2"><br>Telephone</label><br>
                            <input class="btn-primary" type="text" name="phone_number" required>
                            @error('phone_number')
                                <p>{{ $message }} </p>
                            @enderror
                        </div>

                        <div class="part2">
                            <label for="instagram" class="my-2">Instagram</label><br>
                            <input class="btn-primary" type="text" name="instagram">
                            @error('finstagram')
                                <p>{{ $message }} </p>
                            @enderror

                            <label for="facebook" class="my-2"><br>Facebook</label><br>
                            <input class="btn-primary" type="text" name="facebook">
                            @error('facebook')
                                <p>{{ $message }} </p>
                            @enderror

                            <label for="linkedin" class="my-2"><br>Linked In</label><br>
                            <input class="btn-primary" type="text" name="linkedin">
                            @error('linkedin')
                                <p>{{ $message }} </p>
                            @enderror

                            <label for="website" class="my-2"><br>Site Internet</label><br>
                            <input class="btn-primary" type="text" name="website">
                            @error('website')
                                <p>{{ $message }} </p>
                            @enderror
                        </div>
                    </div>


                    @php
                        $sectors = App\Models\Sector::all();
                        $company_sizes = App\Models\CompanySize::all();
                    @endphp
                    <!-- <select name="sector_id">
                @foreach ($sectors as $sector)
                    <option value="{{ $sector->id }}">{{ $sector->label }}
                    </option>
                @endforeach
            </select>
            <select name="company_size_id">
                @foreach ($company_sizes as $company_size)
                    <option value="{{ $company_size->id }}">{{ $company_size->label }}</option>
                @endforeach
            </select> -->
                    <!-- 
            <div class="divLogo">       
            <label for="logo" class="my-2">Votre logo</label>
            <input class="btn-primary" type="file" placeholder="Votre Nom" name="logo">
            @error('last_name')
                    <p>{{ $message }} </p>
            @enderror
            </div> -->
                    <div class="btnOr">
                        <button type="submit" class="button-orange">S'inscrire</button>
                        <a href="#">Déjà membre ? Se connecter</a>
                    </div>
                </form>
            </div>
        </div>
    </section>
    @include('partials/footer')
</body>

</html>
