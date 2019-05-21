<?php
session_start();
?>





<html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        $("#b1").click(function(){
            $("#box").load("tr.php");
        });
    });

    $(document).ready(function(){
        $("#b2").click(function(){
            $("#box").load("stulist.php");
        });
    });


    </script>
  <style>
  </style>
</head>


  <body>
      <!-- nav bar start-->
            <nav class="navbar navbar-expand-lg  navbar-dark bg-dark">
          <a class="navbar-brand" href="#">admin</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">


              <li class="nav-item active">
                <a class="nav-link" href="tr.php">Proctor list</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="register.html">Register</a>
              </li>

              <li class="nav-item active ">
                <a class="nav-link my-2 my-sm-0" href="logout.php" tite="Logout">Logout</a>

              </li>
            </ul>

          </div>
        </nav>
        <!-- nav bar end -->
        <div class ="container">
                <div class="row">
        					<div class="col-md-12">
                <h2 class="page-title">Dashboard</h2>
              </div>
              </div>
          </div>

          <div class ="container">
                                <div class="row">
                    <div class="col-sm-6">
                      <div class="card  border-secondary mb-3" style="width:300px">
                        <img class="card-img-top" src="aca.png" alt="Card image">
                        <div class="card-body">
                          <h5 class="card-title">ADD STUDENT ACADEMIC RECORD</h5>
                          <p class="card-text">The academic record of the student can be added here click on the  link below</p>
                          <a href="addacademic.html" class="btn btn-primary">Add Record</a>
                        </div>
                      </div>
                    </div>
                    <div class="col-sm-6  ">
                      <div class="card border-secondary mb-3"style="width:300px">
                        <img class="card-img-top" src="ach.png" alt="Card image">
                        <div class="card-body">
                          <h5 class="card-title">ADD STUDENT ACHIEVEMENT RECORD</h5>
                          <p class="card-text">The student participation in hackathons and other outside events can be updated here </p>
                          <a href="addachiv.html" class="btn btn-primary">Add Record</a>
                        </div>
                      </div>
                    </div>
                    </div>


                    <div class="row">
              <div class="col-sm-6">
                <div class="card  border-secondary mb-3"style="width:300px">
                    <img class="card-img-top" src="stu.png" alt="Card image">
                  <div class="card-body">
                    <h5 class="card-title">Student info</h5>
                    <p class="card-text">The academic and achievements information of the student can be found here</p>
                    <a href="proctorfinder.html" class="btn btn-primary">click</a>
                  </div>
                </div>
              </div>
              <div class="col-sm-6  ">
                <div class="card border-secondary mb-3" style="width:300px">
                    <img class="card-img-top" src="cour.png" alt="Card image">
                  <div class="card-body">
                    <h5 class="card-title">View Courses</h5>
                    <p class="card-text">The details of course ,credit can be seen </p>
                    <a href="coursefinder.html" class="btn btn-primary">View</a>
                  </div>
                </div>
              </div>
        </div>


              <div class="row">

        <div class="col-sm-6  ">
          <div class="card border-secondary mb-3"style="width:300px">
              <img class="card-img-top" src="parent.png" alt="Card image">
            <div class="card-body">
              <h5 class="card-title">Parent INFO</h5>
              <p class="card-text">The details of parent can be added Here </p>
              <a href="parent.html" class="btn btn-primary">Add</a>
            </div>
          </div>
        </div>
      </div>

            </div>

            <br><br>

        <div class="container">
            <?php
              if($_SESSION["name"]) {
              ?>
            <!--<h1>Welcome</h1>   -->
              <?php
              }else echo "<h1>Please login first .</h1>";
              ?>

              <div id="box" align="">

              </div>
            <!--  <button type="button" id="b1" >proctor</button>
                <button type="button" id="b2" >student</button>-->
            </div>


  </body>


  </html>
