<?php 
  require("../require/sql_connect.php");
?>

<html>
<head>
<title>Inventory Items</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">

<!-- jPList Core -->    
<link href="../layout/styles/jplist.core.min.css" rel="stylesheet" type="text/css">
<!-- Textbox Control -->      
<link href="../layout/styles/jplist.textbox-filter.min.css" rel="stylesheet" type="text/css">

<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jplist.core.min.js"></script>  
<script src="../layout/scripts/jplist.pagination-bundle.min.js"></script>
<script src="../layout/scripts/jplist.textbox-filter.min.js"></script>
</head>
<style>
#searchbar input[type=text] {
    width: 240px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px;
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

#searchbar input[type=text]:focus {
    width: 100%;
}
</style>
<body id="top">

<!-- background image layer -->
<div class="wrapper bgded overlay" style="background-image:url('../images/demo/backgrounds/01.png')">

  <div class="wrapper row0">
    <div id="topbar" class="hoc clear">
      <!-- employee name, etc -->
      <div class="fl_left">
        <ul class="nospace inline pushright">
          <li><i class="fa fa-user"></i>Employee name</li>
          <li><i class="fa fa-envelope-o"></i> info@domain.com</li>
        </ul>
      </div>
      <!-- ########### END ########### -->
    </div>
  </div>
  <!--##### END OF WRAPPER 0 ######-->

  <div class="wrapper row1">
    <!-- start of header -->
    <header id="header" class="hoc clear">
      <div id="logo" class="fl_left" >
        <h1><a href="../index.html">WT CONSTRUCTION, INC.</a></h1>
      </div>

      <!--###### navigation bar ######-->
      <nav id="mainav" class="fl_right">
          <ul class="clear">
            <li class="active"><a href="../index.html">Home</a></li>
            <li><a class="drop" href="#">Add Items</a>
            <ul>
              <li><a href="pages/updateitems.html#tab-1">New Inventory Item</a></li>
              <li><a href="pages/updateitems.html#tab-2">New Supplier</a></li>
              <li><a href="pages/updateitems.html#tab-3">New Project</a></li>
            </ul>
            </li>
            <li><a class="drop" href="#">Pending Items</a>
            <ul>
              <li><a href="#">Requisition Requests</a></li>
              <li><a href="#">Purchase Orders</a></li>
              <li><a href="#">Withdrawal Requests</a></li>
              <li><a href="#">Check Status of Returned Tools</a></li>
            </ul>
          </li>
          <li><a href="#">Dashboard</a></li> <!-- view projects and ongoing costs -->
          </ul>
      </nav>
      <!-- end of navigation bar -->
    </header>
    <!-- end of header -->
  </div>
  <!-- end of wrapper row1 -->



  <div id="pagetitle" class="hoc clear">
    <!-- ################################################################################################ -->

    <h2>Inventory Items</h2>
    <!-- ################################################################################################ -->
  </div>

  <div id="breadcrumb" class="hoc clear">
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">Inventory Items</a></li>
    </ul>
  </div>
</div>
<!-- end of background image layer -->

