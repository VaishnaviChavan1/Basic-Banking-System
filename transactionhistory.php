<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Transaction History</title>

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;400;700;900&family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <link rel="stylesheet" type="text/css" href="css/table.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

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

  <body>
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

  <br><br><br>



      <div class="row text-center">
        <div class="col-md-3"></div>
              <div class="col-md-6">
                <div class="a1">
                  <div div class="card" style="background-color: rgba(128, 128, 128,0.5);">
                    <div class="card-body">
                      <h2 class="text-center pt-4 my-5" style="color : black;">Transaction History</h2>

                     <br>
                     <div class="table-responsive-sm">
                  <table class="table table-hover table-striped table-condensed table-bordered">
                      <thead style="color : black;">
                          <tr>
                              <th class="text-center">S.No.</th>
                              <th class="text-center">Sender</th>
                              <th class="text-center">Receiver</th>
                              <th class="text-center">Amount</th>
                              <th class="text-center">Date & Time</th>
                          </tr>
                      </thead>
                      <tbody>
                      <?php

                          include 'config.php';

                          $sql ="select * from transaction";

                          $query =mysqli_query($conn, $sql);

                          while($rows = mysqli_fetch_assoc($query))
                          {
                      ?>

                          <tr style="color : black;">
                          <td class="py-2"><?php echo $rows['sno']; ?></td>
                          <td class="py-2"><?php echo $rows['sender']; ?></td>
                          <td class="py-2"><?php echo $rows['receiver']; ?></td>
                          <td class="py-2"><?php echo $rows['balance']; ?> </td>
                          <td class="py-2"><?php echo $rows['datetime']; ?> </td>

                      <?php
                          }

                      ?>
                      </tbody>
                  </table>

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

  </body>
</html>
