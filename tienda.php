<!-- Pagina de GameShop by matias -->
<!-- Si tienes alguna duda puedes contactarte por los siguientes medios -->
<!-- Whatsapp: +543493405555 -->
<!-- Email: codeflowhub@outlook.com -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameShop</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Custom CSS -->
    <style>
        /* Estilos CSS */
        /* Estilo personalizado */
        .product-list {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-evenly;
            margin-top: 20px;
        }
        .product-card {
            width: 300px;
            margin-bottom: 20px;
            text-align: center;
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease-in-out;
        }
        .product-card.offer {
            border-color: #ffc107; /* Color de borde amarillo para productos en oferta */
            box-shadow: 0 0 10px rgba(255, 193, 7, 0.5); /* Sombra amarilla para productos en oferta */
        }
        .product-card:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .product-card img {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }
        .product-card p {
            font-size: 18px;
            margin-bottom: 15px;
        }
        /* Estilo para el modal */
        #productModal .modal-dialog {
            max-width: 80%;
        }
        /* Estilo para el banner */
        .banner {
            background-color: #f8f9fa;
            padding: 20px 0;
            text-align: center;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        /* Estilo para el hero */
        .hero {
            background-image: url('https://www.bing.com/th/id/OGC.77240149bb8ef7f37c2e11a873e8edb4?pid=1.7&rurl=https%3a%2f%2fmir-s3-cdn-cf.behance.net%2fproject_modules%2fmax_1200%2fcca1e136569841.5720ffd3c7679.gif&ehk=GTZULZmTuereUewKI1ny8QGcxhfe6sB%2fkCk9uQFYuKE%3d');
            background-size: cover;
            background-position: center;
            color: #fff;
            text-align: center;
            padding: 100px 0;
        }
        .hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
        }
        .hero p {
            font-size: 24px;
            margin-bottom: 40px;
        }
        .img-mo {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
        }
        /* Estilo para el botón de filtrar */
        .form-inline .form-control {
            width: auto;
        }
        /* Estilo para el carrito de compras */
        .cart-icon {
            color: #fff;
            font-size: 24px;
            margin-right: 10px;
        }
        /* Estilo para la sección de categorías */
        .category-section {
            background-color: #f8f9fa;
            padding: 20px;
            border-radius: 8px;
            margin-top: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .category-section h2 {
            margin-bottom: 20px;
        }
        .category-list {
            list-style: none;
            padding: 0;
            display: flex;
            justify-content: center;
        }
        .category-item {
            margin: 0 10px;
            font-size: 18px;
        }
        .category-item a {
            color: #333;
            text-decoration: none;
            transition: color 0.3s ease-in-out;
        }
        .category-item a:hover {
            color: #007bff;
        }
        /* Estilo para la sección de testimonios */
        .testimonial-section {
            background-color: #f8f9fa;
            padding: 40px 0;
            border-radius: 8px;
            margin-top: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .testimonial-section h2 {
            margin-bottom: 20px;
        }
        .testimonial-card {
            text-align: center;
            padding: 20px;
            border-radius: 8px;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: box-shadow 0.3s ease-in-out;
        }
        .testimonial-card:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }
        .testimonial-card p {
            font-size: 18px;
            margin-bottom: 20px;
        }
        .testimonial-card .user {
            font-weight: bold;
            color: #333;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">GameShop</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Inicio <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Ofertas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Mods</a>
                    </li>
                    <!-- Puedes agregar más enlaces aquí -->
                </ul>
                <!-- Agregar un botón para filtrar por categoría -->
                <form class="form-inline">
                    <select class="form-control mr-sm-2" id="categoryFilter">
                        <option value="">Todas las categorías</option>
                        <option value="juegos">Juegos</option>
                        <option value="consolas">Consolas</option>
                        <!-- Puedes agregar más opciones aquí -->
						<!-- Adaptable -->
                    </select>
                    <button class="btn btn-outline-light my-2 my-sm-0" type="button">Filtrar</button>
                    <!-- Icono de carrito de compras -->
                    <a href="#" class="cart-icon"><i class="fas fa-shopping-cart"></i></a>
                </form>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <div class="hero">
        <div class="container">
            <h1>Bienvenido a nuestra GameShop</h1>
            <p>Encuentra los mejores juegos al mejor precio.</p>
        </div>
    </div>

    <!-- Banner -->
    <div class="banner">
        <h2>¡Grandes ofertas te esperan!</h2>
    </div>

    <!-- Contenido principal -->
    <div class="container">
        <div class="product-list">
            <?php
// Incluir archivo de conexión a la base de datos
include 'conectar.php';

// Consulta SQL para obtener los productos
$sql = "SELECT * FROM productos";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Mostrar datos de cada producto
    while($row = $result->fetch_assoc()) {
        $isOffer = $row['offert'] ? 'offer' : ''; // Verificar si el producto está en oferta
        echo "<div class='product-card $isOffer'>";
        echo "<img src='" . $row['imagen'] . "' alt='" . $row['nombre'] . "'>";
        echo "<br>";
        echo "<b>" . $row['nombre'] . "</b>";
        echo "<p>$" . $row['precio'] . " ars</p>";
        echo "<p>Categoría: " . $row['categoria'] . "</p>"; // Agregado: Mostrar categoría
        if ($row['offert']) {
            echo "<p>En oferta</p>"; // Mostrar solo si el producto está en oferta
        }
        echo "<button class='btn btn-primary' data-toggle='modal' data-target='#productModal" . $row['id'] . "'>Comprar</button>";
        echo "</div>";

        // Modal para información detallada del producto
        echo "<div class='modal fade' id='productModal" . $row['id'] . "' tabindex='-1' role='dialog' aria-labelledby='productModalLabel" . $row['id'] . "' aria-hidden='true'>";
        echo "<div class='modal-dialog' role='document'>";
        echo "<div class='modal-content'>";
        echo "<div class='modal-header'>";
        echo "<h5 class='modal-title' id='productModalLabel" . $row['id'] . "'>" . $row['nombre'] . "</h5>";
        echo "<button type='button' class='close' data-dismiss='modal' aria-label='Close'>";
        echo "<span aria-hidden='true'>&times;</span>";
        echo "</button>";
        echo "</div>";
        echo "<div class='modal-body'>";
        echo "<img class='img-mo' src='" . $row['imagen'] . "' alt='" . $row['nombre'] . "'>";
        echo "<p><b>Precio:</b> $" . $row['precio'] . " ars</p>";
        echo "<p><b>Categoría:</b> " . $row['categoria'] . "</p>";
        if ($row['offert']) {
            echo "<p>En oferta</p>"; // Mostrar solo si el producto está en oferta
        }
        echo "</div>";
        echo "<div class='modal-footer'>";
        echo "<button type='button' class='btn btn-secondary' data-dismiss='modal'>Cerrar</button>";
        echo "<button type='button' class='btn btn-primary'>Ver más</button>"; // Agregar acción para "Ver más"
        echo "</div>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    }
} else {
    echo "No se encontraron productos";
}

// Cerrar conexión
$conn->close();
?>

        </div>
    </div>

    <!-- Bootstrap JS y dependencias -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
