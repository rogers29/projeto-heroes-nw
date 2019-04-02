@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <ol class="breadcrumb panel-heading">
                    <li class="active">Heróis</li>
                </ol>
                <div class="panel-body">
                    <form class="form-inline" action="{{ route('hero.search') }}" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" name="_method" value="put">
                        <div class="form-group" style="float: right;">
                            <p><a href="{{route('hero.add')}}" class="btn btn-info btn-sm"><i class="glyphicon glyphicon-plus"></i> Adicionar</a></p>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Nome">
                        </div>
                        <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i> Buscar</button>
                    </form>
                    <br />
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>Cod</th>
                                <th>Nome</th>
                                <th>Classe</th>
                                <th>Especialidade</th>
                                <th>Vida</th>
                                <th>Defesa</th>
                                <th>Dano</th>
                                <th>Velocidade Ataque</th>
                                <th>Velocidade Movimento</th>
                                <th>Ação</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($heroes as $hero)
                                <tr>
                                    <th scope="row" class="text-center">{{ $hero->id }}</th>
                                    <td>{{ $hero->name }}</td>
                                    <td>{{ $hero->class }}</td>
                                    <td>{{ $hero->expertise }}</td>
                                    <td>{{ $hero->life }}</td>
                                    <td>{{ $hero->defense }}</td>
                                    <td>{{ $hero->damage }}</td>
                                    <td>{{ $hero->attack_speed }}</td>
                                    <td>{{ $hero->move_speed }}</td>
                                    <td width="155" class="text-center">
                                        <a href="{{route('hero.edit', $hero->id)}}" class="btn btn-default">Editar</a>
                                        <a href="{{route('hero.delete', $hero->id)}}" class="btn btn-danger">Excluir</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    @if(!isset($search))
                    <div align="center">
                        {!! $heroes->links() !!}
                    </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection