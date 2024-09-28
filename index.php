<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Fundamentals Activity # 3</title>
    <style>
        table {
            width: 50%;
            height: 180px;
            font-size: 20px;
            
        }
        th, td {
            padding: 20px;
            border-radius: 1px;
            box-shadow: inset 0vw 0vw 0vw .1vw #d422cc, 0vw 0vw 1.5vw 0vw #ff04de, 0vw 0vw 1.5vw 0vw #d422cc;
        }
        p {
            padding: 5px;
            box-shadow: inset 0vw 0vw 0vw .1vw #d422cc, 0vw 0vw 1.5vw 0vw #ff04de, 0vw 0vw 1.5vw 0vw #d422cc;
        }
        h1 {
            font-size: 25px;
            color: #336bff;
            text-align: left;
            animation: glow 1s ease-in-out infinite alternate;
        }
        body {
            background: url('https://j.gifs.com/Y6x9xY.gif') no-repeat center center fixed;
            background-size: cover;
        }

    
    </style>
</head>
<body>
    <h1>Menu</h1>
    <table>
        <tr>
            <th>order</th>
            <th>amount</th>
        </tr>
        <tr>
            <td>Jolly Hotdog</td>
            <td>85</td>
        </tr>
        <tr>
            <td>Chiken Pastil</td>
            <td>100</td>
        </tr>
        <tr>
            <td>Pork Barbeque</td>
            <td>200</td>
        </tr>
    </table>
    <form action="resibo.php" method="POST">
    <p>Select an order:
        <select name="order">
            <option value="Jolly Hotdog">Jolly Hotdog</option>
            <option value="Fries">Chiken Pastil</option>
            <option value="Steak">Pork Barbeque</option>
        </select>
    </p>
        <p>Quantity: <input type="number" name="quantity"></p>
        <p>Cash: <input type="number" name="cash"></p>
        <input type="submit" value="Submit">
    </form>
</body>
</html>