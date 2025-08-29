<!DOCTYPE html>
<html>

<head>
    <title>Checkout</title>
    <link rel="stylesheet" 
          type="text/css" 
          href="checkout.css">
</head>
<style>
    body {
        background-color: #ffffff;
        font-family: Arial, sans-serif;
    }
    
    header {
        background-color: rgb(11, 100, 173);
        color: #ffffff;
        padding: 20px;
    }
    
    nav ul {
        margin: 0;
        padding: 0;
        list-style: none;
    }
    
    nav li {
        display: inline-block;
        margin-right: 20px;
    }
    
    nav a {
        color: #ffffff;
        text-decoration: none;
    }
    
    nav a:hover {
        text-decoration: underline;
    }
    
    section {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
    }
    
    h1 {
        color: rgb(11, 100, 173);
        font-size: 32px;
        margin-bottom: 20px;
    }
    
    h2 {
        color: rgb(11, 100, 173);
        font-size: 24px;
        margin-bottom: 10px;
    }
    
    label {
        display: block;
        margin-bottom: 5px;
        color: #666666;
    }
    
    input[type="text"],
    input[type="email"] {
        width: 100%;
        padding: 10px;
        border: 1px solid #cccccc;
        border-radius: 5px;
        margin-bottom: 10px;
        font-size: 16px;
    }
    
    input[type="submit"] {
        background-color: rgb(11, 100, 173);
        color: #ffffff;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        font-size: 16px;
        cursor: pointer;
    }
    
    input[type="submit"]:hover {
        background-color: #5a9adaff;
    }
    
    footer {
        background-color: rgb(11, 100, 173);
        color: #ffffff;
        padding: 20px;
        text-align: center;
    }
    
</style>

<body>
    <header>
        <nav>
            <ul>
                <li>
                    <a href="shop.php">Home</a>
                </li>
                <li>
                    <a href="shop.php">Tienda</a>
                </li>
                <li>
                    <a href="cart.php">Carrito</a>
                </li>
                <li>
                    <a href="">Contáctanos</a>
                </li>
            </ul>
        </nav>
    </header>

    <section>
        <h1>Checkout</h1>
        <form action="thanks.php" method="post">
            <h2>Billing Information</h2>
            <label for="name">Nombre:</label>
            <input type="text" 
                   id="name"
                   name="name" required>

            <label for="email">Email:</label>
            <input type="email" 
                   id="email" 
                   name="email" required>

            <label for="address">Dirección:</label>
            <input type="text" 
                   id="address" 
                   name="address" required>

            <h2>Payment Information</h2>
            <label for="cardholder">Nombre del Tarjetahabiente:</label>
            <input type="text" id="cardholder" 
                   name="cardholder" required>

            <label for="cardnumber">Núm. de Tarjeta:</label>
            <input type="text" 
                   id="cardnumber" 
                   name="cardnumber" required 
                   pattern="\d{4}-?\d{4}-?\d{4}-?\d{4}" required=>


            <label for="expmonth">Mes de Vencimiento:</label>
            <input type="text" 
                   id="expmonth" 
                   name="expmonth" required>

            <label for="expyear">Año de Vencimiento:</label>
            <input type="text" 
                   id="expyear" 
                   name="expyear" required>

            <label for="cvv">CVV:</label>
            <input type="text" 
                   id="cvv"
                   name="cvv" required>

            <input type="submit" 
                   value="Place Order">
        </form>
    </section>

    <footer>
        <p>&copy; TecnoTiendaSV</p>
    </footer>
</body>

</html>