<div id="article">
  <h2>Wij spelen binnenkort:</h2>
  <div class= gig-box>
  
<?php
      foreach ($rows as $row): ?>

<article class = gigs>
    <div class = "gig-image" >
        <img src="<?= $row['image_path']?>" alt="location image" width="150" max-width="150">
    </div>
    
    <div class = "gig-info">
        <dl>
            <dd class="gig-title"><?= $row["gigtitle"] ?></dd>
            <dt>Datum &amp; Tijd</dt>
            <dd><?= $row["weekday"]. " ".$row["playdate"]. "  -  ". $row["playtime"] ?></dd>
            <dt>Locatie</dt>
            <dd><a href="<?= $row['website'] ?>"><?= $row["location"] ?></a><br>
                <?= $row["address"] ?>
            <dt>Details</dt>
            <dd><?= $row["description"] ?></dd>
        </dl>    
    </div>
</article>


<?php endforeach
?>
</div><!-- einde gig-box -->



<hr size="1" class="horizontaleLijn" />



  <h2>Geweest:</h2>
<div class= gig-box>
<?php
      foreach ($rowspast as $rowpast): ?>

<article class = gigs>
    <div class = "gig-image" >
        <img src="<?= $rowpast['image_path']?>" alt="location image" width="150" max-width="150">
    </div>
    
    <div class = "gig-info">
        <dl>
            <dd class="gig-title"><?= $rowpast["gigtitle"] ?></dd>
            <dt>Datum &amp; Tijd</dt>
            <dd><?= $rowpast["weekday"]. " ".$rowpast["playdate"]. "  -  ". $rowpast["playtime"] ?></dd>
            <dt>Locatie</dt>
            <dd><a href="<?= $rowpast['website'] ?>"><?= $rowpast["location"] ?></a><br>
                <?= $rowpast["address"] ?>
            <dt>Details</dt>
            <dd><?= $rowpast["description"] ?></dd>
        </dl>    
    </div>
</article>

<?php endforeach
?>
</div> <!-- einde gig-box -->


<hr size="1" class="horizontaleLijn" />



  <h2>Archief:</h2>
<?php
      foreach ($rowspast as $rowpast):?>
  <ul>
    <li><?= $rowpast["playdate"]. " - ". $rowpast["gigtitle"]. " - ". $rowpast["location"] ?>  </li>
 </ul>
<?php endforeach
?>
  


    
</div>

<!-- Box rechter kant met foto's -->
<div id="sidebar" class="colorboxYellow">
    <p><img width="166" height="125" alt="Optreden Kraaij en Balder" src="../afbeeldingen/KraaijEnBalderThumb.jpg" /></p>
    <h2>KRAAIJ EN BALDER - 2014</h2>
    
    <p><img width="166" height="83" alt="JC Musis Sacrum" src="../afbeeldingen/JC-musis-sacrum%20-thumb.jpg" /></p>
    <h2>JAZZ CLUB MUSIS SACRUM - 2014</h2>
    
    <p><img width="166" height="125" alt="optreden Jazzcination 2013" src="../afbeeldingen/thumb_optreden_jazzcination2013.jpg" /></p>
    <h2>DE HOFNAR - 2013</h2>
    
    <p><img width="166" height="142" alt="Jazz marathon" src="../afbeeldingen/sextet-agenda.jpg" /></p>
    <h2>JAZZMARATHON - 2012</h2>
</div>
