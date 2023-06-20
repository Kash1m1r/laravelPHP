<x-layout title="Registrar Links">
    <a href="/links/criar" class="btn btn-dark mb-2">Adicionar Ticket</a>

    <ul class="list-group">
        
        @foreach ($links as $link)
            <label for="exampleFormControlSelect2">Example multiple select</label>
            <select multiple class="form-control" id="exampleFormControlSelect2">
            <option>Açailândia</option>
            <option>Alcântara</option>
            <option>Buriticupu</option>
            <option>Balsas</option>
            <option>Barra do Corda</option>
            </select>
        <h5> {{ $link-> nucleo }} </h5>
        <li class="list-group-item mb-2">
 
            Numero do ticket: {{ $link->nome }} </br> 
            Causa do Evento: {{ $link->desc }}
        </li>
        @endforeach
    </ul>
</x-layout>
