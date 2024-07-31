<?php
    $_COOKIE_name1-="num";
    $_COOKIE_value1= "";
    $_COOKIE_name2-= "op";
    $_COOKIE_value2="";

    if (isset($_POST['num1'])) 
    {
        $num-$_POST['input'].$_POST['num'];
    }
    else{
        $num="";
    }

    if (isset($_POST["op"])){
        $_COOKIE_value1=$_POST['input'];
        setcookie($_COOKIE_name1, $_COOKIE_value1,time()+ (86400*30),"/");

        $_COOKIE_value2=$_POST['op'];
        setcookie($_COOKIE_name2, $_COOKIE_value2,time()+(86400*30),'/');
        $num="";
    }

    if (isset($_POST['equal'])){
        $num=$_POST['input']; 
        switch($_COOKIE['op'])
        {
            case '+':
                $result=$_cookie['num']+$num;
                break;
                case '-':
                    $result=$_cookie['num']-$num;
                    break;
                    case '*':
                        $result=$_cookie['num']*$num;
                        break;
                        case '/':
                            $result=$_cookie['num']/$num;
                            break;
        }
        $num-$result;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="style.css">
    
</head>
<body>
    <div class="calc">
        <form action="" method="post"><br>
            <input type="text" class="maininput" name="input" value="<?php echo @$num ?>"><br> <br>
            <input type="submit" class="munbtn" name="num"value="7">
            <input type="submit" class="munbtn" name="num"value="8">
            <input type="submit" class="munbtn" name="num"value="9">
            <input type="submit" class="calbtn" name="op"value="+"><br><br>
            <input type="submit" class="munbtn" name="num"value="4"> 
            <input type="submit" class="munbtn" name="num"value="5">
            <input type="submit" class="munbtn" name="num"value="6">
            <input type="submit" class="calbtn" name="op"value="-"><br><br>
            <input type="submit" class="munbtn" name="num"value="1">
            <input type="submit" class="munbtn" name="num"value="2">
            <input type="submit" class="munbtn" name="num"value="3">
            <input type="submit" class="calbtn" name="op"value="X"><br><br>
            <input type="submit" class="c" name="num"value="C">
            <input type="submit" class="munbtn" name="num"value="0">
            <input type="submit" class="equal" name="equal"value="=">
            <input type="submit" class="calbtn" name="op"value="/">
        </form>
    </div>
</body>
</html>