<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Languages</title>
</head>

<body>
    <h1>Linguaggi Programmazione</h1>
    <div>
        <ul>
            @forelse ($languages as $language)
            <li>{{ $language }}</li>
            @empty
            <p>Nessun linguaggio trovato</p>
            @endforelse
        </ul>
    </div>
    <a href="{{ route('home') }}">HomePage</a>
</body>

</html>