<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Carousel Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
  <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
    @font-face {
    font-family: BMJUA_ttf;
    src: url('./fonts/BMJUA_ttf.ttf');
    }

    h1 {
    font-family: BMJUA_ttf;
    }
    h2 {
    font-family: BMJUA_ttf;
    }
    </style>
    <!-- Custom styles for this template -->
    <link href="carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <div class="navbar-wrapper">
      <div class="container">

        <nav class="navbar navbar-light" style="background-color: #502E294E;">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="index_new.html" style="color:#ffffff">All for one</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse"style="text-align:right;float:right;">
              <ul class="nav navbar-nav">
                <li class="active"><a href="login/login.html" style="color:#ffffff;">로그인</a></li>
                <li class="active"><a href="login/signUp.html" style="color:#ffffff;">회원가입</a></li>



              </ul>
            </div>
          </div>
        </nav>

      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="image/bg1_2.jpg" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>같이 할 동료를 찾으세요!</h1><br><br><br><br><br><br><br><br><br><br>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="image/bg2_2.jpg" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>함께일 때, 우린 강합니다.</h1><br><br><br><br><br><br><br><br><br><br>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="image/bg3_4.jpg" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>우리 지금 만나~당장 만나!!</h1><br><br><br><br><br><br><br><br><br><br>

            </div>
          </div>
        </div>
      </div>

    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
<div>
  <h2 style="text-align:center;">매칭을 도와드릴게요</h2><br>
  <center>
    <form name="mem_form" method="post" action=".">
      <input type="text" name="search" size="80px">
      <input type="submit" value="검색">
    </form>
  </center>
</div>


      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">
      <div>
      <?php
      $strTok =explode(' ' , $String);
      $str;
        if($String != null){
          $String = $_POST["search"];

          $cnt = count($strTok);
          for($i = 0 ; $i < $cnt ; $i++){
          	echo ($strTok[$i]);
            $str += "'"+ $strTok[$i]+"',";
          }
          echo "string";
        }

      $db_host = "localhost";
      $db_user = "yy9564";
      $db_passwd = "wlsgur12";
      $db_name = "yy9564";

      // MySQL - DB 접속.
      $conn = mysqli_connect($db_host,$db_user,$db_passwd,$db_name);

      // $name=(isset($_POST["userid"]) ? $_POST["userid"] : null);
      // $mode=(isset($_POST["mode"]) ? $_POST["mode"] : null);
      // //$mode=$_GET["mode"];
      // $name=(isset($_POST["name"]) ? $_POST["name"] : null);
      // $sub1=(isset($_POST["tag1"]) ? $_POST["tag1"] : null);
      // $sub2=(isset($_POST["tag2"]) ? $_POST["tag2"] : null);
      // $sub3=(isset($_POST["tag3"]) ? $_POST["tag3"] : null);
      // $sub4=(isset($_POST["tag4"]) ? $_POST["tag4"] : null);

      // if ($mode == "insert")                       	   // 데이터 입력 모드
      // {

          $sql = "insert into users_info (tag1, tag2, tag3, tag4) values";
          $sql .= "($str)";

            // '$tag1', '$tag2', '$tag3', '$tag4')";

          //$result = mysql_query($sql, $connect);
          $result = mysqli_query($connect, $sql);
      // }

      $mysqli=mysqli_connect("localhost","yy9564","wlsgur12","yy9564");

      $check="SELECT *from users_info WHERE userid='$id'";

      $signup=mysqli_query($mysqli,"INSERT INTO result_info (mode,tag1,tag2,tag3,tag4)
      VALUES ('$userid','$mode',$str)");
      if($signup){
          echo "sign up success";
      }

      ?>

    </div>
      <hr class="featurette-divider">


      <!-- /END THE FEATURETTES -->


      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="#">Back to top</a></p>
        <p>&copy; 2014 Company, Inc. &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="holder.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>
