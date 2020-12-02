

@foreach($allFilms as $film)
    <br> film {{ $film->name_film }}

    @foreach($allActors as $actor)
        
        @if ($film->id_film == $actor->id_film)
            <br> actors {{ $actor->name_actor}}

        @endif
    @endforeach()
    
@endforeach()




