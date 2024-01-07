<html>
    <head>
        <meta charset = "utf-8"/>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>
    <body>
        <div class="background">
            <h1>{{$var_a }} </h1>
            <form method="post" action="/my-route">
            @csrf
                <input type="text" name="input" id = "input" />
                <i class='bx bxs-calculator'></i>
                <button type="submit">Submit</button>
            </form>



        </div>
        <style>
            body {

                background-image: url('https://scontent.fbkk30-1.fna.fbcdn.net/v/t39.30808-6/415975462_1738817363283138_858583072194303053_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=3635dc&_nc_eui2=AeF_cxQQz7mdCqgi2DlyouwkFXPb-XMkWTUVc9v5cyRZNTFwvSVYQ7wmRXy-PaMdCJ1fwiX7l-fMCks1X_VrQaPq&_nc_ohc=HN-N3h5cQhsAX8_9vDf&_nc_ht=scontent.fbkk30-1.fna&oh=00_AfCD_sxbGLe2R0mum7D5xC4qyNaooWrhmicAmkScTLGqbA&oe=659F52FC');
                background-size: cover;
                background-position: center;
            }
            .background {
                width: 400px;
                height: 300px;
                position: absolute;
                top: 40%;
                left: 40%;
                margin-top: -100px;
                margin-left: -100px;
                background-color: transparent;
                box-shadow: 0 0 10px rgba(26, 26, 26, 0.493);


                border-radius: 25px;
                backdrop-filter: blur(20px);
                border-style:  outset;

            }
            .background h1 {
                position: absolute;
                top: 40%;
                left: 50%;
                margin-top: -50px;
                margin-left: -140px;
            }
            .background form {
                position: absolute;
                top: 45%;
                left: 50%;
                margin-top: 10px;
                margin-left: -105px;

            }
            .background input{
                height: 30px;
                width: 200px;
                border: none;
                border: 2px solid gray;
                border-radius: 40px;
                text-align: center;



            }
            .background button {
                position: absolute;
                top: 50%;
                left: 50%;
                margin-top: 30px;
                margin-left: -110px;
                height: 30px;
                width: 200px;

                border: none;
                border: 2px solid gray;
                border-radius: 100px;
                background-color: wheat;

            }

        </style>
    </body>

</html>
