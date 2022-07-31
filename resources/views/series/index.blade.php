<x-layout titulo="Séries">
    <a href="{{ route("series.create") }}" class="btn btn-dark mb-2">Nova série</a>

    <ul class="list-group">
        @foreach($series as $serie)
            <li class="list-group-item">{{ $serie->nome }}</li>
        @endforeach
    </ul>
</x-layout>
