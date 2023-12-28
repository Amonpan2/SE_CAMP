<html>
    <head>
        <meta charset = "utf-8"/>
    </head>
    <body>
        <h1>My Folder And My Page</h1>
        <h1><?php echo $var_a . ' ' . $var_b; ?></h1>
        <h1>{{$var_a }} {{$var_b}}</h1>
        <form method="post" action="/my-route">
            @csrf
            <input type="text" name = "myinput" />
            <button type="submit">Submit</button>
        </form>
    </body>

</html>
