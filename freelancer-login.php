<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
               <!--NAVIGATION-->
               <?php include_once('navbar.php') ?>
          <!--END OF NAVIGATION-->
        <div class="container">
                <br> <br>
                <div class="row">
                  <div class="col">
          
                  </div>
                  <div class="col-9" style="text-align: center;">
                        <div class="card">
                                <div class="card-body">
                                  <h5 class="card-title">Freelancer should log in here</h5>
                                 
                                  <form>
                                        <div class="form-group">
                                          <label for="exampleInputEmail1">Email address</label>
                                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                                          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                                        </div>
                                        <div class="form-group">
                                          <label for="exampleInputPassword1">Password</label>
                                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                                        </div>
                                        <div class="form-check">
                                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                          <label class="form-check-label" for="exampleCheck1">Remember me</label>
                                        </div>
                                        <button type="submit" href="admin/index.php" class="btn btn-primary">Submit</button>
                                      </form>
                                  
                                </div>
                              </div>
                  </div>
                  <div class="col">
                  
                  </div>
                </div>

                <br> <br> <br> <br> <br> <br>
           <!--FOOTER-->
           <?php include_once('footer.php') ?>
        <!--END OF FOOTER-->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>