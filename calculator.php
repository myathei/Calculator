<!Doctype html>
<html>
    <head></head>
    <body>
        <form action="" method="post">
            <input type="text" name="n1" placeholder ="Enter num1"/><br/><br/>
            <input type="text" name="n2" placeholder ="Enter num2"/><br/><br/>
            <input type="text" name="option" placeholder ="Enter 1 to 4 only"/><br/><br/>
            <input type="submit" name ="submit" value="calculate"/><br/><br/>
        </form>
        <?php
            if(isset($_POST['submit'])){
                $n1=$_POST['n1'];
                $n2=$_POST['n2'];
                $op=$_POST['option'];
                switch($op){
                    case 1:  $r= $n1 + $n2;
                    echo "Result is : ".$r;break;
                    case 2:  $r=$n1-$n2;
                    echo "Result is : ".$r;break;
                    case 3:  $r=$n1*$n2;
                    echo "Result is : ".$r;break;
                    case 4:  $r=$n1/$n2;
                    echo "Result is : ".$r;break;
                    default: echo "invalid option";
                }
            }
        ?>
    </body>
</html>