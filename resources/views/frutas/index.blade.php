<x-layout title="Frutas">
    <a href="/fruta/criar">Adicionar</a>
    <ul>
        @foreach ($frutas as $fruta)
        <li>{{ $fruta }}</li>
        @endforeach
    </ul>
</x-layout>