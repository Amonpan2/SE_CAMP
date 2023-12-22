<html>

<head>
    <meta charset="utf-8">
</head>

<body>
    <?php 
    $multi_x = 2;
    $end = 1;
    ?>
    <h1>ตารางสูตรคูณแม่ <?php echo $multi_x ?></h1>
    <?php 
//     for($i=1; $i <= 24; $i++){
  //      print_r($i . "<br>");
//
  //   }
    
    ?>
    <table >
        <tbody>
            
            <tr>
                <td><?php 
                for($i=1; $i <= 24; $i++){
                    print_r($multi_x . "<br>");
            
                 }
                 //print_r($multi_x . "<br>");
                 ?></td>
                <td>
                <?php 
                for($i=1 ; $i <=24 ; $i++){
                    print_r(" x "."<br>");
                }
                ?>    
                
                
                </td>
                <td><?php
                for($i=1 ; $i <=24 ; $i++){
                    print_r($i ."<br>");
                }
                //print_r(1)
                ?></td>
                <td>
                <?php 
                for($i=1 ; $i <=24 ; $i++){
                    print_r(" = "."<br>");
                }
                ?>    
                
                </td>
                <td><?php 
                for($i=1 ; $i <=24 ; $i++){
                    print_r($multi_x*$i."<br>");
                }
                
                //print_r($multi_x*$end)
                
                ?></td>
            </tr>
        </tbody>
    </table>
    <style>
        table {
            width: 150px;
            height: 265px;
        }
    </style>
</body>

</html>