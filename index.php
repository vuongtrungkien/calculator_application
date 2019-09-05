<!DOCTYPE html>
<html>
<head>
    <title>CALCULATOR</title>
    <?php
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $caculation = $_POST['calculations'];
    $result = 0;
    function calculate($num1, $num2, $caculation)
    {
        global $result;
        switch ($caculation) {
            case "Addition":
                $result = $num1 + $num2;
                break;
            case "Minus":
                $result = $num1 - $num2;
                break;
            case "Division":
                try {
                    if ($num2 === 0) throw new Exception("Error");
                } catch (Exception $e) {
                    echo $e->getMessage();
                    $result = "Error ";
                    break;
                }
                $result = $num1 / $num2;
                break;
            case "multi":
                $result = $num1 * $num2;
                break;
        }
    }
    calculate($num1,$num2,$caculation);
    ?>
</head>
<body>


    <h3>SIMPLE CALCULATOR</h3>
    <form method="post">
        FirstNumber:<br><input name="num1" type="number"><br>
        <select name="calculations">
            <option>Addition</option>
            <option>Minus</option>
            <option>Division</option>
            <option>multi</option>
        </select><br>
        SecondNumber:<br><input name="num2" type="number"><br>
        <input type="submit">
    </form>


   <h3>Result</h3>
    <p>Result = <?php echo $result; ?></p>


</body>
</html>