<form action="calculadora.php" method="POST">
     Num1: <input type="number" name="num1">
     Operator: <input type="text" name="op">
     Num2: <input type="number" name="num2">
     <input type="submit">
</form>

<?php
     if($_SERVER['REQUEST_METHOD']=='POST') {
          $num1 = intval($_POST["num1"]);
          $num2 = intval($_POST["num2"]);
          $op = $_POST["op"];

          switch ($op) {
               case '+':
                    echo $num1 + $num2;
                    break;
               case '-':
                    echo $num1 - $num2;
                    break;
               case '*':
                    echo $num1 * $num2;
                    break;
               case '/':
                    if($num2!=0)
                         echo $num1 / $num2;
                    else echo "Error en dividir";
                    break;
               default:
                   echo "Invalid Operator";
                    
          }
     }
     
?>