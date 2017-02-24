<?php 
  require("/require/sql_connect.php");
?>

<!DOCTYPE html>

<html>

<head>
  <title>Inventory Management System</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
  <link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>

<body id="top">

<!-- start of background image layer-->
<div class="wrapper bgded overlay" style="background-image:url('images/demo/backgrounds/01.png')">
  <!-- start of wrapper row 0-->
  <?php
  //$query = "SELECT * FROM employee WHERE emp_id = '".$_POST['empId']."'";
  $query = "SELECT * FROM employee WHERE emp_id = 17020001";
  $result = mysqli_query($mysqli,$query);

  echo '<div class="wrapper row0">';
    //<!-- start of topbar -->
    echo '<div id="topbar" class="hoc clear">';
            //<!-- employee name etc -->
      echo '<div class="fl_left">';
        echo '<ul class="nospace inline pushright">';
          if($result && mysqli_num_rows($result) > 0){ //employee exist. pwede ra ni tangtangon
          $emp = mysqli_fetch_row($result);
          echo '<li><i class="fa fa-user"></i>'.$emp[1].', '.$emp[2].' '.$emp[3].'.</li>';
          echo '<li><i class="fa fa-envelope-o"></i> info@domain.com</li>';
          }//pwede ra ni tangtangon
        echo '</ul>';
      echo '</div>';
    //<!-- employee name etc -->
    echo '</div>';
  //<!-- end of topbar -->
  echo '</div>';
  ?>
  <!-- end of wrapper 0 -->
  <!--start of wrapper row 1-->
  <div class="wrapper row1">
    <!--#header hoc clear class-->
    <header id="header" class="hoc clear">
      <!---#####-->
      <div id="logo" class="fl_left" >
       <h1><a href="index.html">WT CONSTRUCTION, INC.</a></h1>
      </div>
      <!-- ################################################################################################ -->
      <!--navigation bar-->
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="index.html">Home</a></li>
          <li><a class="drop" href="#">Add Items</a>
          <ul>
            <li><a href="pages/updateitems.html#tab-1">New Inventory Item</a></li>
            <li><a href="pages/updateitems.html#tab-2">New Supplier</a></li>
            <li><a href="pages/updateitems.html#tab-3">New Project</a></li>
          </ul>
          </li>
          <li><a class="drop" href="#">Pending Items</a>
          <ul>
            <li><a href="pages/pending.html#tab-1">Requisition Requests</a></li>
            <li><a href="pages/pending.html#tab-2">Purchase Orders</a></li>
            <li><a href="pages/pending.html#tab-3">Withdrawal Requests</a></li>
            <li><a href="pages/pending.html#tab-4">Check Status of Returned Tools</a></li>
          </ul>
        </li>
        <li><a href="#">Dashboard</a></li> <!-- view projects and ongoing costs -->
        </ul>
      </nav>
    <!-- end of navigation bar -->
    <!-- ################################################################################################ -->
    </header>
    <!--end of #header hoc clear class-->
  </div>
  <!--end of wrapper row 1-->


  <div id="pageintro" class="hoc clear">
    <!-- ################################################################################################ -->
    <article class="introtxt">
      <h2 class="heading underline center"><i class="bt bt-5x bt-wrench60"></i><br></h2>
      <h2 class="font-x3">Inventory Management System</h2>
      <!--<p>Inventory Management System</p>-->
     <!-- <footer><a class="btn" href="#">Bibendum placerat</a></footer> -->
    </article>
    <!-- ################################################################################################ -->

    <!-- (three squares) #pageintro || .hoc clear-->
    <ul class="nospace clear">
      <li onclick="location.href ='pages/invitems.php';">
        <article><i class="bt bt-3x bt-architecture1"></i>
          <h4 class="heading underline"><a href="pages/invitems.php">Inventory Items</a></h4>
          <p>See details and inventory levels of all items.</p>
        </article>
      </li>
      <li onclick="location.href ='#';">
        <article><i class="bt bt-3x bt-exclamation19"></i>
          <h4 class="heading underline"><a href="#">Dashboard</a></h4>
          <p>See dashboard.</p>
        </article>
      </li>
      <li onclick="location.href ='pages/pending.html';">
        <article><i class="bt bt-3x bt-constructor2"></i>
          <h4 class="heading underline"><a href="pages/pending.html">Pending Items</a></h4>
          <p>Approve or deny Requisiton, Purchase Order, Return requests.</p>
        </article>
      </li>
    </ul>
    <!-- end of(three squares) #pageintro || .hoc clear-->
  </div>
  <!--   <div class="clear">huehuheuu</div> -->
</div>
<!-- end of background image layer-->

<!-- start of row 4 email//anouncement field etc -->
<div class="wrapper row4 bgded" style="background-image:url('images/demo/backgrounds/03.png')">
  <footer id="footer" class="hoc topspace-0 clear">

    <div class="clear"><br><br></div>
    <div class="group">
      <div class="one_third first">
        <h6 class="title">Low in Stock!</h6>
        <ul class="nospace linklist">
          <li><a href="#">Itenname One</a></li>
          <li><a href="#">Itemname Two</a></li>
          <li><a href="#">Itemname Three</a></li>
          <li><a href="#">Itemname Four</a></li>
        </ul>
      </div>
      <div class="one_third">
        <h6 class="title">Announcements</h6>
        <article>
          <h2 class="nospace font-x1"><a href="#">Lorem ipsum</a></h2>
          <time class="font-xs" datetime="2045-04-06">Friday, 6<sup>th</sup> April 2045</time>
          <p>dolor sit amet, consectetur adipiscing elit. Donec tristique sodales mi eu venenatis.</p>
        </article>
      </div>
      <div class="one_third">
        <h6 class="title">Questions?</h6>
        <address class="btmspace-15">
        Department Name
        </address>
        <ul class="nospace">
          <li class="btmspace-10"><span class="fa fa-phone"></span>(032)456-7890 ext. 5000</li>
          <li><span class="fa fa-envelope-o"></span> info@domain.com</li>
        </ul>
        <a href="#">See all contact numbers</a>
      </div>

    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- end of row 4-->

<!--copyright etc-->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear">
    <!-- ################################################################################################ -->
    <p class="fl_left">Copyright &copy; 2017 - All Rights Reserved - <a href="#">WT Construction</a></p>
    <p class="fl_right">(032)248-2248</p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- end of copyright -->

<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="layout/scripts/jquery.min.js"></script>
<script src="layout/scripts/jquery-ui.min.js"></script>
<script src="layout/scripts/jquery.backtotop.js"></script>
<script src="layout/scripts/jquery.mobilemenu.js"></script>
<!-- IE9 Placeholder Support -->
<script src="layout/scripts/jquery.placeholder.min.js"></script>
<!-- / IE9 Placeholder Support -->
</body>
</html>