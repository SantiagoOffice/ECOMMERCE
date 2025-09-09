<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle del Producto</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 900px;
            margin: 20px auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: start;
        }
        .product-image img {
            width: 100%;
            height: auto;
            border-radius: 8px;
        }
        .product-details h1 {
            font-size: 28px;
            color: #333;
            margin-top: 0;
            margin-bottom: 10px;
        }
        .product-category {
            background-color: #e7f3ff;
            color: #0069d9;
            display: inline-block;
            padding: 5px 10px;
            border-radius: 15px;
            font-size: 14px;
            margin-bottom: 20px;
        }
        .product-price {
            font-size: 24px;
            font-weight: bold;
            color: #28a745;
            margin-bottom: 20px;
        }
        .product-description {
            color: #666;
            line-height: 1.6;
            margin-bottom: 20px;
        }
        .product-id {
            font-size: 12px;
            color: #999;
        }
        .back-link {
            display: inline-block;
            margin-bottom: 20px;
            color: #007bff;
            text-decoration: none;
        }
        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <a href="/products" class="back-link">← Volver al Catálogo</a>

    <div class="container">
        <div class="product-image">
            {{-- Usamos una imagen de placeholder. El ID del producto cambia el color. --}}
            <img src="https://via.placeholder.com/400x400.png/007bff/ffffff?text=Producto+{{ $id }}" alt="Imagen del Producto">
        </div>

        <div class="product-details">
            <h1>Smartphone Moderno (Ejemplo)</h1>
            
            {{-- Mostramos la categoría si existe --}}
            @if ($category)
                <div class="product-category">
                    Categoría: {{ $category }}
                </div>
            @endif

            <div class="product-price">
                $699.99
            </div>

            <p class="product-description">
                Este es un ejemplo de descripción para un producto. Aquí se detallarían las características principales, materiales, dimensiones y cualquier otra información relevante que ayude al cliente a tomar una decisión de compra.
            </p>

            <div class="product-id">
                ID del Producto: {{ $id }}
            </div>
        </div>
    </div>

</body>
</html>

