<x-layout title="Nova Série">
    <form action="/times/salvar" method="post">
        @csrf
        <div class="mb-3">
            <label for="pais" class="form-label">País:</label>
            <input type="text" id="pais" name="pais" class="form-control">
        </div>

        <div class="mb-3">
            <label for="nome" class="form-label">Nome do Time:</label>
            <input type="text" id="nome" name="nome" class="form-control">
        </div>

        

        <div class="mb-3">
            <label for="desc" class="form-label">Sobre o Time:</label>
            <input type="text" id="desc" name="desc" class="form-control">
        </div>
        <button type="submit" class="btn btn-primary">Adicionar</button>
    </form>
</x-layout>
