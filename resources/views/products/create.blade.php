
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nuevo Producto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 15px;
        }
        .form-group label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }
        .form-group input,
        .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-sizing: border-box; /* Para que el padding no afecte el ancho total */
        }
        .form-group textarea {
            resize: vertical;
            min-height: 100px;
        }
        .form-group input[type="file"] {
            padding: 3px;
        }
        .btn-submit {
            display: block;
            width: 100%;
            padding: 12px;
            background-color: #28a745;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            text-align: center;
        }
        .btn-submit:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>

    <div class="container">
    <h1>Añadir Nuevo Producto</h1>
    <form action="/products" method="POST" enctype="multipart/form-data">
        
        <div class="form-group">
            <label for="nombre">Nombre del Producto</label>
            <input type="text" id="nombre" name="nombre" required>
        </div>

        <div class="form-group">
            <label for="precio">Precio</label>
            <input type="number" id="precio" name="precio" step="0.01" required>
        </div>

        <div class="form-group">
            <label for="marca">Marca</label>
            <input type="text" id="marca" name="marca">
        </div>

        {{-- CAMPO AÑADIDO --}}
        <div class="form-group">
            <label for="categoria">Categoría</label>
            <select id="categoria" name="categoria">
                <option value="tecnologia">Tecnología</option>
                <option value="hogar">Hogar</option>
                <option value="deportes">Deportes</option>
                <option value="ropa">Ropa</option>
                <option value="libros">Libros</option>
            </select>
        </div>

        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <textarea id="descripcion" name="descripcion" required></textarea>
        </div>

        <div class="form-group">
            <label for="imagen">Imagen del Producto</label>
            <input type="file" id="imagen" name="imagen" accept="image/*">
        </div>

        <button type="submit" class="btn-submit">Guardar Producto</button>
    </form>
    </div>


</body>
</html>
