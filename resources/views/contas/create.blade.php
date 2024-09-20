@extends('layouts.admin')

@section('content')
    <div class="card mt-4 mb-4 border-light shadow">
        <div class="card-header d-flex justify-content-between">
            <span>Cadastrar Conta</span>
            <span>
                <a href="{{ route('conta.index') }}" class="btn btn-info btn-sm">Listar</a>
            </span>
        </div>

        {{-- Verificar se existe a sessão success e imprimir o valor --}}
        <x-alert /> 


        <div class="card-body">
            <form class="row g-3" action="{{ route('conta.store') }}" method="post">
                @csrf 

                <div class="col-md-12 col-sm-12">
                    <label for="nome" class="form-label">Nome:</label>
                    <input type="text" name="nome" class="form-control" id="nome" placeholder="Nome da conta" value="{{ old('nome') }}">
                </div>

                <div class="col-md-4 col-sm-12">
                    <label for="valor" class="form-label">Valor:</label>
                    <input type="text" name="valor" class="form-control" id="valor" placeholder="Valor da conta" value="{{ old('valor') }}">
                </div>

                <div class="col-md-4 col-sm-12">
                    <label for="vencimento" class="form-label">Vencimento:</label>
                    <input type="date" name="vencimento" class="form-control" id="vencimento" value="{{ old('vencimento') }}">
                </div>

                <div class="col-md-4 col-sm-12">
                    <label for="situacao_conta_id" class="form-label">Situação da Conta:</label>
                    <select name="situacao_conta_id" id="situacao_conta_id" class="form-select">
                        <option value="">Selecione</option>
                        @forelse ($situacoesContas as $situacaoConta)
                            <option value="{{ $situacaoConta->id }}" 
                            {{ old('situacao_conta_id') == $situacaoConta->id ? 'selected' : '' }}>
                            {{ $situacaoConta->nome }}
                            </option>
                        @empty
                            <option value="">Nenhuma situação encontrada</option>
                        @endforelse
                    </select>
                </div>

                <div class="col-12">
                    <button type="submit" class="btn btn-success bt-sm">Cadastrar</button>
                </div>
            
            </form>
        </div>

    </div>

@endsection






