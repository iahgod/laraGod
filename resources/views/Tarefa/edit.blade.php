@extends('base/section')

@section('content')

<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            @component('components.titulo')
            {!! $titulo !!}
            @endcomponent
            <div class="row">
                <form  method="POST" action="{!! route('tarefas.edit', ['id'=>$tarefa->id])!!}" enctype="multipart/form-data">
                    @csrf
                    <label for="titulo">Titulo<br>
                        <input type="text" name="titulo" id="titulo" value="{!!$tarefa->titulo!!}" required>
                    </label>
                    <label for="resolvido"><br>
                        <input type="hidden" name="resolvido" value="{!!$tarefa->resolvido!!}" id="resolvido">
                    </label>
                    <button type="submit">Enviar</button>
                </form>
            </div>
            <div class="row">


            </div>
            <div class="row">

            </div>
            <div class="row">

            </div>

@endsection
