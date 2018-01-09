<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Calculator</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=1">
    <link rel="stylesheet" href="./view/css/style.css">
</head>
<body>
    <div class="calculator">
        <div class="container">
            <h2>CALCULATOR</h2>
            <form action="./model/calculator.php" method="post">
                <input type="text" placeholder="First value" name="value1" required>
                <input type="text" placeholder="Second value" name="value2" required>
                <div class="actions">
                    <button type="submit" name="action" value="plus">+</button>
                    <button type="submit" name="action" value="minus">-</button>
                    <button type="submit" name="action" value="divide">/</button>
                    <button type="submit" name="action" value="multiply">*</button>
                    <button type="reset" name="reset" value="clear form">clear form</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>
