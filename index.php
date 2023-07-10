<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="HTML, CSS, PHP">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>

    <style type="text/css">
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
            background-color: #f1f1f1;
        }

        fieldset {
            border: 2px solid gray;
            border-radius: 10px;
            padding: 20px;
            background-color: white;
        }

        legend {
            font-size: 20px;
            font-weight: bold;
        }

        form {
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .input-field {
            width: 200px;
            height: 30px;
            margin-bottom: 10px;
            border: 1px solid gray;
            border-radius: 4px;
            padding: 5px;
        }

        .button {
            background-color: gray;
            color: white;
            width: 100px;
            height: 30px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .button:hover {
            background-color: darkcyan;
        }

        .conclusion {
            margin-top: 20px;
            font-size: 18px;
        }
    </style>
</head>

<body>
    <fieldset>
        <legend>Calculator</legend>
        <form action="" method="POST">
            <input class="input-field" type="number" name="number1" required>
            <input class="input-field" type="number" name="number2" required>
            <select class="input-field" name="process">
                <option value="+">Addition</option>
                <option value="-">Subtraction</option>
                <option value="*">Multiplication</option>
                <option value="/">Division</option>
                <option value="%">Modulo</option>
                <option value="^">Exponentiation</option>
            </select>
            <input class="button" type="submit" value="Calculate">

            <?php
            if ($_POST) {
                $num1 = $_POST['number1'];
                $num2 = $_POST['number2'];
                $calcu = $_POST['process'];
                $result = 0;

                switch ($calcu) {
                    case '+':
                        $result = $num1 + $num2;
                        break;
                    case '-':
                        $result = $num1 - $num2;
                        break;
                    case '*':
                        $result = $num1 * $num2;
                        break;
                    case '/':
                        $result = $num1 / $num2;
                        break;
                    case '%':
                        $result = $num1 % $num2;
                        break;
                    case '^':
                        $result = pow($num1, $num2);
                        break;
                }

                echo "<p class='conclusion'>Conclusion: $result</p>";
            }
            ?>
        </form>
    </fieldset>
</body>

</html>
