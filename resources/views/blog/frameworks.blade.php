<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Framework</title>
</head>

<body>
    <h1>Framework</h1>
    <div>
        <ul>
            @forelse ($frameworks as $framework)
            <li>{{ $framework }}</li>
            @empty
            <p>Nessun framework trovato</p>
            @endforelse
        </ul>
    </div>
    <a href="{{ route('home') }}">HomePage</a>
</body>

</html>