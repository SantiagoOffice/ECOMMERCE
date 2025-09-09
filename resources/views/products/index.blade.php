<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Listado de Productos</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        .header h1 {
            color: #333;
        }
        .btn-create {
            background-color: #4CAF50;
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            border-radius: 5px;
        }
        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
        }
        .product-card {
            background-color: white;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }
        .product-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
        }
        .product-card-content {
            padding: 15px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }
        .product-card-content h3 {
            margin: 0 0 10px 0;
            color: #333;
        }
        .product-card-content p {
            color: #666;
            font-size: 14px;
            line-height: 1.5;
            flex-grow: 1;
        }
        .product-card-footer {
            padding: 15px;
            border-top: 1px solid #ddd;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .product-price {
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }
        .btn-details {
            background-color: #008CBA;
            color: white;
            padding: 8px 12px;
            text-decoration: none;
            border-radius: 5px;
        }
    </style>
</head>
<body>

    <div class="header">
        <h1>Catálogo de Productos</h1>
        <a href="/products/create" class="btn-create">Crear Producto</a>
    </div>

    <div class="product-grid">
        <!-- Ejemplo de Tarjeta de Producto 1 -->
        <div class="product-card">
            <img src="https://via.placeholder.com/300x180.png/007bff/ffffff?text=Producto+1" alt="Imagen del Producto">
            <div class="product-card-content">
                <h3>Smartphone Moderno</h3>
                <p>Un smartphone de última generación con cámara de alta resolución y batería de larga duración.</p>
            </div>
            <div class="product-card-footer">
                <span class="product-price">$699.99</span>
                <a href="/products/1" class="btn-details">Ver Detalles</a>
            </div>
        </div>

        <!-- Ejemplo de Tarjeta de Producto 2 -->
        <div class="product-card">
            <img src="https://via.placeholder.com/300x180.png/28a745/ffffff?text=Producto+2" alt="Imagen del Producto">
            <div class="product-card-content">
                <h3>Laptop Ultraligera</h3>
                <p>Ideal para profesionales y estudiantes que necesitan portabilidad y rendimiento.</p>
            </div>
            <div class="product-card-footer">
                <span class="product-price">$1299.00</span>
                <a href="/products/2" class="btn-details">Ver Detalles</a>
            </div>
        </div>

        <!-- Ejemplo de Tarjeta de Producto 3 -->
        <div class="product-card">
            <img src="https://via.placeholder.com/300x180.png/ffc107/333333?text=Producto+3" alt="Imagen del Producto">
            <div class="product-card-content">
                <h3>Auriculares Inalámbricos</h3>
                <p>Sonido de alta fidelidad con cancelación de ruido para una experiencia inmersiva.</p>
            </div>
            <div class="product-card-footer">
                <span class="product-price">$199.50</span>
                <a href="/products/3" class="btn-details">Ver Detalles</a>
            </div>
        </div>

        <!-- Ejemplo de Tarjeta de Producto 4 -->
        <div class="product-card">
            <img src="https://via.placeholder.com/300x180.png/dc3545/ffffff?text=Producto+4" alt="Imagen del Producto">
            <div class="product-card-content">
                <h3>Cafetera Automática</h3>
                <p>Prepara tu café favorito con solo tocar un botón. Incluye molinillo integrado.</p>
            </div>
            <div class="product-card-footer">
                <span class="product-price">$89.99</span>
                <a href="/products/4" class="btn-details">Ver Detalles</a>
            </div>
        </div>
    </div>

</body>
</html>
