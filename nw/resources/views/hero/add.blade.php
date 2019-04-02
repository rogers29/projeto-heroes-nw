@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
            	<ol class="breadcrumb panel-heading">
                	<li><a href="{{route('hero.index')}}">Heróis</a></li>
                	<li class="active">Adicionar</li>
                </ol>
                <div class="panel-body">
	                <form action="{{ route('hero.save') }}" method="POST">
	                	{{ csrf_field() }}
                        <div class="form-group">
                            <label for="name">Nome</label>
                            <input type="text" class="form-control" name="name" id="name" placeholder="Nome">
                        </div>
                        <div class="form-group">
                            <label for="class">Classe</label>
                            <select class="form-control" name="class" id="class">
                                <option value="Mago">Mago</option>
                                <option value="Sarcedote">Sacerdote</option>
                                <option value="Lutador">Lutador</option>
                                <option value="Cavaleiro">Cavaleiro</option>
                                <option value="Arqueiro">Arqueiro</option>
                                <option value="Espadachin">Espadachin</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="expertise">Especialidade</label>
                            <input type="text" class="form-control" name="expertise" id="expertise" placeholder="Especialidade">
                        </div>
                        <div class="form-group">
                            <label for="life">Vida</label>
                            <input type="number" class="form-control" name="life" id="life" placeholder="Vida">
                        </div>
                        <div class="form-group">
                            <label for="defense">Defesa</label>
                            <input type="number" class="form-control" name="defense" id="defense" placeholder="Defesa">
                        </div>
                        <div class="form-group">
                            <label for="damage">Dano</label>
                            <input type="number" class="form-control" name="damage" id="damage" placeholder="Dano">
                        </div>
                        <div class="form-group">
                            <label for="attack_speed">Velocidade Ataque</label>
                            <input type="number" step="any" class="form-control" name="attack_speed" id="attack_speed" placeholder="Velocidade Ataque">
                        </div>
                        <div class="form-group">
                            <label for="move_speed">Velocidade Movimento</label>
                            <input type="number" class="form-control" name="move_speed" id="life" placeholder="Velocidade Movimento">
                        </div>
                        <br />
						<button type="submit" class="btn btn-primary">Salvar</button>
	                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection