<html>
<head><title>Calculation Result</title></head>
<body>
    <?php
        # test if input is_numeric
        if(is_numeric($var1))(is_numeric($var1)){
            $var1 = ($_POST ['$result']);
            $var2 = ($_POST ['$result']);
            # test if calc is not null
            if(isset($_POST['calc']){
                echo = $_POST['calc'];
                # switch statement for value of calc
                switch($calc){
                    case "add":
                        echo $var1 + $var2 = $result;
                    break;

                    case "sub":
                        echo $var1 - $var2 = $result;
                    break;

                    case "mul":
                            echo $var1 * $var2 = $result;
                    break;

                    case "div":
                            echo $var1 / $var2 = $result;
                    break;
                    
                }
                echo "Calculation result: $result";
            }
        }
        else{ echo "Invalid entry - please retry"; }
    ?>
</body>
</html>
