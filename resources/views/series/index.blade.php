<x-layout titulo="Séries">
    <a href="{{ route("series.create") }}" class="btn btn-dark mb-2">Nova série</a>

    @isset($mensagemSucesso)
        <div class="alert alert-success">
            {{ $mensagemSucesso }}
        </div>
    @endisset

    <ul class="list-group">
        @foreach($series as $serie)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $serie->nome }}

                <form action="{{ route("series.destroy", $serie->id) }}" method="post">
                    @csrf
                    @method("delete")
                    <button class="btn btn-danger btn-sm">
                        X
                    </button>
                </form>
            </li>
        @endforeach
    </ul>
</x-layout>
