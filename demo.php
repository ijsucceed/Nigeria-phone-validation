<?php
  include_once "phone.validate.php";
?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>Demo - PHPOUT.COM</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    </head>
    
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div id="logo">
                <a class="navbar-brand" href="https://phpout.com"><strong>PHPOUT</strong></a>
            </div>
            <div class="collapse navbar-collapse" id="myNav">
                <ul class="navbar-nav">
                    <li class="nav-item active"> 
                        <a class="nav-link">Demo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="https://phpout.com/validate-phone-number-in-nigeria-using-php-function">Post</a>
                    </li>
                    <li class="nav-item"> 
                        <a class="nav-link" href="https://github.com/">Github</a>
                    </li>
                    <li class="nav-item"> 
                        <a class="nav-link" href="https://twitter.com/iamijs">Follow</a>
                    </li>
                </ul>
            </div>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#myNav" aria-controls="myNav" aria-expanded="false" aria-label="Menu">
              <span class="navbar-toggler-icon"></span>
            </button> 
        </nav>
        
        
        
        <div class="container my-4">
           <div class="col-md-5 offset-4">
                 <h2> Nigeria Number Test</h2>
                 <?php
                      if(isset($_POST['validate'])) {
                          $phone_number = htmlspecialchars($_POST['phone_input']);
                          $valid = validate_phone($phone_number); // @return true or false
                          if($valid)
                              echo "<div class='alert alert-success alert-dismissible fade show' role='alert'><strong>Success!</strong> Valid 
                                   <button type='button' class='close' data-dismiss='alert' aria-label='close'><span aria-hidden='true'>&times;</span></button></div>";
                          else
                              echo "<div class='alert alert-danger alert-dismissible fade show' role='alert'><strong>Sorry!</strong> Invalid 
                                   <button type='button' class='close' data-dismiss='alert' aria-label='close'><span aria-hidden='true'>&times;</span></button></div>";
                          unset($_POST['validate']);
                      }
                 ?>
               <div id="form">
                 <form id="phone_demo" class="form-horizontal" method="post">
                     <div class="form-group">
                         <label for="phone_input">Ex: 080xxxxxxxxx</label>
                         <input type="text" id="phone_input" name="phone_input" placeholder="Number" class="form-control">
                         <small class="form-text text-muted">
                            This only check if the phone number is with the right format.
                         </small>
                     </div>
                     <button type="submit" name="validate" class="btn btn-success">Validate</button>
                 </form>
               </div>
           </div>
        </div>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>