@extends('base/section')

@section('content')

<!-- MAIN CONTENT-->
<div class="main-content">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            @component('components.titulo')
            {!! $titulo !!}
            @endcomponent
            @if ($errors->any())
            <div class="alert alert-success">
                @foreach ($errors->all() as $error)
                <p>{!! $error !!}</p>
                @endforeach
            </div>
            @endif
            <div class="row">
                <form  method="POST" enctype="multipart/form-data">
                    @csrf
                    <label for="titulo">Titulo<br>
                        <input type="text" name="titulo" id="titulo">
                    </label>
                    <label for="resolvido">Resolvido<br>
                        <input type="number" name="resolvido" id="resolvido">
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
