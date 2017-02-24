<?php 
  require("../require/sql_connect.php");
?>

<html>
<head>
<title>Inventory Items</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
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
          <li class="active"><a href="#tab-1"><i class="bt-3x fa fa-bolt"></i>Electrical</a></li>
          <li class="active"><a href="#tab-2"><i class="bt bt-3x bt-pipes"></i>Plumbing</a></li>
          <li class="active"><a href="#tab-3"><i class="bt bt-3x bt-nut"></i>Spareparts</a></li>
          <li class="active"><a href="#tab-4"><i class="bt bt-3x bt-worker5"></i>Rebars</a></li>
          <li class="active"><a href="#tab-5"><i class="bt bt-3x bt-wrench59"></i>Tools</a></li>
        </ul>
      </div>
      <!-- end of .one_quarter boxes!-->

      <!-- start of .three_quarter-->
      <div class="three_quarter">
        <!-- start of tab1 -->
        <div id="tab-1" class="clear">
          <article>
            <h4>Electrical</h4>
            <div class="group">
              <figure class="one_half first"><a class="img-overlay btmspace-30" href="#"><img src="../images/demo/Switch Door Bell.png" alt=""></a>
                <figcaption>
                  <div class="btmspace-30">
                  <table>
                    <tr>
                        <th>Switch Door Bell</th>
                    </tr>
                    <tr>
                        <td>In Stock:</td>
                        <td>17</td>
                    </tr>
                    <tr>
                        <td>Item Code:</td>
                        <td>000A00</td>
                    </tr>
                    <tr>
                        <td>Classification:</td>
                        <td>Electrical</td>
                    </tr>
                    <tr>
                        <td>Size:</td>
                        <td>n/a</td>
                    </tr>
                    <tr>
                        <td>Brand:</td>
                        <td>n/a</td>
                    </tr>
                    <tr>
                        <td>Supplier:</td>
                        <td>n/a</td>
                    </tr>
                    <tr>
                        <td>Location:</td>
                        <td>C1A</td>
                    </tr>

                </table>
                </div>
                  <footer>
                  <label for="Qty">Quantity</label>
                  <input type="number" name="Qty"><br>
                  <a class="btn small" href="#">Request Item</a></footer>
                </figcaption>
              </figure>
              <figure class="one_half"><a class="img-overlay btmspace-30" href="#"><img src="../images/demo/Fuse Wire.png" alt=""></a>
                <figcaption>
                  <div class="btmspace-30">
                  <table>
                    <tr>
                        <th>Fuse Wire</th>
                    </tr>
                    <tr>
                        <td>In Stock:</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Item Code:</td>
                        <td>002B00</td>
                    </tr>
                    <tr>
                        <td>Classification:</td>
                        <td>Electrical</td>
                    </tr>
                    <tr>
                        <td>Size:</td>
                        <td>n/a</td>
                    </tr>
                    <tr>
                        <td>Brand:</td>
                        <td>n/a</td>
                    </tr>
                    <tr>
                        <td>Supplier:</td>
                        <td>n/a</td>
                    </tr>
                    <tr>
                        <td>Location:</td>
                        <td>M1A</td>
                    </tr>

                </table>
                </div>
                  <footer>
                  <label for="Qty">Quantity</label>
                  <input type="number" name="Qty"><br>
                  <a class="btn small" href="#">Request Item</a></footer>
                </figcaption>
              </figure>
            </div>
          </article>
          <!-- ################################################################################################ -->
        </div>
        <!-- end of tab1 -->
        <!-- tab 2 -->
        <div id="tab-2" class="clear">
            <article>
              <h4>Plumbing</h4>
              <div class="group">
                <figure class="one_half first"><a class="img-overlay btmspace-30" href="#"><img src="#" alt=""></a>
                  <figcaption>
                    <div class="btmspace-30">
                    <table>
                      <tr>
                          <th>//</th>
                      </tr>
                      <tr>
                          <td>In Stock:</td>
                          <td>17</td>
                      </tr>
                      <tr>
                          <td>Item Code:</td>
                          <td>000A00</td>
                      </tr>
                      <tr>
                          <td>Classification:</td>
                          <td>Plumbing</td>
                      </tr>
                      <tr>
                          <td>Size:</td>
                          <td>n/a</td>
                      </tr>
                      <tr>
                          <td>Brand:</td>
                          <td>n/a</td>
                      </tr>
                      <tr>
                          <td>Supplier:</td>
                          <td>n/a</td>
                      </tr>
                      <tr>
                          <td>Location:</td>
                          <td>C1A</td>
                      </tr>

                  </table>
                  </div>
                    <footer>
                    <label for="Qty">Quantity</label>
                    <input type="number" name="Qty"><br>
                    <a class="btn small" href="#">Request Item</a></footer>
                  </figcaption>
                </figure>
                <figure class="one_half"><a class="img-overlay btmspace-30" href="#"><img src="#" alt=""></a>
                  <figcaption>
                    <div class="btmspace-30">
                    <table>
                      <tr>
                          <th>//</th>
                      </tr>
                      <tr>
                          <td>In Stock:</td>
                          <td>0</td>
                      </tr>
                      <tr>
                          <td>Item Code:</td>
                          <td>002B00</td>
                      </tr>
                      <tr>
                          <td>Classification:</td>
                          <td>Plumbing</td>
                      </tr>
                      <tr>
                          <td>Size:</td>
                          <td>n/a</td>
                      </tr>
                      <tr>
                          <td>Brand:</td>
                          <td>n/a</td>
                      </tr>
                      <tr>
                          <td>Supplier:</td>
                          <td>n/a</td>
                      </tr>
                      <tr>
                          <td>Location:</td>
                          <td>M1A</td>
                      </tr>

                  </table>
                  </div>
                    <footer>
                    <label for="Qty">Quantity</label>
                    <input type="number" name="Qty"><br>
                    <a class="btn small" href="#">Request Item</a></footer>
                  </figcaption>
                </figure>
              </div>
            </article>
          <!-- ################################################################################################ -->
        </div>
        <!-- tab 2 -->
        <!-- tab 3 -->
        <div id="tab-3" class="clear">
          <!-- ################################################################################################ -->
          <article>
            <h4>Spareparts</h4>
            <div class="group">
              <figure class="one_half first"><a class="img-overlay btmspace-30" href="#"><img src="#" alt=""></a>
                <figcaption>
                  <div class="btmspace-30">
                  <table>
                    <tr>
                        <th>//</th>
                    </tr>
                    <tr>
                        <td>In Stock:</td>
                        <td>17</td>
                    </tr>
                    <tr>
                        <td>Item Code:</td>
                        <td>000A00</td>
                    </tr>
                    <tr>
                        <td>Classification:</td>
                        <td>Spareparts</td>
                    </tr>
                    <tr>
                        <td>Size:</td>
                        <td>n/a</td>
                    </tr>
                    <tr>
                        <td>Brand:</td>
                        <td>n/a</td>
                    </tr>
                    <tr>
                        <td>Supplier:</td>
                        <td>n/a</td>
                    </tr>
                    <tr>
                        <td>Location:</td>
                        <td>C1A</td>
                    </tr>

                </table>
                </div>
                  <footer>
                  <label for="Qty">Quantity</label>
                  <input type="number" name="Qty"><br>
                  <a class="btn small" href="#">Request Item</a></footer>
                </figcaption>
              </figure>
              <figure class="one_half"><a class="img-overlay btmspace-30" href="#"><img src="#" alt=""></a>
                <figcaption>
                  <div class="btmspace-30">
                  <table>
                    <tr>
                        <th>//</th>
                    </tr>
                    <tr>
                        <td>In Stock:</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Item Code:</td>
                        <td>002B00</td>
                    </tr>
                    <tr>
                        <td>Classification:</td>
                        <td>Spareparts</td>
                    </tr>
                    <tr>
                        <td>Size:</td>
                        <td>n/a</td>
                    </tr>
                    <tr>
                        <td>Brand:</td>
                        <td>n/a</td>
                    </tr>
                    <tr>
                        <td>Supplier:</td>
                        <td>n/a</td>
                    </tr>
                    <tr>
                        <td>Location:</td>
                        <td>M1A</td>
                    </tr>

                </table>
                </div>
                  <footer>
                  <label for="Qty">Quantity</label>
                  <input type="number" name="Qty"><br>
                  <a class="btn small" href="#">Request Item</a></footer>
                </figcaption>
              </figure>
            </div>
          </article>
        </div>
        <!-- tab 3 -->
        <!-- tab 4 -->
        <div id="tab-4" class="clear">
            <article>
              <h4>Rebars</h4>
              <div class="group">
                <figure class="one_half first"><a class="img-overlay btmspace-30" href="#"><img src="#" alt=""></a>
                  <figcaption>
                    <div class="btmspace-30">
                    <table>
                      <tr>
                          <th>//</th>
                      </tr>
                      <tr>
                          <td>In Stock:</td>
                          <td>17</td>
                      </tr>
                      <tr>
                          <td>Item Code:</td>
                          <td>000A00</td>
                      </tr>
                      <tr>
                          <td>Classification:</td>
                          <td>Rebars</td>
                      </tr>
                      <tr>
                          <td>Size:</td>
                          <td>n/a</td>
                      </tr>
                      <tr>
                          <td>Brand:</td>
                          <td>n/a</td>
                      </tr>
                      <tr>
                          <td>Supplier:</td>
                          <td>n/a</td>
                      </tr>
                      <tr>
                          <td>Location:</td>
                          <td>C1A</td>
                      </tr>

                  </table>
                  </div>
                    <footer>
                    <label for="Qty">Quantity</label>
                    <input type="number" name="Qty"><br>
                    <a class="btn small" href="#">Request Item</a></footer>
                  </figcaption>
                </figure>
                <figure class="one_half"><a class="img-overlay btmspace-30" href="#"><img src="#" alt=""></a>
                  <figcaption>
                    <div class="btmspace-30">
                    <table>
                      <tr>
                          <th>//</th>
                      </tr>
                      <tr>
                          <td>In Stock:</td>
                          <td>0</td>
                      </tr>
                      <tr>
                          <td>Item Code:</td>
                          <td>002B00</td>
                      </tr>
                      <tr>
                          <td>Classification:</td>
                          <td>Rebars</td>
                      </tr>
                      <tr>
                          <td>Size:</td>
                          <td>n/a</td>
                      </tr>
                      <tr>
                          <td>Brand:</td>
                          <td>n/a</td>
                      </tr>
                      <tr>
                          <td>Supplier:</td>
                          <td>n/a</td>
                      </tr>
                      <tr>
                          <td>Location:</td>
                          <td>M1A</td>
                      </tr>

                  </table>
                  </div>
                    <footer>
                    <label for="Qty">Quantity</label>
                    <input type="number" name="Qty"><br>
                    <a class="btn small" href="#">Request Item</a></footer>
                  </figcaption>
                </figure>
              </div>
            </article>
        </div>
        <!-- tab 5 -->
        <div id="tab-5" class="clear">
          <!-- ################################################################################################ -->
          <article>
            <h4>Tools</h4>
            <div class="group">
              <figure class="one_half first"><a class="img-overlay btmspace-30" href="#"><img src="#" alt=""></a>
                <figcaption>
                  <div class="btmspace-30">
                  <table>
                    <tr>
                        <th>//</th>
                    </tr>
                    <tr>
                        <td>In Stock:</td>
                        <td>17</td>
                    </tr>
                    <tr>
                        <td>Item Code:</td>
                        <td>000A00</td>
                    </tr>
                    <tr>
                        <td>Classification:</td>
                        <td>Tools</td>
                    </tr>
                    <tr>
                        <td>Size:</td>
                        <td>n/a</td>
                    </tr>
                    <tr>
                        <td>Brand:</td>
                        <td>n/a</td>
                    </tr>
                    <tr>
                        <td>Supplier:</td>
                        <td>n/a</td>
                    </tr>
                    <tr>
                        <td>Location:</td>
                        <td>C1A</td>
                    </tr>

                </table>
                </div>
                  <footer>
                  <label for="Qty">Quantity</label>
                  <input type="number" name="Qty"><br>
                  <a class="btn small" href="#">Request Item</a></footer>
                </figcaption>
              </figure>
              <figure class="one_half"><a class="img-overlay btmspace-30" href="#"><img src="#" alt=""></a>
                <figcaption>
                  <div class="btmspace-30">
                  <table>
                    <tr>
                        <th>//</th>
                    </tr>
                    <tr>
                        <td>In Stock:</td>
                        <td>0</td>
                    </tr>
                    <tr>
                        <td>Item Code:</td>
                        <td>002B00</td>
                    </tr>
                    <tr>
                        <td>Classification:</td>
                        <td>Tools</td>
                    </tr>
                    <tr>
                        <td>Size:</td>
                        <td>n/a</td>
                    </tr>
                    <tr>
                        <td>Brand:</td>
                        <td>n/a</td>
                    </tr>
                    <tr>
                        <td>Supplier:</td>
                        <td>n/a</td>
                    </tr>
                    <tr>
                        <td>Location:</td>
                        <td>M1A</td>
                    </tr>

                </table>
                </div>
                  <footer>
                  <label for="Qty">Quantity</label>
                  <input type="number" name="Qty"><br>
                  <a class="btn small" href="#">Request Item</a></footer>
                </figcaption>
              </figure>
            </div>
          </article>
          <!-- ################################################################################################ -->
        </div>
        <!-- tab 5 -->
      </div>
    </div>
    <!-- /tabs -->
    <div class="content">
      <!-- pagination -->
      <div class="clear"><br></div>
      <nav class="pagination">
        <ul>
          <li><a href="#">&laquo; Previous</a></li>
          <li><a href="#">1</a></li>
          <li><a href="#">2</a></li>
          <li><strong>&hellip;</strong></li>
          <li><a href="#">6</a></li>
          <li class="current"><strong>7</strong></li>
          <li><a href="#">8</a></li>
          <li><a href="#">9</a></li>
          <li><strong>&hellip;</strong></li>
          <li><a href="#">14</a></li>
          <li><a href="#">15</a></li>
          <li><a href="#">Next &raquo;</a></li>
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
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery-ui.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
<!-- IE9 Placeholder Support -->
<script src="../layout/scripts/jquery.placeholder.min.js"></script>
<!-- / IE9 Placeholder Support -->
</body>
</html>
