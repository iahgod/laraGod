@extends('base/section')

@section('content')

<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            @component('components.titulo')
            {!! $titulo !!}
            @endcomponent
            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{!! $message !!}</p>
                </div>
            @endif


            <div class="row">
                <a href="{!!route('tarefas.add')!!}" class="btn btn-primary">Nova tarefa</a>

            </div>
            <div class="col">
                <ol>
                    @foreach ($tarefas as $tarefa)
                <div class="row" style="padding: 5px;">
                    <li><a style="width: 300px;" class="btn btn-{!! ($tarefa->resolvido == 0) ? 'danger' : 'success'!!} btn-sm" href="{!! route('tarefas.status', ['id'=>$tarefa->id])!!}">
                        {!! ($tarefa->resolvido == 1) ? 'Marcar como não resolvido' : 'Marcar como resolvido'!!}</a>
                        <span style="width: 300px;" class="text-{!! ($tarefa->resolvido == 0) ? 'danger' : 'success'!!}"> - {!! $tarefa->titulo !!} -</span>
                        <a class="btn btn-danger btn-sm" href="{!! route('tarefas.del', ['id'=>$tarefa->id])!!}">Deletar</a> - <a class="btn btn-info btn-sm" href="{!! route('tarefas.edit', ['id'=>$tarefa->id])!!}">Editar</a></li>
                </div>
                @endforeach
                </ol>
            </div>
            <div class="row">

            </div>
            <div class="row">

            </div>

@endsection
