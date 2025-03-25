<div class="container mt-5">
    <div class="card shadow-lg">
        <div class="card-body">
            <h2 class="card-title text-center mb-4">Cadastro de Cliente</h2>
            
            @if (session()->has('message'))
                <div class="alert alert-success" role="alert">
                    {{ session('message') }}
                </div>
            @endif
            
            <form wire:submit.prevent="store">
                <div class="mb-3">
                    <label class="form-label">Nome</label>
                    <input type="text" wire:model="nome" class="form-control" placeholder="Nome">
                    @error('nome') <div class="text-danger">{{ 'esta faltando o nome do seu cadastro' }}</div> @enderror
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Endereço</label>
                    <input type="text" wire:model="endereco" class="form-control" placeholder="Endereço">
                    @error('endereco') <div class="text-danger">{{ $message }}</div> @enderror
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Telefone</label>
                    <input type="text" wire:model="telefone" class="form-control" placeholder="Telefone">
                    @error('telefone') <div class="text-danger">{{ $message }}</div> @enderror
                </div>
                
                <div class="mb-3">
                    <label class="form-label">CPF</label>
                    <input type="text" wire:model="cpf" class="form-control" placeholder="CPF">
                    @error('cpf') <div class="text-danger">{{ $message }}</div> @enderror
                </div>
                
                <div class="mb-3">
                    <label class="form-label">E-mail</label>
                    <input type="email" wire:model="email" class="form-control" placeholder="E-mail">
                    @error('email') <div class="text-danger">{{ $message }}</div> @enderror
                </div>
                
                <div class="mb-3">
                    <label class="form-label">Senha</label>
                    <input type="password" wire:model="password" class="form-control" placeholder="Senha">
                    @error('senha') <div class="text-danger">{{ $message }}</div> @enderror
                </div>
                
                <button type="submit" class="btn btn-primary w-100">Cadastrar</button>
            </form>
        </div>
    </div>
</div>
