<x-layout title="Times">
    <a href="/times/criar" class="btn btn-dark mb-2">Adicionar Time</a>

    <ul class="list-group">
        @foreach ($times as $time)
        <h5> {{ $time-> pais }} </h5>
        <li class="list-group-item mb-2">
           Nome do Time: {{ $time->nome }} </br>
           Sobre o Time: {{ $time->desc }}
        </li>
        @endforeach
    </ul>
</x-layout>
