<x-layout titulo="Nova Série">
    <x-series.form :action="route('series.store')" :nome="old('nome')" :update="false"></x-series.form>
</x-layout>
