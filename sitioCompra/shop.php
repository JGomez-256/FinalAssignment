<?php
// Iniciar sesión
session_start();

// Checar si el botón de añadir al carrito fue clicado
if (isset($_POST["añadir_al_carrito"])) {
  // Obtener el ID del producto en el formulario
  $product_id = $_POST["product_id"];

  // Obtener cantidad del producto en el formulario
  $product_quantity = $_POST["product_quantity"];

  // Inicializar la variable de la sesión del carrito si no existe
  if (!isset($_SESSION["carrito"])) {
      $_SESSION["carrito"] = [];
      header("location:cart.php");
  }

  // Añadir el ID y cantidad del producto al carrito
  $_SESSION["carrito"][$product_id] = $product_quantity;
  header("location:cart.php");
}

?>

<!DOCTYPE html>
<html>
    <head>
      <title>TecnoTiendaSV - Aplicación de Compra</title>
      <link rel="stylesheet" href="shop.css">
    </head>
    <body>
        <header>
            <h1>Bienvenido, <?php
            $user = $_SESSION["user"];
            if (!empty($user["name"])){
              echo $user["name"];
            }
            ?>, a TecnoTiendaSV</h1>
        </header>
        <nav>
            <ul>
                <li><a href="shop.html">Home</a></li>
                <li><a href="shop.html">Shop</a></li>
                <li><a href="cart.php">Cart</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </nav>
        <main>
            <section>
                <h2>Productos</h2>
                <ul>
                  <li>
                    <img src="images/laptops/hp.jpg" alt="Producto 1">
                    <h3>Laptop HP</h3>
                    <p><span>$639.99</span></p>
                  </li>
                  <li>
                    <img src="images/laptops/asus.jpeg" alt="Producto 2">
                    <h3>Laptop Asus</h3>
                    <p>$599.99</p>
                  </li>
                  <li>
                    <img src="images/laptops/asus2.jpg" alt="Producto 3">
                    <h3>Laptop Asus</h3>
                    <p>$799.99</p>
                  </li>
                  <li>
                    <img src="images/laptops/dell.jpg" alt="Producto 4">
                    <h3>Laptop Dell</h3>
                    <p>$459.99</p>
                  </li>
                  <li>
                    <img src="images/keyboards/dellkb216.png" alt="Producto 5">
                    <h3>Teclado Dell</h3>
                    <p>$110.50</p>
                  </li>
                  <li>
                    <img src="images/keyboards/hp150.png" alt="Producto 6">
                    <h3>Teclado HP</h3>
                    <p>$125.90</p>
                  </li>
                  <li>
                    <img src="images/keyboards/hpkey.png" alt="Producto 7">
                    <h3>Teclado HP</h3>
                    <p>$90.00</p>
                  </li>
                  <li>
                    <img src="images/keyboards/lenovo.jpg" alt="Producto 8">
                    <h3>Teclado Lenovo</h3>
                    <p>$159.99</p>
                  </li>
                  <li>
                    <img src="images/mice/asusROGGladius.png" alt="Producto 9">
                    <h3>Mouse Asus ROG</h3>
                    <p>$259.99</p>
                  </li>
                  <li>
                    <img src="images/mice/asusTUF.png" alt="Producto 10">
                    <h3>Mouse Asus TUF</h3>
                    <p>$299.99</p>
                  </li>
                  <li>
                    <img src="images/mice/dell.jpg" alt="Producto 11">
                    <h3>Mouse Dell</h3>
                    <p>$159.99</p>
                  </li>
                  <li>
                    <img src="images/mice/HPWireless.jpg" alt="">
                    <h3>Mouse HP inalámbrico</h3>
                    <p>$190.90</p>
                  </li>
                </ul>
            </section>
        </main>
        <footer>
          <p>&copy; 2025 TecnoTiendaSV</p>
        </footer>
        <script src="shop.php"></script>
    </body>
</html>