<x-layout titulo="Nova Série">
    <form action="{{ route('series.store') }}" method="post">
        @csrf

        <div class="row mb-3">
            <div class="col-8">
                <label for="nome" class="form-label">Nome:</label>
                <input
                    type="text"
                    id="nome"
                    name="nome"
                    class="form-control"
                    value="{{ old('nome') }}">
            </div>

            <div class="col-2">
                <label for="numberSeasons" class="form-label">Nº temporadas:</label>
                <input
                    type="text"
                    id="numberSeasons"
                    name="numberSeasons"
                    class="form-control"
                    value="{{ old('numberSeasons') }}">
            </div>

            <div class="col-2">
                <label for="episodesPerSeason" class="form-label">Eps. p/ temporada:</label>
                <input
                    type="text"
                    id="episodesPerSeason"
                    name="episodesPerSeason"
                    class="form-control"
                    value="{{ old('episodesPerSeason') }}">
            </div>
        </div>

        <button type="submit" class="btn btn-primary">Inserir</button>
    </form>

</x-layout>
