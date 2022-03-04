<?php include("includes/header.php"); ?>
<?php include("includes/Metadata.php"); ?>

  </head>
  <body>
    <!-- Start your project here-->
    <?php include("includes/navbar.php");?>





    
    <div class="container margin-top">
  <div class="row justify-content-center">

    <div class="col-12">
    </br>
    </br>
    </br>
    <?php
    include("includes/Destiny_2/onlinenum.php"); 
    echo "Insgesamt sind ". $i. " im KappaArmy Clan und davon sind ". $online. " online!";
    include("includes/Destiny_2/memberlist.php"); 
    ?>
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
