<html>
    <head>
        <meta charset = "utf-8"/>
    </head>
    <body>
        <h1>My Route Page</h1>
        <?php
    $multi_x = 2;
    ?>
    <div class= "img">
        <h1 class= "text"><pre>


ตารางสูตรคูณแม่ <?php echo $input ?></pre> </h1>
        <div class="table">

                <table >
                    <tbody>

                        <tr>
                            <td ><?php
                            for($i=1; $i <= 24; $i++){
                                print_r($input. "<br>");

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
                            <td><h1> </h1><?php
                            for($i=1 ; $i <=24 ; $i++){
                                print_r("  ". $input*$i."<br>");
                            }

                            //print_r($multi_x*$end)

                            ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
    </div>






    <style>
        table {
            width: 300px;
            height: 360px;
            scroll-snap-type: y mandatory;
            overflow-y: scroll;
            /*background-color : lightpink; */
            font-size : 0.68cm;
            font-family: 'Sarabun', sans-serif;

            margin: auto;
            display: flex;
            justify-content: center;
            /*border-radius:25px; */
            /*border : 2px solid white; */



        }
        pre {
            font-family: 'Sarabun', sans-serif;
        }
        h1 {
            text-align: center;

            font-family: 'Sarabun', sans-serif;

        }
        *{
            /*background-color : hotpink; */
            top : -5px;
            margin : 0;
            padding : 0;




        }
        td{
            /*background-color : lightpink;*/
        }
        tbody {
            /*background-color : lightpink;*/
        }
        .img {
            position: relative;
            background-image : url(https://scontent.fbkk30-1.fna.fbcdn.net/v/t39.30808-6/412826148_1730021717496036_6676043318584386499_n.jpg?_nc_cat=102&ccb=1-7&_nc_sid=3635dc&_nc_ohc=Vzc4WeFZLuMAX-K4426&_nc_ht=scontent.fbkk30-1.fna&oh=00_AfDaFkMj33Yx6XMwCSxaKRA6negzoW3YDq3-geku9bo8JQ&oe=658C38DC);
            background-position : center;
            background-size : cover;
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 40%;
            height: 100vh;
            display : grid;

            /*align-content : center;*/


        }

    </style>

        <h1> {{ $input }}  </h1>



    </body>

</html>
