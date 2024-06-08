<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Calculator</title>
</head>
<body>
    <h1>PHP Calculator</h1>
    <form action="index.php" method="post">
        <input type="number" name="num1" required>
        <select name="operation">
            <option value="add">Add</option>
            <option value="subtract">Subtract</option>
            <option value="multiply">Multiply</option>
            <option value="divide">Divide</option>
            <option value="exponent">Exponent</option>
            <option value="percentage">Percentage</option>
            <option value="sqrt">Square Root</option>
            <option value="log">Logarithm</option>
        </select>
        <input type="number" name="num2" required>
        <button type="submit">Calculate</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operation = $_POST['operation'];
        
        switch ($operation) {
            case "add":
                $result = $num1 + $num2;
                break;
            case "subtract":
                $result = $num1 - $num2;
                break;
            case "multiply":
                $result = $num1 * $num2;
                break;
            case "divide":
                $result = $num1 / $num2;
                break;
            case "exponent":
                $result = pow($num1, $num2);
                break;
            case "perce ntage":
                $result = ($num1 / 100) * $num2;
                break;
            case "sqrt":
                $result = sqrt($num1);
                break;
            case "log":
                $result = log($num1, $num2);
                break;
            default:
                $result = "Invalid Operation";
        }
        echo "<h2>Result: $result</h2>";
    }
    ?>
</body>
</html>