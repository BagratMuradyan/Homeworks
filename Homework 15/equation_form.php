<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SOLVE</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="container">
    <div class="row">
        <h2>LUCEL HETEVYAL HAVASARUM@</h2>
    </div>
    <div class="row">
        <H3>ax<sup>2</sup>+bx+c=0</H3><div class="row">
    </div>
        <form action="equation.php">
        <div class="row">

            <div class="col-xs-4">
               <div class="col-xs-1"> <p>a=</p> </div>
                <div class="col-xs-3">  <input type="text" style="width: 50px" name="a"> </div>
            </div>
            <div class="col-xs-4">
                <div class="col-xs-1"> <p>b=</p> </div>
                <div class="col-xs-3">  <input type="text" style="width: 50px" name="b"> </div>
            </div>
            <div class="col-xs-4">
                <div class="col-xs-1"> <p>c=</p> </div>
                <div class="col-xs-3">  <input type="text" style="width: 50px" name="c"> </div>
            </div>
            <button type="submit" class="btn btn-default" style="margin: 50px">Solve</button>
                </form>
        </div>

    </div>


</body>
</html>