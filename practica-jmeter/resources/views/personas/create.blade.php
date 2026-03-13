<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registrar Persona</title>
</head>
<body>
    <h1>Registrar Persona</h1>
    <form action="/personas" method="POST">
        @csrf
        <input type="text"  name="nombre"    placeholder="Nombre"    required><br>
        <input type="text"  name="apellidos" placeholder="Apellidos" required><br>
        <input type="email" name="correo"    placeholder="Correo"    required><br>
        <select name="sexo" required>
            <option value="M">Masculino</option>
            <option value="F">Femenino</option>
        </select><br>
        <button type="submit">Registrar</button>
    </form>
</body>
</html>