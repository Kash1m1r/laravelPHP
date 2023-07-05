<x-layout title="Registrar Links">
    <a href="/links/criar" class="btn btn-dark mb-2">Adicionar Ticket</a>

    <ul class="list-group">
        
        @foreach ($links as $link)     
        
        <li class="list-group-item mb-2">
 
            Numero do ticket: {{ $link->nome }} </br> 
            Causa do Evento: {{ $link->desc }}
        </li>
        @endforeach
    </ul>
</x-layout>
