{{$candidate->first_name}}

    <form action="{{route('candidates.destroy', $candidate->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">SUPPRIME</button>
    </form>