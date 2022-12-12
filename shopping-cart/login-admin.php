<?php
    require_once('opencon.php');
        $strsql = "SELECT * FROM tbl_user";

        if($rsUser = mysqli_query($con,$strsql)){
            if(mysqli_num_rows($rsUser)>0){
                while($recUser = mysqli_fetch_array($rsUser)){
                    $username = $recUser['username'];
                    $password = $recUser['password'];
                    $name = $recUser['name'];
                }
                mysqli_free_result($rsUser);
            }
            else
                echo 'No record found!';
        }
        else
            echo 'ERROR: Could not execute your request!';
            require_once('closecon.php');

    if(isset($_POST['btnLogin'])){
        if($_POST['username'] === $username  && $_POST['password'] === $password){
            header("location:dashboard.php");
        }else{
            echo "invalid password|!";
        }
        
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/login-admin.css">
    <title>Login | crocs</title>
</head>
<body>
<div class="container">
            <div class="row mt-0">
                <div class="col-1">
                    <h1><img src="/img/crocs.png" width="180px" ></h1>
                </div>
            </div>
          <hr> 

<section class="vh-100">
  <div class="container-fluid h-custom mt-5">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-md-9 col-lg-6 col-xl-5">
        <img src="/img/Discount-rafiki.png"
          class="img-fluid" alt="Sample image">
      </div>
      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
      <form method="post">
         
          <div class="form-outline mb-1">
            <input id="username" name="username" type="text" class="form-control form-control-lg"
              placeholder="Enter Username" />
            <label class="form-label" for="form3Example3"></label>
          </div>

          <div class="form-outline mb-1">
            <input id="password" name="password" type="password" class="form-control form-control-lg"
              placeholder="Enter password" />
          </div>

          <div class="text-center text-lg-start mt-3 pt-2">
            <button  id="btnLogin" name="btnLogin" type="submit" class="btn btn-success btn-lg">Login</button>
              <a href="index.php" class="btn btn-dark col-12 border mt-1 rounded-pill">Cancel</a>
           
          </div>

        </form>
      </div>
    </div>
  </div>
  </div>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</body>
</html>