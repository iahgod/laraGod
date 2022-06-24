@include('base/header')
<body class="animsition">
    @include('base/partial/sidebar')
    @include('base/partial/cabecalho')
    <main>
        @yield('content')
    </main>
    @include('base/partial/rodape')
</body>
@include('base/footer')
