<?php
include("includes/header.php");
?>
<!--Mendantory Header stuff-->
  <?php
  include("includes/Metadata.php");
  ?>

<link rel="shortcut icon" type="image/png" href="pictures/..."/>
    
<!-- Styles-->
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="css/mdb.min.css" />


</head>
<body>


<div class="boxes">  
  <div class="the-left-box sticky">
    <div class="content">
      <h1> Navigation </h1>
      <p> Soon :eyes: </p>
    </div>
  </div>

  <div class="the-main-box">
    <div class="content">
      <h1> Introduction and shit </h1>
      <p> Hi whats up KappaArmy here </p>
    </div>
  </div>

  <div class="the-right-box sticky">
    <div class="content">
      <h1> Who's online and shit </h1>
      <?php
        include("includes/Destiny_2/onlinenum.php");
        echo "Insgesamt sind ". $i ." online!";
      ?>
        <?php
          include("includes/Destiny_2/onlinemembers.php");
        ?>



    </div>
  </div>
 </div>


  <!-- MDB -->
  <script type="text/javascript" src="js/mdb.min.js"></script>


<?php
include("includes/footer.php");
?>