<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar al carrito</title>
</head>
<style>
    body {
        background-color: rgb(11, 100, 173);
    }
    header, nav, main, footer {
        background-color: white;
    } 
    table {
        border-collapse: collapse;
        width: 100%;
    }
    th, td {
        text-align: left;
        padding: 8px;
    }
    th {
        background-color: #dddddd;
    }
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }
    footer {
        background-color: rgb(11, 100, 173);
        margin-top: 348px;
        color: black;
        max-width: 264px;
    
    }
</style>
<body>
       <header>
              <h1><?php session_start();
              $user = $_SESSION['user'];
              echo $user['name']; ?>Carrito de Compras</h1>
       </header>
       <nav>
              <ul>
                     <li>
                            <a href="shop.html">Home</a>
                     </li>
                     <li>
                            <a href="shop.html">Productos</a>
                     </li>
                     <li>
                            <a href="">Contáctanos</a>
                     </li>
                     <li>
                            <a href="cart.php">Carrito</a>
                     </li>
              </ul>
       </nav>
       <nav>
              <ul>
                     <li>
                            <a href="shop.php">Home</a>
                     </li>
                     <li>
                            <a href="shop.php">Shop</a>
                     </li>
                     <li>
                            <a href="cart.php">Cart</a>
                     </li>
              </ul>
       </nav>
    </header>
    
    <main>
       <section>
              <table>
                     <tr>
                            <th>Product Name </th>
                            <th>Quantity </th>
                            <th>Price </th>
                            <th>Total </th>
                     </tr>
                     <?php
                     $servername = "localhost";
                     $username = "root";
                     $password = "";
                     $dbname = "regClientes";

                     // Crear conexión
                     $conn = new mysqli($servername, $username, $password, $dbname);

                     // Checar conexión
                     if ($conn->connect_error) {
                            die("Connection failed: " . $conn->connect_error);
                     }

                     $total = 0;

                     // Hacer bucle a través de objetos en el carrito y mostrados en la tabla
                     foreach ($_SESSION['cart'] as $product_id => $quantity) {
                            $sql = "SELECT * FROM productos WHERE id = $product_id";
                            $result = $conn->query($sql);

                            if ($result->num_rows > 0) {
                                   $row = $result->fetch_assoc();
                                   $name = $row['nombre'];
                                   $price = $row['precio'];
                                   $item_total = $quantity * $price;
                                   $total += $item_total;

                                   echo "<tr>";
                                   echo "<td>$name</td>";
                                   echo "<td>$quantity</td>";
                                   echo "<td>$price $</td>";
                                   echo "<td>$item_total $</td>";
                                   echo "</tr>";
                            }
                     }
                     // Mostrar total
                     echo "<tr>";
                     echo "<td colspan='3'>Total:</td>";
                     echo "<td>$total $</td>";
                     echo "</tr>";
                     ?>
              </table>
              </table>
              <form action="checkout.php" method="post">
                     <input type="submit" 
                            value="Checkout" 
                            class="button" />
              </form>
       </section>
</main>
</body>
</html>