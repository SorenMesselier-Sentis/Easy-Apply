<form class="" method="POST" action="{{ route('company.store') }}">
    @csrf {{-- Token check --}}
    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
    <label for="name" class="my-2">Nom de l'entreprise</label>
    <input class="btn-primary" type="text" placeholder="Nom de l'entreprise" name="name" value="{{ old('name') }}" required>
    @error('name')
        <p>{{ $message }} </p>
    @enderror

    <label for="email" class="my-2">Votre Email</label>
    <input class="btn-primary" type="mail" placeholder="Email" name="email">
    @error('email')
        <p>{{ $message }} </p>
    @enderror

    <label for="logo" class="my-2">Votre logo</label>
    <input class="btn-primary" type="file" placeholder="Votre Nom" name="logo">
    @error('last_name')
        <p>{{ $message }} </p>
    @enderror

    <label for="description" class="my-2">Description</label>
    <input class="btn-primary" type="text" name="description">
    @error('birth_date')
        <p>{{ $message }} </p>
    @enderror

    <label for="phone_number" class="my-2">Telephone</label>
    <input class="btn-primary" type="text" name="phone_number" required>
    @error('phone_number')
        <p>{{ $message }} </p>
    @enderror

    <label for="instagram" class="my-2">Instagram</label>
    <input class="btn-primary" type="text" name="instagram">
    @error('finstagram')
        <p>{{ $message }} </p>
    @enderror

    <label for="facebook" class="my-2">Facebook</label>
    <input class="btn-primary" type="text" name="facebook">
    @error('facebook')
        <p>{{ $message }} </p>
    @enderror

    <label for="linkedin" class="my-2">Linked In</label>
    <input class="btn-primary" type="text" name="linkedin">
    @error('linkedin')
        <p>{{ $message }} </p>
    @enderror

    <label for="website" class="my-2">Site Internet</label>
    <input class="btn-primary" type="text" name="website">
    @error('website')
        <p>{{ $message }} </p>
    @enderror
    @php
        $sectors = App\Models\Sector::all();
        $company_sizes = App\Models\CompanySize::all();
    @endphp
    <select name="sector_id">
        @foreach ($sectors as $sector)
            <option value="{{ $sector->id }}">{{ $sector->label }}
            </option>
        @endforeach
    </select>
    <select name="company_size_id">
        @foreach ($company_sizes as $company_size)
            <option value="{{ $company_size->id }}">{{ $company_size->label }}</option>
        @endforeach
    </select>
    <button type="submit" class="">S'inscrire</button>
</form>
