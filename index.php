<?php include("includes/header.php"); ?>
<?php include("includes/Metadata.php"); ?>

  </head>
  <body>
    <!-- Start your project here-->





    
    <div class="container margin_top">
     <div class="row justify-content-center margin_top">

      <div class="col-lg-4 col-md-12">
        <h1> Navigation </h1>
        <p> Soon :eyes: </p>
      </div>

      <div class="col-lg-4 col-md-6">
        <h1> Introduction and shit </h1>
        <p> Hi whats up KappaArmy here </p>
      </div>

      <div class="col-lg-4 col-md-6">
        <h1> Who's online and shit </h1>
        <?php include("includes/Destiny_2/onlinenum.php");
        echo "Insgesamt sind ". $i ." online!"; ?>
        <?php include("includes/Destiny_2/onlinemembers.php"); ?>
      </div>

  </div>
</div>
</div>
    <!-- End your project here-->

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>
  </body>
</html>
