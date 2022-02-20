<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;700;900&family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">
    <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
   <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <link rel="stylesheet" type="text/css" href="css/navbar.css">
    <title>Banking System</title>
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
.a1
{
  margin-top:300px;

}
.a2
{
  margin-right: 40px;
}

.a
{
  margin-right: 40px;
}
.site-footer
{
  background-color:#26272b;
  padding:45px 0 20px;
  font-size:15px;
  line-height:24px;
  color:#737373;
}

</style>
  </head>
  <div class="container-fluid">

    <div class="row">
      <div class="col-md-12">
        <br>
          <h1 class="text-center">Bank Transaction Website</h1>
          <br>
      </div>
    </div>
  <body style="background-color : #fff;">
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


</div>
    <div class="container-fluid">

      <div class="bg-img">

          <div class="row text-center">
            <div class="col-md-3"></div>
                  <div class="col-md-6">
                    <div class="a1">
                      <div div class="card" style="background-color: rgba(128, 128, 128,0.5);">
                        <div class="card-body">

                    <img src="images/create user.jpg" class="img-responsive a2" height="200">
                    <img src="images/money transfer.png" class="img-responsive a2" height="200">
                    <img src="images/transaction history.png" class="img-responsive a2" height="200">
                    <br><br>
                    <a href="createuser.php"><button type="button" class="btn btn-dark btn-lg a2">Create a User</button></a>
                    <a href="transfermoney.php"><button type="button" class="btn btn-dark btn-lg a2">Make a Transaction</button></a>
                    <a href="transactionhistory.php"><button type="button" class="btn btn-dark btn-lg a2">Transaction History</button></a>
                  </div>
                  </div>
                  </div>

            </div>
    </div>
    </div>
    <footer class="text-center">

    </footer>


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
