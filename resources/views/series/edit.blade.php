<x-layout title="Editar Série {{ $serie->nome }}">
    <x-series.form :action="route('series.store')" />
</x-layout>
