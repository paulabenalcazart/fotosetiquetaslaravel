<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Lista de Fotos</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1>Lista de Fotos</h1>
    <a href="{{ route('photos.create') }}">Agregar Nueva Foto</a>
    @foreach($photos as $photo)
        <div>
            <h3>{{ $photo->title }}</h3>
            <img src="{{ $photo->url }}" width="200" alt="{{ $photo->title }}">
            <p>Etiquetas:
                @foreach($photo->tags as $tag)
                    <span>{{ $tag->name }}</span>
                @endforeach
            </p>
        </div>
    @endforeach
</body>
</html>