<?php include("includes/header.php"); ?>
<?php include("includes/Metadata.php"); ?>

  </head>
  <body>
    <!-- Start your project here-->
    <?php include("includes/navbar.php");?>





    
    <div class="container margin_top">
     <div class="row justify-content-center margin_top">

      <div class="col-md-6">
      </br>
      </br>
        <h1>Introduction</h1>
        <p>Heya, wie ihr seht, könnt ihr alle Clanmitglieder sehen, die gerade online sind in Destiny und auf welcher Plattform sie spielen. Ich hoffe, dass es euch dabei hilft zu sehen, wer gerade online ist in Destiny. Die Seite wird definitiv noch angepasst, das ist derzeit nur ein Prototype für die Funktionalität</p>
        </br> <!-- Lazy but effective strat idgaf-->
        <h1>Discord</h1>
        <p>Wir nutzen den Discord als hauptsächliches Kommunikations mittel, damit wir uns Clan und Plattform übergreifend unterhalten können! Wir empfehlen euch unseren Discord beizutreten, wenn ihr an Community Events teilnehmen wollt und schnell nach Leuten sucht, die mit euch Aktivitäten erledigen. </p>
        <a href="https://discord.gg/Pyn2AYH5Wn"><button type="button" class="btn btn-primary btn-rounded" style="background-color: #7289da">Discord</button></a>
        </br>
        </br>
        <h1>Support</h1>
        <p>Falls ihr meine Projekte unterstützen wollt, könnt ihr es gerne auf Patreon machen! Es hilft mir sehr, die Domain und die Website online zu halten und weiter an diesem Projekt zu arbeiten :D</p>
        <a href="https://patreon.com/KappaArmy"><button type="button" class="btn btn-primary btn-rounded" style="background-color: #FF424D">Patreon</button></a>
        </br>
        </br>
        <p> Aktive Supporter dieser Website: </p>
        </br>
        </br>
      </div>

      <div class="col-md-6">
      </br>
      </br>
        <h1> Spieler, die gerade Online sind </h1>
        <?php include("includes/Destiny_2/onlinenum.php");
        echo "Insgesamt sind ". $online ." online!"; ?>
        <?php include("includes/Destiny_2/onlinemembers.php"); ?>
      </div>

  </div>
</div>
</div>

<?php //include("includes/Discord/Clanspace_check.php"); ?>


    <!-- End your project here-->

    <!-- MDB -->
    <script type="text/javascript" src="js/mdb.min.js"></script>
    <!-- Custom scripts -->
    <script type="text/javascript"></script>

<?php
include("includes/footer.php");
?>
