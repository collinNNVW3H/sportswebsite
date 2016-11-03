<!DOCTYPE html>
<!--Ashtyne--> 
<html lang="en">

  <head>

    <meta charset="utf-8">

    <!-- This says our CSS is compatible with phones, and phones
         don't need to scale it strangely. -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Main CSS styles for Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <!-- Optional theme add-on -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

    <link rel="stylesheet" type="text/css" href="css/style_sheet.css">

    <title>Isports - Articles</title>

    <style>
      img {
        margin: auto;
        display: block;
      }
      .article{
        background-color:#efe8d5;
        margin-top:10px;
        margin-left:20px; 
      }
      h4{
        text-align: center;
      }
    </style>

  </head>

  <body>

    <h1> Articles of the Day</h1>

     <?php include '../resources/navigation.php'; ?>

    <div class="row">
      <div class="col-sm-7 article">
        <h4>The Big Home Run Hitter!</h4>

        <p>On Sunday afternoon, history was made when rookie pitcher, Mike the Tike, who hit 3 home runs during his 4 at bats in the game on Sunday. The GM (General Manager) of the Bluebirds was even surprised at this outcome. Nobody has ever seen this kid swing like this before and it was amazing. The next game for the Bluebirds is this Tuesday vs. the Raptors and is a sell-out crowd. Everyone is hoping to witness even more history at the next upcoming game.</p>
      </div>
      <div class="col-sm-4">
        <img src="img/baseballbat.png" alt="Baseball Bat" />
      </div>
      <div class="col-sm-7 article">
        <h4>The Man With Money</h4>

        <p>The starting cornerback for the Jets, Grant Howard, was an orphan from birth. With no other place to call home, he lived in an orphanage on the west side of Seattle for almost his whole child life, until a nice couple had adopted him at the age of 16. Last Monday marked the day when this young star was adopted, and to celebrate this he donated over $35,000 to the orphanage of which he came from. He felt like it was his obligation to give those kids more so they felt like they had a chance of leaving one day and finding a home like he did.</p>
      </div>
      <div class="col-sm-4">
        <img src="img/bill.png" alt="Money" />
      </div>
      <div class="col-sm-7 article">
        <h4>Too Much to Handle</h4>

        <p>In the opening game of the preseason opener, the Blackhawks scored a total of 135 points against the reigning champions on Sunday afternoon. This is the most a team has scored on the reigning NBA champs for almost three whole decades. With the young offensive talent that the Blackhawks have, they may be trouble for a lot of defenses in the NBA come this season. Many are already getting their hopes high for an NBA to be won by the Blackhawks next season.</p> 
      </div>
      <div class="col-sm-4">
        <img src="img/fire.png" alt="Fire" />
      </div>
      </div>
    <br>
    <br>
    <br>
    <br>
    <br>

    <?php include '../resources/footer.php'; ?>
    <!-- Scripts required to make Bootstrap work better. -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>

</html>