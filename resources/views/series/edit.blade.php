<x-layout titulo="Atualizar Série '{!! $serie->nome !!}'">
    {{--
    Adicionado !! ao passar o nome da série para passá-lo 'de forma insegura' (sem dar encode html nos caracteres especiais)
    pois o nome também é passado como título da página e lá é feito o encoding. Fazer duplo encoding estava deixando o
    título com caracteres estranhos.
    --}}

    <x-series.form :action="route('series.update', $serie->id)" :nome="$serie->nome" :update="true"></x-series.form>
</x-layout>
