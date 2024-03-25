<html>
    <head>
        <meta charset = "utf-8"/>
    </head>
    <body>


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
                            ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
    </div>






    <style>
        .img {
            width: 400px;
            height: 500px;
            position: absolute;
            top: 30%;
            left: 40%;
            margin-top: -100px;
            margin-left: -100px;

            background-color: transparent;
            box-shadow: 0 0 10px rgba(26, 26, 26, 0.493);

            border-radius: 25px;
            backdrop-filter: blur(10px);
            border-style:  outset;


        }
        .img .table table{
            width: 300px;
            height: 360px;
            scroll-snap-type: y mandatory;
            overflow-y: scroll;
            /*background-color : lightpink; */
            font-size : 0.65cm;
            font-family: 'Sarabun', sans-serif;

            margin: auto;
            display: flex;
            justify-content: center;
            /*border-radius:25px; */
            /*border : 2px solid white; */
            margin-top: 90px;
            margin-left: 50px;



        }
        .img pre {
            position: absolute;
            top: 14%;
            left: 50%;
            margin-top: -120px;
            margin-left: -140px;
            text-align: center;
            font-family: 'Sarabun', sans-serif;

        }

        body {

            background-image: url('https://scontent.fbkk30-1.fna.fbcdn.net/v/t39.30808-6/417112087_1738840879947453_2965509460721317857_n.jpg?_nc_cat=109&ccb=1-7&_nc_sid=3635dc&_nc_eui2=AeEUJLUl_GZgo72Hsrk_NwtQFHbry6ve7XQUduvLq97tdL5xnZGrR3HsrsHL-_2cT2HpFcNZA94rIsVk00nffjOH&_nc_ohc=zVXnpos-gtsAX_ow2rn&_nc_ht=scontent.fbkk30-1.fna&oh=00_AfCJlVE1vWgiDKgGIiBuw395ij0ychVsVQi6RoB2b4mYNg&oe=659EA2A9');
            background-size: cover;
            background-position: center;
        }

    </style>
    </body>

</html>
