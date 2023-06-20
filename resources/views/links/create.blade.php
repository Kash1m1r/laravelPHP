<x-layout title="Novo Chamado">
    <form action="/links/salvar" method="post">
        @csrf
        
        <div class="mb-3">
            <label for="nucleo" class="form-label">Nucleo:</label>
            <input type="text" id="nucleo" name="nucleo" class="form-control">
        </div>
        
        <div class="mb-3">
            <label for="nome" class="form-label">Ticket:</label>
            <input type="text" id="nome" name="nome" class="form-control">
        </div>
        
        <div class="mb-3">
            <label for="desc" class="form-label">Descrição:</label>
            <input type="text" id="desc" name="desc" class="form-control">
        </div>

        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
</x-layout>
