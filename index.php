<?php include("includes/header.php"); ?>
<?php include("includes/Metadata.php"); ?>

  </head>
  <body>
    <!-- Start your project here-->





    
    <div class="container margin_top">
     <div class="row justify-content-center margin_top">

      <div class="col-md-6">
        <h1>Introduction</h1>
        <p>Heya, wie ihr seht, könnt ihr alle Clanmitglieder sehen, die gerade online sind in Destiny und auf welcher Plattform sie spielen. Ich hoffe, dass es euch dabei hilft zu sehen, wer gerade online ist in Destiny. Die Seite wird definitiv noch angepasst, das ist derzeit nur ein Prototype für die Funktionalität</p>
      </div>

      <div class="col-md-6">
        <h1> Spieler, die gerade Online sind </h1>
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

<?php
include("includes/footer.php");
?>
