<?php
include("includes/header.php");
?>
<!--Mendantory Header stuff-->
  <?php
  include("includes/Metadata.php");
  ?>

<link rel="shortcut icon" type="image/png" href="pictures/..."/>
    
<!-- Styles-->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/style.css">

</head>

<body>

<div class="boxes">  
  <div class="the-left-box sticky">
    <div class="content">
      <h1> Discord bruh </h1>
    </div>
  </div>

  <div class="the-main-box">
    <div class="content">
      <h1> Introduction and shit </h1>
      <p> Hi whats up KappaArmy here </p>
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


<?php
include("includes/footer.php");
?>