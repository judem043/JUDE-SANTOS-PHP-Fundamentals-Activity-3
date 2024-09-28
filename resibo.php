<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resibo mo bossing</title>
</head>
<style>
p {
    font-size: 100px;
    color: #333;
    animation: asd 0.5s infinite;
    
}
.receipt-details {
    font-weight: bold;
    font-size: 70px;
    animation: asd 0.5s infinite;
}

body {
    align-items: center;
    background: url('https://j.gifs.com/Y6x9xY.gif') no-repeat center center fixed;
    background-size: cover;
}
@-webkit-keyframes glow {
        from {
             text-shadow: 0 0 10px rgb(243, 133, 7), 0 0 20px rgb(245, 4, 145), 0 0 30px #e6008e, 0 0 40px #e60073, 0 0 50px #ec07a0, 0 0 60px #e600ad, 0 0 70px #f508cd;
        }
  
        to  {
            text-shadow: 0 0 20px rgb(241, 97, 14), 0 0 30px #f73504, 0 0 40px #faa506, 0 0 50px #ff9102, 0 0 60px #ee9d08, 0 0 70px #f7b708, 0 0 80px #fd5d00;
        }
        
       }
        @keyframes asd {
        10% {
        opacity: 0.8;
        text-shadow: 0 0 10px rgba(0, 248, 236, 0.8);
       }
        100% {
        opacity: 1;
        text-shadow: 0 0 20px rgba(4, 0, 248, 0.8);
       }
        200% {
        opacity: 0.8;
        text-shadow: 0 0 10px rgba(0, 248, 236, 0.8);
       }
        300% {
        opacity: 1;
        text-shadow: 0 0 20px rgba(0, 248, 236, 0.8);
       }
        400% {
        opacity: 0.8;
        text-shadow: 0 0 10px rgba(4, 0, 248, 0.8);
       }
        500% {
        opacity: 1;
        text-shadow: 0 0 20px rgba(0, 248, 236, 0.8);
       }
        600% {
        opacity: 0.8;
        text-shadow: 0 0 10px rgba(4, 0, 248, 0.8);
       }
        700% {
        opacity: 1;
        text-shadow: 0 0 20px rgba(0, 248, 236, 0.8);
       }
        800% {
        opacity: 0.8;
        text-shadow: 0 0 10px rgba(4, 0, 248, 0.8);
       }
        900% {
        opacity: 1;
        text-shadow: 0 0 20px rgba(0, 248, 236, 0.8);
       }
        1000% {
        opacity: 0.8;
        text-shadow: 0 0 10px rgba(4, 0, 248, 0.8);
       }

    }

</style>
<body>
    <p>Resibo mo!</p>
    <div class="receipt-details">
    <?php
    $prices = array(
        "Jolly Hotdog" => 85,
        "Chiken Pastil" => 100,
        "Pork Barbeque" => 200
    );
    $order = $_POST['order'];
    $quantity = $_POST['quantity'];
    $cash = $_POST['cash'];
    $totalPrice = $prices[$order] * $quantity;
    $change = $cash - $totalPrice;
    echo "Total Price: " . $totalPrice . "<br>";
    echo "You Paid: " . $cash . "<br>";
    echo "Change: " . $change . "<br>";
    date_default_timezone_set('Asia/Manila');
    echo "Date and Time: " . date("Y-m-d h:ia");
    ?>
    </div>
</body>
</html>