<!-- start of row 3 tabs etc -->
<div class="wrapper row3">
  <!-- main body -->
  <main class="hoc container clear">
    <!-- ################################################################################################ -->
    <h2 class="font-x3 underline center btmspace-80">Inventory Items</h2>
    <div class="one_third first">&nbsp;</div>
    <form id="searchbar" class="one_third">
        <input type="text" name="search" placeholder="Search Item..">
    </form>

    <div id="tabs" class="clear">
      <!-- .one_quarter boxes!-->
      <div class="one_quarter first">
        <ul>
          <li class="active"><a href="#tab-1" onclick="hideDiv('electrical')"><i class="bt-3x fa fa-bolt"></i>Electrical</a></li>
          <li class="active"><a href="#tab-2" onclick="hideDiv('plumbing')"><i class="bt bt-3x bt-pipes"></i>Plumbing</a></li>
          <li class="active"><a href="#tab-3" onclick="hideDiv('spareparts')"><i class="bt bt-3x bt-nut"></i>Spareparts</a></li>
          <li class="active"><a href="#tab-4" onclick="hideDiv('rebars')"><i class="bt bt-3x bt-worker5"></i>Rebars</a></li>
          <li class="active"><a href="#tab-5" onclick="hideDiv('tools')"><i class="bt bt-3x bt-wrench59"></i>Tools</a></li>
        </ul>
      </div>
      <!-- end of .one_quarter boxes!-->

      <!-- start of .three_quarter-->
      <div class="three_quarter">
      <?php
      $queryElec = "SELECT * FROM iteminfo WHERE classification = 'electrical'";
      $queryPlumb = "SELECT * FROM iteminfo WHERE classification = 'plumbing'";
      $querySpare = "SELECT * FROM iteminfo WHERE classification = 'spareparts'";
      $queryRebars = "SELECT * FROM iteminfo WHERE classification = 'rebars'";
      $queryTools = "SELECT * FROM iteminfo WHERE classification = 'tools'";
      
      $resultElec = mysqli_query($mysqli,$queryElec);
      $resultPlumb = mysqli_query($mysqli,$queryPlumb);
      $resultSpare = mysqli_query($mysqli,$querySpare);
      $resultRebars = mysqli_query($mysqli,$queryRebars);
      $resultTools = mysqli_query($mysqli,$queryTools);

      echo '<div id="electrical">'; //start of electrical list
        echo '<div class="list">';
        //start of tab 1 Electrical
        echo '<div id="tab-1" class="clear">';
          echo '<article>';
            echo '<h4>Electrical</h4>';
            echo '<div class="group">';
            $ctr = 1;
      while($itemElec = mysqli_fetch_array($resultElec)){
        if($ctr % 2 != 0){
        echo '<figure class="one_half first list-item"><a class="img-overlay btmspace-30" href="#"><img src="../images/demo/Switch Door Bell.png" alt=""></a>';
          echo '<figcaption>';
            echo '<div class="btmspace-30">';
            echo '<table>';
              echo '<tr>';
                echo '<th>'.$itemElec[5].'</th>';
              echo '</tr>';
              echo '<tr>';
                echo '<td>In Stock:</td>';
                echo '<td>17</td>';
              echo '</tr>';
              echo '<tr>';
                echo '<td>Item Code:</td>';
                echo '<td>000A00</td>';
              echo '</tr>';
              echo '<tr>';
                echo '<td>Classification:</td>';
                echo '<td>Electrical</td>';
              echo '</tr>';
              echo '<tr>';
                echo '<td>Size:</td>';
                echo '<td>n/a</td>';
              echo '</tr>';
              echo '<tr>';
                echo '<td>Brand:</td>';
                echo '<td>n/a</td>';
              echo '</tr>';
              echo '<tr>';
                echo '<td>Supplier:</td>';
                echo '<td>n/a</td>';
              echo '</tr>';
              echo '<tr>';
                echo '<td>Location:</td>';
                echo '<td>C1A</td>';
              echo '</tr>';
            echo '</table>';
            echo '</div>';
              echo '<footer>';
              echo '<label for="Qty">Quantity</label>';
              echo '<input type="number" name="Qty"><br>';
              echo '<a class="btn small" href="#">Request Item</a></footer>';
            echo '</figcaption>';
          echo '</figure>';
        }else{
        echo '<figure class="one_half list-item"><a class="img-overlay btmspace-30" href="#"><img src="../images/demo/Fuse Wire.png" alt=""></a>';
        echo '<figcaption>';
          echo '<div class="btmspace-30">';
          echo '<table>';
            echo '<tr>';
              echo '<th>'.$itemElec[5].'</th>';
            echo '</tr>';
            echo '<tr>';
              echo '<td>In Stock:</td>';
              echo '<td>0</td>';
            echo '</tr>';
            echo '<tr>';
              echo '<td>Item Code:</td>';
              echo '<td>002B00</td>';
            echo '</tr>';
            echo '<tr>';
              echo '<td>Classification:</td>';
              echo '<td>Electrical</td>';
            echo '</tr>';
            echo '<tr>';
              echo '<td>Size:</td>';
              echo '<td>n/a</td>';
            echo '</tr>';
            echo '<tr>';
              echo '<td>Brand:</td>';
              echo '<td>n/a</td>';
            echo '</tr>';
            echo '<tr>';
              echo '<td>Supplier:</td>';
              echo '<td>n/a</td>';
            echo '</tr>';
            echo '<tr>';
              echo '<td>Location:</td>';
              echo '<td>M1A</td>';
            echo '</tr>';
          echo '</table>';
          echo '</div>';
            echo '<footer>';
            echo '<label for="Qty">Quantity</label>';
            echo '<input type="number" name="Qty"><br>';
            echo '<a class="btn small" href="#">Request Item</a></footer>';
          echo '</figcaption>';
        echo '</figure>';
        }
    // ############################################################################################################### //
        $ctr++;
      }
          echo '</div>';
          echo '</article>';
        echo '</div>';
        // end of tab1
        echo '</div>';
        echo '
          <!-- no results found -->
          <div class="jplist-no-results">
           <p>No results found</p>
          </div>
          <!-- panel -->
          <nav class="pagination">
            <div class="jplist-panel"> 
              <!-- pagination control -->
              <div 
               class="jplist-pagination" 
               data-control-type="pagination" 
               data-control-name="paging" 
               data-control-action="paging"
               data-items-per-page="2"
               data-prev="Previous"
               data-next="Next"
               >
              </div>  
              <!-- filter by title -->
              <div class="text-filter-box">

                <input 
                  data-path=".list-item" 
                  data-button="#title-search-button"
                  type="text" 
                  value="" 
                  placeholder="Filter by Title" 
                  data-control-type="textbox" 
                  data-control-name="title-filter" 
                  data-control-action="filter"
                  data-mode="contains"
                />

                <button 
                  type="button" 
                  id="title-search-button">
                  <i class="fa fa-search"></i>
                </button>
              </div> 
            </div>
          </nav>
        ';
      echo '</div>'; //end of electrical list
        // tab 2 Plumbing
      echo '<div id="plumbing">'; //start of plumbing list
        echo '<div class="list">';
        echo '<div id="tab-2" class="clear">';
      while($item = mysqli_fetch_array($resultPlumb)){
          echo '<article>';
            echo '<h4>Plumbing</h4>';
            echo '<div class="group">';
              echo '<figure class="one_half first"><a class="img-overlay btmspace-30" href="#"><img src="#" alt=""></a>';
                echo '<figcaption>';
                  echo '<div class="btmspace-30">';
                  echo '<table class="list-item">';
                    echo '<tr>';
                      echo '<th>//</th>';
                    echo '</tr>';
                    echo '<tr>';
                      echo '<td>In Stock:</td>';
                      echo '<td>17</td>';
                    echo '</tr>';
                    echo '<tr>';
                      echo '<td>Item Code:</td>';
                      echo '<td>000A00</td>';
                    echo '</tr>';
                    echo '<tr>';
                      echo '<td>Classification:</td>';
                      echo '<td>Plumbing</td>';
                    echo '</tr>';
                    echo '<tr>';
                      echo '<td>Size:</td>';
                      echo '<td>n/a</td>';
                    echo '</tr>';
                    echo '<tr>';
                      echo '<td>Brand:</td>';
                      echo '<td>n/a</td>';
                    echo '</tr>';
                    echo '<tr>';
                      echo '<td>Supplier:</td>';
                      echo '<td>n/a</td>';
                    echo '</tr>';
                    echo '<tr>';
                      echo '<td>Location:</td>';
                      echo '<td>C1A</td>';
                    echo '</tr>';
                  echo '</table>';
                  echo '</div>';
                    echo '<footer>';
                    echo '<label for="Qty">Quantity</label>';
                    echo '<input type="number" name="Qty"><br>';
                    echo '<a class="btn small" href="#">Request Item</a></footer>';
                  echo '</figcaption>';
                echo '</figure>';
              echo '<figure class="one_half"><a class="img-overlay btmspace-30" href="#"><img src="#" alt=""></a>';
              echo '<figcaption>';
                echo '<div class="btmspace-30">';
                echo '<table class="list-item">';
                  echo '<tr>';
                    echo '<th>//</th>';
                  echo '</tr>';
                  echo '<tr>';
                    echo '<td>In Stock:</td>';
                    echo '<td>0</td>';
                  echo '</tr>';
                  echo '<tr>';
                    echo '<td>Item Code:</td>';
                    echo '<td>002B00</td>';
                  echo '</tr>';
                  echo '<tr>';
                    echo '<td>Classification:</td>';
                    echo '<td>Plumbing</td>';
                  echo '</tr>';
                  echo '<tr>';
                    echo '<td>Size:</td>';
                    echo '<td>n/a</td>';
                  echo '</tr>';
                  echo '<tr>';
                    echo '<td>Brand:</td>';
                    echo '<td>n/a</td>';
                  echo '</tr>';
                  echo '<tr>';
                    echo '<td>Supplier:</td>';
                    echo '<td>n/a</td>';
                  echo '</tr>';
                  echo '<tr>';
                    echo '<td>Location:</td>';
                    echo '<td>M1A</td>';
                  echo '</tr>';
                echo '</table>';
                echo '</div>';
                  echo '<footer>';
                  echo '<label for="Qty">Quantity</label>';
                  echo '<input type="number" name="Qty"><br>';
                  echo '<a class="btn small" href="#">Request Item</a></footer>';
                echo '</figcaption>';
              echo '</figure>';
            echo '</div>';
          echo '</article>';
          // ############################################################################################################### // 
      }
        echo '</div>';
        // tab 2

        echo '</div>';
      echo '</div>'; //end of plumbing list
        // tab 3 Spareparts
      echo '<div id="spareparts">'; //start of spareparts list
        echo '<div class="list">';
        echo '<div id="tab-3" class="clear">';
      while($item = mysqli_fetch_array($resultSpare)){
          echo '<article>';
            echo '<h4>Spareparts</h4>';
            echo '<div class="group">';
              echo '<figure class="one_half first"><a class="img-overlay btmspace-30" href="#"><img src="#" alt=""></a>';
                echo '<figcaption>';
                  echo '<div class="btmspace-30">';
                  echo '<table class="list-item">';
                    echo '<tr>';
                      echo '<th>//</th>';
                    echo '</tr>';
                    echo '<tr>';
                      echo '<td>In Stock:</td>';
                      echo '<td>17</td>';
                    echo '</tr>';
                    echo '<tr>';
                      echo '<td>Item Code:</td>';
                      echo '<td>000A00</td>';
                    echo '</tr>';
                    echo '<tr>';
                      echo '<td>Classification:</td>';
                      echo '<td>Spareparts</td>';
                    echo '</tr>';
                    echo '<tr>';
                      echo '<td>Size:</td>';
                      echo '<td>n/a</td>';
                    echo '</tr>';
                    echo '<tr>';
                      echo '<td>Brand:</td>';
                      echo '<td>n/a</td>';
                    echo '</tr>';
                    echo '<tr>';
                      echo '<td>Supplier:</td>';
                      echo '<td>n/a</td>';
                    echo '</tr>';
                    echo '<tr>';
                      echo '<td>Location:</td>';
                      echo '<td>C1A</td>';
                    echo '</tr>';
                  echo '</table>';
                  echo '</div>';
                    echo '<footer>';
                    echo '<label for="Qty">Quantity</label>';
                    echo '<input type="number" name="Qty"><br>';
                    echo '<a class="btn small" href="#">Request Item</a></footer>';
                  echo '</figcaption>';
                echo '</figure>';
              echo '<figure class="one_half"><a class="img-overlay btmspace-30" href="#"><img src="#" alt=""></a>';
              echo '<figcaption>';
                echo '<div class="btmspace-30">';
                echo '<table class="list-item">';
                  echo '<tr>';
                    echo '<th>//</th>';
                  echo '</tr>';
                  echo '<tr>';
                    echo '<td>In Stock:</td>';
                    echo '<td>0</td>';
                  echo '</tr>';
                  echo '<tr>';
                    echo '<td>Item Code:</td>';
                    echo '<td>002B00</td>';
                  echo '</tr>';
                  echo '<tr>';
                    echo '<td>Classification:</td>';
                    echo '<td>Spareparts</td>';
                  echo '</tr>';
                  echo '<tr>';
                    echo '<td>Size:</td>';
                    echo '<td>n/a</td>';
                  echo '</tr>';
                  echo '<tr>';
                    echo '<td>Brand:</td>';
                    echo '<td>n/a</td>';
                  echo '</tr>';
                  echo '<tr>';
                    echo '<td>Supplier:</td>';
                    echo '<td>n/a</td>';
                  echo '</tr>';
                  echo '<tr>';
                    echo '<td>Location:</td>';
                    echo '<td>M1A</td>';
                  echo '</tr>';
                echo '</table>';
                echo '</div>';
                  echo '<footer>';
                  echo '<label for="Qty">Quantity</label>';
                  echo '<input type="number" name="Qty"><br>';
                  echo '<a class="btn small" href="#">Request Item</a></footer>';
                echo '</figcaption>';
              echo '</figure>';
            echo '</div>';
          echo '</article>';
          // ############################################################################################################### //
      }
        echo '</div>';
        // tab 3
        echo '</div>';
      echo '</div>'; //end of spareparts list
        //tab 4 Rebars
      echo '<div id="rebars">'; //start of rebars list
        echo '<div class="list">';
        echo '<div id="tab-4" class="clear">';
      while($item = mysqli_fetch_array($resultRebars)){
          echo '<article>';
            echo '<h4>Rebars</h4>';
            echo '<div class="group">';
              echo '<figure class="one_half first"><a class="img-overlay btmspace-30" href="#"><img src="#" alt=""></a>';
                echo '<figcaption>';
                  echo '<div class="btmspace-30">';
                  echo '<table class="list-item">';
                    echo '<tr>';
                      echo '<th>//</th>';
                    echo '</tr>';
                    echo '<tr>';
                      echo '<td>In Stock:</td>';
                      echo '<td>17</td>';
                    echo '</tr>';
                    echo '<tr>';
                      echo '<td>Item Code:</td>';
                      echo '<td>000A00</td>';
                    echo '</tr>';
                    echo '<tr>';
                      echo '<td>Classification:</td>';
                      echo '<td>Rebars</td>';
                    echo '</tr>';
                    echo '<tr>';
                      echo '<td>Size:</td>';
                      echo '<td>n/a</td>';
                    echo '</tr>';
                    echo '<tr>';
                      echo '<td>Brand:</td>';
                      echo '<td>n/a</td>';
                    echo '</tr>';
                    echo '<tr>';
                      echo '<td>Supplier:</td>';
                      echo '<td>n/a</td>';
                    echo '</tr>';
                    echo '<tr>';
                      echo '<td>Location:</td>';
                      echo '<td>C1A</td>';
                    echo '</tr>';
                  echo '</table>';
                  echo '</div>';
                    echo '<footer>';
                    echo '<label for="Qty">Quantity</label>';
                    echo '<input type="number" name="Qty"><br>';
                    echo '<a class="btn small" href="#">Request Item</a></footer>';
                  echo '</figcaption>';
                echo '</figure>';
              echo '<figure class="one_half"><a class="img-overlay btmspace-30" href="#"><img src="#" alt=""></a>';
              echo '<figcaption>';
                echo '<div class="btmspace-30">';
                echo '<table class="list-item">';
                  echo '<tr>';
                    echo '<th>//</th>';
                  echo '</tr>';
                  echo '<tr>';
                    echo '<td>In Stock:</td>';
                    echo '<td>0</td>';
                  echo '</tr>';
                  echo '<tr>';
                    echo '<td>Item Code:</td>';
                    echo '<td>002B00</td>';
                  echo '</tr>';
                  echo '<tr>';
                    echo '<td>Classification:</td>';
                    echo '<td>Rebars</td>';
                  echo '</tr>';
                  echo '<tr>';
                    echo '<td>Size:</td>';
                    echo '<td>n/a</td>';
                  echo '</tr>';
                  echo '<tr>';
                    echo '<td>Brand:</td>';
                    echo '<td>n/a</td>';
                  echo '</tr>';
                  echo '<tr>';
                    echo '<td>Supplier:</td>';
                    echo '<td>n/a</td>';
                  echo '</tr>';
                  echo '<tr>';
                    echo '<td>Location:</td>';
                    echo '<td>M1A</td>';
                  echo '</tr>';
                echo '</table>';
                echo '</div>';
                  echo '<footer>';
                  echo '<label for="Qty">Quantity</label>';
                  echo '<input type="number" name="Qty"><br>';
                  echo '<a class="btn small" href="#">Request Item</a></footer>';
                echo '</figcaption>';
              echo '</figure>';
            echo '</div>';
          echo '</article>';
          // ############################################################################################################### //
      }
        echo '</div>';
        //tab 4
        echo '</div>';
      echo '</div>'; //end of rebars list
        // tab 5 Tools
      echo '<div id="tools">'; //start of tools list
        echo '<div class="list">';
        echo '<div id="tab-5" class="clear">';
      while($item = mysqli_fetch_array($resultTools)){
          echo '<article>';
            echo '<h4>Tools</h4>';
            echo '<div class="group">';
              echo '<figure class="one_half first"><a class="img-overlay btmspace-30" href="#"><img src="#" alt=""></a>';
                echo '<figcaption>';
                  echo '<div class="btmspace-30">';
                  echo '<table class="list-item">';
                    echo '<tr>';
                      echo '<th>//</th>';
                    echo '</tr>';
                    echo '<tr>';
                      echo '<td>In Stock:</td>';
                      echo '<td>17</td>';
                    echo '</tr>';
                    echo '<tr>';
                      echo '<td>Item Code:</td>';
                      echo '<td>000A00</td>';
                    echo '</tr>';
                    echo '<tr>';
                      echo '<td>Classification:</td>';
                      echo '<td>Tools</td>';
                    echo '</tr>';
                    echo '<tr>';
                      echo '<td>Size:</td>';
                      echo '<td>n/a</td>';
                    echo '</tr>';
                    echo '<tr>';
                      echo '<td>Brand:</td>';
                      echo '<td>n/a</td>';
                    echo '</tr>';
                    echo '<tr>';
                      echo '<td>Supplier:</td>';
                      echo '<td>n/a</td>';
                    echo '</tr>';
                    echo '<tr>';
                      echo '<td>Location:</td>';
                      echo '<td>C1A</td>';
                    echo '</tr>';
                  echo '</table>';
                  echo '</div>';
                    echo '<footer>';
                    echo '<label for="Qty">Quantity</label>';
                    echo '<input type="number" name="Qty"><br>';
                    echo '<a class="btn small" href="#">Request Item</a></footer>';
                  echo '</figcaption>';
                echo '</figure>';
              echo '<figure class="one_half"><a class="img-overlay btmspace-30" href="#"><img src="#" alt=""></a>';
              echo '<figcaption>';
                echo '<div class="btmspace-30">';
                echo '<table class="list-item">';
                  echo '<tr>';
                    echo '<th>//</th>';
                  echo '</tr>';
                  echo '<tr>';
                    echo '<td>In Stock:</td>';
                    echo '<td>0</td>';
                  echo '</tr>';
                  echo '<tr>';
                    echo '<td>Item Code:</td>';
                    echo '<td>002B00</td>';
                  echo '</tr>';
                  echo '<tr>';
                    echo '<td>Classification:</td>';
                    echo '<td>Tools</td>';
                  echo '</tr>';
                  echo '<tr>';
                    echo '<td>Size:</td>';
                    echo '<td>n/a</td>';
                  echo '</tr>';
                  echo '<tr>';
                    echo '<td>Brand:</td>';
                    echo '<td>n/a</td>';
                  echo '</tr>';
                  echo '<tr>';
                    echo '<td>Supplier:</td>';
                    echo '<td>n/a</td>';
                  echo '</tr>';
                  echo '<tr>';
                    echo '<td>Location:</td>';
                    echo '<td>M1A</td>';
                  echo '</tr>';
                echo '</table>';
                echo '</div>';
                  echo '<footer>';
                  echo '<label for="Qty">Quantity</label>';
                  echo '<input type="number" name="Qty"><br>';
                  echo '<a class="btn small" href="#">Request Item</a></footer>';
                echo '</figcaption>';
              echo '</figure>';
            echo '</div>';
          echo '</article>';
          // ############################################################################################################### //
      }
        echo '</div>';
        // tab 5
        echo '</div>';
      echo '</div>'; //end of tools list
      ?>
      </div>
    </div>
    <!-- /tabs -->
    <div class="content">
      <!-- pagination -->
      <div class="clear"><br></div>
      <nav class="pagination">
        <ul id="pageNumber">
          <li id="prev"><a href="#">&laquo; Previous</a></li>
          <li id="lip1" class="current"><a id="a1" href="#p1" style="padding:0px;border:none;"><strong id="curr">1</strong></a></li>
          <li><a href="#p2" onclick="changePage(2)">2</a></li>
          <li><strong>&hellip;</strong></li>
          <li><a href="#p6">6</a></li>
          <li><a href="#p7">7</a></li>
          <li><a href="#p8">8</a></li>
          <li><a href="#p9">9</a></li>
          <li><strong>&hellip;</strong></li>
          <li><a href="#p14">14</a></li>
          <li><a href="#p15">15</a></li>
          <li id="next"><a href="#">Next &raquo;</a></li>
        </ul>
      </nav>
      <!-- / pagination -->
    </div>
    <div class="clear"></div>
  </main>
  <!-- /main -->

  <!-- end of .content -->
