<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear Foto</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
    <h1>Agregar Nueva Foto</h1>
    <form method="POST" action="{{ route('photos.store') }}">
        @csrf
        <div>
            <label for="title">Título:</label>
            <input type="text" id="title" name="title" placeholder="Título" required>
        </div>
        <div>
            <label for="url">URL de la imagen:</label>
            <input type="text" id="url" name="url" placeholder="URL de la imagen" required>
        </div>
        <div>
            <label>Etiquetas:</label>
            @foreach($tags as $tag)
                <div>
                    <input type="checkbox" id="tag{{ $tag->id }}" name="tags[]" value="{{ $tag->id }}">
                    <label for="tag{{ $tag->id }}">{{ $tag->name }}</label>
                </div>
            @endforeach
        </div>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>