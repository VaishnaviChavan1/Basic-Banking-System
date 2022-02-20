<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;700;900&family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
     <link rel="stylesheet" type="text/css" href="css/table.css">
     <link rel="stylesheet" type="text/css" href="css/createuser.css">
     <link rel="stylesheet" type="text/css" href="css/navbar.css">



    <title>Create User</title>

    <style>
    .bg-img
    {
        background-image: url("images/backimg.jpg");
        min-height: 790px;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        position: relative;
    }
    .site-footer
    {
      background-color:#26272b;
      padding:45px 0 20px;
      font-size:15px;
      line-height:24px;
      color:#737373;
    }
    .a1
    {
      margin-left: 30px;
    }

    </style>

  </head>

  <?php
    include 'config.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $sql="insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
    $result=mysqli_query($conn,$sql);
    if($result){
                echo "<script> alert('User Created!!');
                                window.location='transfermoney.php';
                      </script>";

    }
  }
?>
<body>
<div class="container-fluid">

  <div class="row">
    <div class="col-md-12">
      <br>
        <h1 class="text-center">Bank Transaction Website</h1>
        <br>
    </div>
  </div>

  <!--*********************************************menu Start*******************************************-->
          <div class="row">
              <div class="col-md-12">
                  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                          <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse" id="collapsibleNavbar" >
                          <ul class="navbar-nav">
                              <!--MENU-->
                              <li class="nav-item">
                                  <a class="nav-link" href="index.php" style="color:white;"><b>Home</b></a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="createuser.php" style="color:white;"><b>Create User</b></a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="transfermoney.php" style="color:white;"><b>Transfer Money</b></a>
                              </li>
                              <li class="nav-item">
                                  <a class="nav-link" href="transactionhistory.php" style="color:white;"><b>Transaction History</b></a>
                              </li>
                          </ul>
                      </div>

                  </nav>
              </div>
          </div>
          <!--*********************************************menu closed*******************************************-->

          <div class="container-fluid">

            <div class="bg-img">

  <br><br><br>



            <div class="row text-center">
              <div class="col-md-3"></div>
                    <div class="col-md-6">
                      <div class="a1">
                        <div div class="card" style="background-color: rgba(128, 128, 128,0.5);">
                          <div class="card-body">
                            <h1>Create a User</h1>
                              <img class="img-fluid" src="images/create user.jpg" style=" width:150px; height:150px;">
                              <div class="screen-body-item">
                                <form class="app-form" method="post">
                                  <div class="app-form-group">
                                    <label><h4><b>Name : </b></h4></label>
                                    <input class="app-form-control" placeholder="NAME" type="text" name="name" required>
                                  </div>
                                  <div class="app-form-group">
                                    <label><h4><b>Email ID : </b></h4></label>
                                    <input class="app-form-control" placeholder="EMAIL" type="email" name="email" required>
                                  </div>
                                  <div class="app-form-group">
                                    <label><h4><b>Enter Acc Balance : </b></h4></label>
                                    <input class="app-form-control" placeholder="BALANCE" type="number" name="balance" required>
                                  </div>
                                  <br>
                                  <div class="app-form-group button">
                                    <input class="app-form-button" type="submit" value="CREATE" name="submit"></input>
                                    <input class="app-form-button" type="reset" value="RESET" name="reset"></input>
                                  </div>
                                </form>
                              </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>






                </div>
                </div>
                </div>





                      <footer class="site-footer" id="footer1">
                          <div class="row">
                            <div class="col-md-12">
                              <p class="text-center text-white">  Made by <b>Vaishnavi Chavan</b> <br> GRIP.Tthe spark foundation </p>
                            </div>
                          </div>


                             </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


  </body>
</html>
