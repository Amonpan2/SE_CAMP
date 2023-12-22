<html>

<head>
    <meta charset="utf-8">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Sarabun:wght@500;700&display=swap');
    </style>
</head>

<body>
    <?php 
    $multi_x = 2;
    ?>
    <h1>ตารางสูตรคูณแม่ <?php echo $multi_x ?></h1>
    
    <div class="table">
        <table >
            <tbody>
                
                <tr>
                    <td ><?php 
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
    </div>
    
    <style>
        table {
            width: 340px;
            height: 360px;
            overflow-y: scroll;
            background-color : lightpink; 
           
            margin: auto;
            display: flex;
            justify-content: center;
            border-radius:25px; 
            border : 2px solid white; 
            
          
            
        }
        h1 {
            text-align: center;
            font-family: 'Sarabun', sans-serif;
            
        }
        *{
            background-color : hotpink; 
            top : -5px;
            
            
        }
        td{
            background-color : lightpink;
        }
        tbody {
            background-color : lightpink;
        }
    </style>
</body>

</html>