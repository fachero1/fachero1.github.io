<?php
include 'conectar.php';

$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$descripcion = $_POST['descripcion'];
$imagen_nombre = $_FILES['imagen']['name'];
$imagen_tmp_name = $_FILES['imagen']['tmp_name'];

// Insertar el producto en la base de datos
$sql = "INSERT INTO productos (nombre, precio, descripcion, imagen) VALUES ('$nombre', '$precio', '$descripcion', '$imagen_nombre')";
if ($conn->query($sql) === TRUE) {
    // Mover la imagen cargada a una ubicación deseada si la inserción es exitosa
    $imagen_ruta = 'C:\xampp\htdocs\shop-web\uploads/' . $imagen_nombre;
    if (!move_uploaded_file($imagen_tmp_name, $imagen_ruta)) {
        die("Error al mover el archivo de imagen");
    }
	echo "<div style'display: flex; justify-content: center; justify-items: center;'>";
    echo "<b style='color: #a2d246; background: #ebf8a4; padding: 10px; border-radius: 5px; border: 1px solid #a2d246; font-family: sans-serif'>✔ Producto agregado con éxito</b>";
	echo "</div>";
} else {
    echo "Error al agregar producto: " . $conn->error;
}


$conn->close();
?>
