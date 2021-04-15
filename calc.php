<html>
<head><title>Calculation Result</title></head>
<body>
    <?php

        if(isset($_POST['val1'], $_POST['val2'])){
            $var1=$_POST['val1'];
            $var2=$_POST['val2'];

            if(is_numeric($var1 & $var2)){

                switch($_POST['calc']){
                    case "add":
                        echo "Calculation Result: ", $var1 + $var2;
                    break;

                    case "sub":
                        echo "Calculation Result: ", $var1 - $var2;
                    break;

                    case "mul":
                            echo "Calculation Result: ", $var1 * $var2;
                    break;

                    case "div":
                            echo "Calculation Result: ", $var1 / $var2;
                    break;
                    
                }
            }
        }
        else
        { echo "Invalid entry - please retry";}
    ?>
</body>
</html>