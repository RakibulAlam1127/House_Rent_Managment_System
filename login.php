<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registration Page</title>
    <link rel="stylesheet" href="asstes/css/bootstrap.min.css">
    <link rel="stylesheet" href="asstes/css/style.css">
</head>
<body id="main-body">
<div class="container">
    <div class="card">
        <div class="card-header">
            <h2 class="text-center">Registration Page</h2>
        </div>
        <div class="card-body">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" METHOD="post">

                <div class="form-group">
                    <label for="email">E-mail Address</label>
                    <input type="email" name="email" class="form-control" placeholder="example@example.com" autofocus>
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="******" autofocus>
                </div>


                <div class="form-group">

                    <input type="submit" name="login" class="btn btn-primary btn-block" value="Login" >
                </div>

            </form>
        </div>
    </div>
</div>
</body>
</html>