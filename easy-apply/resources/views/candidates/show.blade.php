{{$candidate->first_name}}
COUCOU
    <form action="{{route('candidates.destroy', $candidate->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">SUPPRIME</button>
    </form>