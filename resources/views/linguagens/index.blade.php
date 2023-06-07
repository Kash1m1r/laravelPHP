<x-layout title="Linguagens">
<a href="/linguagens/criar">Adicionar Linguagem</a>
    <ul>
        @foreach ($linguagens as $linguagem)
        <li>{{ $linguagem }}</li>
        @endforeach
    </ul>
</x-layout>