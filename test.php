<html>
    <head>
        <meta charset = "utf-8" >
    </head>
    <body>
        <h1><?php echo "hello world<br><br>"?></h1>
        <?php echo "<h1> hello world<br><br></h1>" ?>
        <?php $var_a = "SE CAMP" ?>
        <?php echo $var_b = 'hello $var_a' ?>
        <br>
        <?php echo $var_c = "hello $var_a" ?>
        <br>
        <?php 
        $num = $num1 = 1;
        if($num === $num1){
            echo "true";
           //true 
        }elseif($num <> $num1){
            echo "false";
            //true
        }else{
            echo " false1";

            //false
        }
        ?>
        <br>
        <?php 
        echo $num = 2 ?>
        <br>
        <?php 
        echo $num ;
        echo "<br>";
        switch($num ){
            case 1:
                echo "1";
                break;
            default:
                echo "test";
        }

        $arry = array(1,2,3);
        $arry1 = [1,2,3];
        $arry2[] = 1;
        $arry2[] = 2;
        $arry2[] = 3; 
        $arry2[] = "Hello";
        $arry2['SE'] = "world";

        ?>
        <?php print_r($arry); ?>
        <pre><?php print_r($arry);?></pre>
        <pre><?php print_r($arry1);?></pre>
        <pre><?php print_r($arry2);?></pre>

        <?php for ($i = 0; $i < count($arry2); $i++){?>
        <h3> <?php echo $arry2[$i] ?></h3>
        <?php } ?>

        <?php foreach($arry2 as $value){ ?>
        <h3> 
            : <?php echo $value;?>
        </h3>
        <?php } ?>
        <?php 
            pre($arry);
        ?>
        <?php 
        function pre($value){
            echo "<pre>1";
            print_r($value);
            echo "</pre>";

        }?>
        
    </body>
</html>