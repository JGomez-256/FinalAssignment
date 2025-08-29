<html>

<head>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>


<?php
   // Start the session
    session_start();

 // Retrieve the customer name from the session variable
    if (isset($_SESSION['user'])) {
        $user = $_SESSION['user'];
        $customerName = $user['name'];
    } else {
        $customerName = "Cliente";
    }

 // Display the thank you message
    echo "<h1>Gracias, $customerName!</h1>";
    echo "<p>Su orden fue recibida y llegará muy pronto.</p>";
    ?>
</html>