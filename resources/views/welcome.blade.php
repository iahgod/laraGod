<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Header</h1>
    <hr>
    <h3>Corpo</h3>
    <div class="section" style="border: 1px solid #ccc">
        @foreach($users as $user)
            <p>{!! $user !!} -
                @component('components.botao') @slot('cor') red @endslot RED @endcomponent
                @component('components.botao') @slot('cor') blue @endslot BLUE @endcomponent
            </p>
        @endforeach
    </div>
    <hr>
    <h1>Footer</h1>
</body>
</html>
