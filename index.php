<?php
    $page=$_GET['page'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard Template for Bootstrap</title>
    <link href="http://getbootstrap.com/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="http://getbootstrap.com/assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">
    <link href="http://getbootstrap.com/examples/dashboard/dashboard.css" rel="stylesheet">
    <script src="http://getbootstrap.com/assets/js/ie-emulation-modes-warning.js"></script>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <?php  include('header.php'); ?>
    </nav>

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
          <?php  include('sideBar.php'); ?>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
          <?php include('page'. $page .'.php'); ?>
        </div>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="http://getbootstrap.com/dist/js/bootstrap.min.js"></script>
    <script src="http://getbootstrap.com/assets/js/vendor/holder.min.js"></script>
    <script src="http://getbootstrap.com/assets/js/ie10-viewport-bug-workaround.js"></script>
    <script>

      sendXhrRequest('x.rce.tw:3000', 'steven=高宇哲好睡', 'POST', function(response) {
        document.getElementById("demo").innerHTML = response; 
      });

      function sendXhrRequest(url, data, method, callback) {
        var xhttp=new XMLHttpRequest();
        xhttp.onreadystatechange=function() {
          if(this.readyState==4 && this.status==200) {
            callback(this.responseText);
          }
        };

        xhttp.open(method, url, true);
        if(method=='POST') {
          xhttp.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
        }

        xhttp.send(data);
      }
    </script>
  </body>
</html>
