<?php include("includes/header.php"); ?>
<?php include("includes/Metadata.php"); ?>

  </head>
  <body>
    <!-- Start your project here-->





    
    <div class="container margin_top">
     <div class="row justify-content-center margin_top">

      <div class="col-md-6">
      </br>
      </br>
        <h1>Introduction</h1>
        <p>Heya, wie ihr seht, könnt ihr alle Clanmitglieder sehen, die gerade online sind in Destiny und auf welcher Plattform sie spielen. Ich hoffe, dass es euch dabei hilft zu sehen, wer gerade online ist in Destiny. Die Seite wird definitiv noch angepasst, das ist derzeit nur ein Prototype für die Funktionalität</p>
        </br> <!-- Lazy but effective strat idgaf-->
        </br>
        <h1>Support</h1>
        <p>Falls ihr meine Projekte unterstützen wollt, könnt ihr es gerne auf Patreon machen! Es hilft mehr sehr den Server online zu halten ^^</p>
        <a href="https://patreon.com/KappaArmy"><button type="button" class="btn btn-primary btn-rounded" style="background-color: #FF424D">Patreon</button></a>
        </br>
      </div>

      <div class="col-md-6">
      </br>
      </br>
        <h1> Spieler, die gerade Online sind </h1>
        <?php include("includes/Destiny_2/onlinenum.php");
        echo "Insgesamt sind ". $i ." online!"; ?>
        <?php include("includes/Destiny_2/onlinemembers.php"); ?>
      </div>

  </div>
</div>
</div>

<?php include("includes/Discord/Clanspace_check.php"); ?>


    <!-- End your project here-->

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>

<?php
include("includes/footer.php");
?>
