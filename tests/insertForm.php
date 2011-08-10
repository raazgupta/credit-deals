<html>
    <head>
        <title>Insert Deals</title>
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" /> 
        <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    </head>
    <body>
        <?php
            $status = $_GET['status'];
            if ($status == "Success"){
                echo "<div>Success</div>";
            }
        ?>
        <form action="insert.php" method="get">
            <div><input type="submit" value="Submit"/></div>
            <div>Deal</div> 
            <div>Name: <input type="text" name="deal1name" /></div>
            <div>Address: <input type="text" name="deal1address" /></div>
            <div>Deal: <input type="text" name="deal1dealinfo" /></div>
            <div>Latitude: <input type="text" name="deal1latitude" /></div>
            <div>Longitude: <input type="text" name="deal1longitude" /></div>
        </form>   
    </body>
</html>
