<div class="container mt-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h4 class="mb-0">Cadastro de Produto</h4>
        </div>
        <div class="card-body">
            <form wire:submit.prevent="store">
                <div class="mb-3">
                    <label class="form-label">Nome do Produto</label>
                    <input type="text" class="form-control" wire:model="nome">
                    @error('nome') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Ingredientes</label>
                    <textarea class="form-control" wire:model="ingredientes"></textarea>
                    @error('ingredientes') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

                <div class="mb-3">
                    <label class="form-label">Valor</label>
                    <input type="number" class="form-control" step="0.01" wire:model="preco">
                    @error('preco') <small class="text-danger">{{ $message }}</small> @enderror
                </div>

               

                <button type="submit" class="btn btn-success">Salvar Produto</button>
            </form>

            @if (session()->has('message'))
                <div class="alert alert-success mt-3">
                    {{ session('message') }}
                </div>
            @endif
        </div>
    </div>
</div>