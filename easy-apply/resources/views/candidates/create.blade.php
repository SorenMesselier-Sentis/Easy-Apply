<form class="" method="POST" action="{{route('candidate.store')}}">
    @csrf {{-- Token check --}}
    <input type="hidden" name="id_status" value="1">
    <input type="hidden" name="id_user" value="{{ auth()->user()->id }}">
    <label for="first_name"class="my-2">Prenom</label>
    <input class="btn-primary" type="text" placeholder="Votre Prenom" name="first_name" required>
    @error('first_name')
        <p>{{ $message }} </p>
    @enderror

    <label for="last_name"class="my-2">Nom</label>
    <input class="btn-primary" type="text" placeholder="Votre Nom" name="last_name" required>
    @error('last_name')
        <p>{{ $message }} </p>
    @enderror

    <label for="birth_date"class="my-2">Date de naissance</label>
    <input class="btn-primary" type="date" name="birth_date" required>
    @error('birth_date')
        <p>{{ $message }} </p>
    @enderror

    <label for="phone_number"class="my-2">Telephone</label>
    <input class="btn-primary" type="text" name="phone_number" required>
    @error('phone_number')
        <p>{{ $message }} </p>
    @enderror

    <label for="instagram"class="my-2">Instagram</label>
    <input class="btn-primary" type="text" name="instagram">
    @error('finstagram')
        <p>{{ $message }} </p>
    @enderror

    <label for="facebook"class="my-2">Facebook</label>
    <input class="btn-primary" type="text" name="facebook">
    @error('facebook')
        <p>{{ $message }} </p>
    @enderror

    <label for="linkedin"class="my-2">Linked In</label>
    <input class="btn-primary" type="text" name="linkedin">
    @error('linkedin')
        <p>{{ $message }} </p>
    @enderror
@php
    $status = App\Models\Status::all();
@endphp
    <form method="POST">
        @csrf
        <select name="status">
            @foreach ($status as $status)
                <option value="{{ $status->id }}">{{
                    $status->label
                }}</option>
            @endforeach
        </select>
    <button type="submit" class="">S'inscrire</button>
</form>
