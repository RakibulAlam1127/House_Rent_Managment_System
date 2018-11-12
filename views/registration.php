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
                           <label for="fname">First Name</label>
                           <input type="text" name="fname" class="form-control" placeholder="Enter First Name" autofocus>
                       </div>

                       <div class="form-group">
                           <label for="lname">Last Name</label>
                           <input type="text" name="lname" class="form-control" placeholder="Enter Last Name" autofocus>
                       </div>

                       <div class="form-group">
                           <label for="email">E-mail Address</label>
                           <input type="email" name="email" class="form-control" placeholder="example@example.com" autofocus>
                       </div>

                       <div class="form-group">
                           <label for="password">Password</label>
                           <input type="password" name="password" class="form-control" placeholder="******" autofocus>
                       </div>

                       <div class="form-group">
                           <label for="image">Profile Photo</label>
                           <input type="file" name="image" class="form-control">
                       </div>

                       <div class="form-group">
                           <label for="gender">Gender</label>
                           <input type="radio" name="gender" value="male" >Male
                           <input type="radio" name="gender" value="female" >Female
                           <input type="radio" name="gender" value="other">Other
                       </div>
                       <div class="form-group">
                           <label for="contact">Contact Number</label>
                           <input type="text" name="phone_number" class="form-control" placeholder="Enter Contact Number" autofocus>
                       </div>

                       <div class="form-group">
                           <label for="contact">Address</label>
                           <textarea name="address" id="" cols="15" class="form-control" rows="5" placeholder="Write Your full Address here.."></textarea>
                       </div>

                       <div class="form-group">

                           <input type="submit" name="registration" class="btn btn-primary btn-block" value="Registration" >
                       </div>

                   </form>
               </div>
           </div>
    </div>
</body>
</html>