

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Book Your Ticket</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
            <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        
         <link href="css2/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css2/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css2/style.css" rel="stylesheet">

        <link rel="stylesheet" type="text/css" href="css/datepicker.css" />
        <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap-responsive.css">
</head>


<?php
    include('db_login.php');
    session_start();
    $connection = mysql_connect($db_host, $db_username, $db_password);
    if (!$connection)
    {
        die ("Could not connect to the database: <br />". mysql_error());
    }
    mysql_select_db('book');
?>
<style>
  .services-section {
  background-color: #F9F9F9;
}

.services-section hr {
  border-bottom: 2px solid #24b662;
  width: 40px;
  margin-left: 0px;
}

.services-section .services-detail {

  border-radius: 4px;
  border-bottom-right-radius: 20%;
  background-color: #ffffff;
  box-shadow: 0px 1px 2px 0px rgba(90, 91, 95, 0.15);
  transition: all 0.3s ease-in-out;
  position: relative;
  top: 0px;
  padding: 60px 40px 60px 40px;
  margin-top: 32px;
}

.services-section .services-detail:hover {
  border-bottom-right-radius: 4px;
  box-shadow: 0px 16px 22px 0px rgba(90, 91, 95, 0.3);
  top: -5px;
}

.services-section .services-detail .fa {
  font-size: 42px;
}
</style>




    <BODY>
    <nav class="navbar fixed-top navbar-toggleable-md navbar-dark" style="background: rgb(2,11,28); padding-bottom: 35px;">
    <div class="container">
        <a class="navbar-brand" href="/book/kart/front.html">
            <strong>SPI-Cinema</strong>
        </a>
        <div class="collapse navbar-collapse" id="navbarNav1">
          <ul class="nav navbar-nav navbar-right">
              <li class="nav-item">
                  <a class="nav-link" href="sign-up.html"><i class="fa fa-user-plus" aria-hidden="true"></i> Sign-Up</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="sign-in.html"><i class="fa fa-sign-in" aria-hidden="true"></i> Sign-In</a>
              </li>
          </ul>
        </div>
    </div>
   </nav>

        <br /><br /><br />
        <section id="services" class="services-section section-space-padding">
        <div class="container">
           
            <div class="span12">
            <div class="services-detail" style="padding-top:80px">
                    <center><i class="fa fa-mobile color-1"></i></center>
                    <center><h3>Book Ticket</h3></center>
                    <center><hr></center>
                     <form action="seat.php" method="POST">
                        <center>
                            <label>Date of your Movie Journey!</label>



                            <div data-date-format="yyyy-mm-dd" data-date="document.write(date())" class="input-append date myDatepicker ">
                                <input type="text" value="" name="doj" size="16" class="span2" required>
                                <span class="add-on"><i class="icon-calendar"></i></span>
                            </div>


                            <!--<input type="date" class="span2" name="doj" placeholder="YYYY-MM-DD" required/>-->
                            <br><br>
                            <button type="submit" class="btn btn-info">
                                <i class="icon-ok icon-white"></i> Submit
                            </button>
                            <button type="reset" class="btn">
                                <i class="icon-refresh icon-black"></i> Clear
                            </button>
                            <a href="cancel.php" class="btn btn-danger"><i class="icon-remove icon-white"></i> Resale Ticket </a>
                        </center>
                    </form>
                </div>
            </div>
                
            
        </div>
</section>
        <script src="http://code.jquery.com/jquery-latest.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-latest.min.js">\x3C/script>')</script>
        <script type="text/javascript" src="js/bootstrap.js"></script>
        <script type="text/javascript" src="js/bootstrap-datepicker.js"></script>
        <script>
            $('.myDatepicker').each(function() {
                var minDate = new Date();
                minDate.setHours(0);
                minDate.setMinutes(0);
                minDate.setSeconds(0,0);
                
                var $picker = $(this);
                $picker.datepicker();
                
                var pickerObject = $picker.data('datepicker');
                
                $picker.on('changeDate', function(ev){
                    if (ev.date.valueOf() < minDate.valueOf()){
                        
                        // Handle previous date
                        alert('You can not select past date.');
                        pickerObject.setValue(minDate);
                        
                        // And this for later versions (in case)
                        ev.preventDefault();
                        return false;
                    }
                });
            });                 
        </script>
        <footer class="page-footer center-on-small-only"  style="background: rgb(3,6,15); bottom: 0;padding-top: 10px">

    <!--Footer Links-->
    <div class="container-fluid">
        <div class="row">

            <!--First column-->
            <div class="col-md-3 offset-md-1">
                <p>About Us</p>
                
            </div>
            
            
            
            
            
            <!--/.First column-->

            <hr class="hidden-md-up">

            <!--Copyright-->
    <div class="col-md-4 text-center">
            <div class="container-fluid">

            © 2015 Copyright 2017 team KART</a>
</div>
        
    </div>
    <!--/.Copyright-->

           

     <div class="col-md-3 offset-md-1">
                <p>Designed by KART</p>
                
            </div>      

        
    </div>
    </div>
    <!--/.Footer Links-->

    

    <!--Social buttons-->
    
    <!--/.Social buttons-->

    

</footer>
    </BODY>
</HTML>