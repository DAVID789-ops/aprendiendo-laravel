<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Alegre</title>
</head>
<body>
    <h1>Crear Alegre</h1>
    <form action="{{ route('alegre.store') }}" method="POST">
        @csrf
        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" required>
        <br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required>
        <br>
        <button type="submit">Guardar</button>
    </form>
</body>
</html>