</div>
<!--end of row 3 -->

<div class="wrapper row4 bgded" style="background-image:url('../images/demo/backgrounds/03.png')">
  <footer id="footer" class="hoc topspace-0 clear">
    <!-- add new item /form -->
    <div class="clear"><br><br>
    </div>
    <!-- / add new item /form -->
    <!-- lower dash -->
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
    <!--end of lower dash -->
  </footer>
</div>
<!--start of row 5-->
<div class="wrapper row5">
    <!-- copyright -->
    <div id="copyright" class="hoc clear">
    <p class="fl_left">Copyright &copy; 2017 - All Rights Reserved - <a href="#">WT Construction</a></p>
    <p class="fl_right">(032)248-2248</p>
    </div>
    <!--end of copyright -->
</div>
<!--end of row 5 -->

<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery-ui.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
<script src="../layout/scripts/jplist.pagination-bundle.min.js"></script>
<!-- IE9 Placeholder Support -->
<script src="../layout/scripts/jquery.placeholder.min.js"></script>
<!-- / IE9 Placeholder Support -->
<script>
  function hideDiv(divId){
    var classification = ["electrical", "plumbing", "spareparts", "rebars", "tools"];
    var i;

    for(i = 0; i < 5; i++){
      if(classification[i] != divId){
        $('#' + classification[i]).hide();
      }else{
        $('#' + divId).show();
      }
    }
  }
</script>
<script>
$('document').ready(function(){
   $('#electrical').jplist({        
      itemsBox: '.list' 
      ,itemPath: '.list-item' 
      ,panelPath: '.jplist-panel' 
   });
   
});
</script>
</body>
</html>
