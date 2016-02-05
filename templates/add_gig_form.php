<!--TODO write script to make active tab the right color -->
<div class = admin-forms>
<h1>Add a new gig:</h1>


<!--<form action="admin_add_gig.php" method="post" id="add_gig_form"> -->
<form method="post" id="add_gig_form" action='<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>'>

    <!-- Title -->
    <div class="form-family">
        <fieldset>
            <div class="form-group">
                <label>Titel</label>
                <input autocomplete="on" autofocus class="form-control wide-input-field" placeholder = "bv: Jazz marathon!" name="gigtitle" "type="text"/>
            </div>
        </fieldset>
    </div>  
      
   

    <div class="form-family">
        <fieldset>
            <!--Speeldatum -->
            <div class="form-group">
        
                <!-- Dag -->
                <label>Datum</label>
                <select autofocus class="form-control" name="weekday">
                    <option disabled selected value="">Weekdag</option>
                        <?php
                        $weekdays = array("maandag", "dinsdag", "woensdag", "donderdag", "vrijdag", "zaterdag", "zondag");
                        foreach($weekdays as $weekday)
                        {
                            print("<option value='{$weekday}'> {$weekday} </option>\n");
                        }
                        ?>    
                </select>

            
                <!-- Datum -->
                <select autofocus class="form-control" name="day">
                    <option disabled selected value="">Dag</option>
                        <?php
                
                        $day = 0;
                        for($i=0; $i<31; $i++)
                        {
                            $day++;
                            if($day < 10)
                            $day = "0".$day;
                            print("<option value='{$day}'> {$day} </option>\n");
                        }
                        ?>
                </select> 

              
                <!-- Maand -->       
                <select autofocus class="form-control" name="month">
                    <option disabled selected value="" >Maand</option>
                        <?php
                        $months = array("januari", "februari", "maart", "april", "mei", "juni", "juli", "augustus", "september", "oktober", "november", "december");
                        foreach($months as $month)
                        {
                            print("<option value='{$month}'> {$month} </option>\n");
                        }
                        ?>   
                </select>
                
                <!-- Jaar -->       
                <select autofocus class="form-control" name="year">
                    <option disabled selected value="" >Jaar</option>
                        <?php
                        $year = 2013;
                        // $year = date("Y");
                        for($i=0; $i<5; $i++)
                        {
                            print("<option value='{$year}'> {$year} </option>\n");
                            $year++;
                        }
                        ?>   
                </select>
                
            </div>
        </fieldset>
 
    
        <!-- Speeltijd -->
        <fieldset>
            <div class="form-group">
                <!-- Uur -->
                <label>Tijd</label>
                <select autofocus class="form-control" name="hour">
                    <option disabled selected value="" >uur</option>
                        <?php
                
                        $uur = 0;
                        for($i=0; $i<24; $i++)
                        {
                            $uur++;
                            print("<option value='{$uur}'> {$uur} </option>\n");
                        }
                        ?>
                </select>  
            
            
                <!-- Minuut -->
                <select autofocus class="form-control" name="minutes">
                    <option disabled selected value="">minuten</option>
                        <?php
                        $minutes = array(":00", ":15", ":30", ":45");
                        foreach($minutes as $minute)
                        {
                            print("<option value='{$minute}'> {$minute} </option>\n");
                        }
                        ?>   
                </select>
            </div>
        </fieldset>
    </div><!--einde form-family 2 -->
    

    <!--Locatie, website -->
    <div class="form-family"  >  
        <fieldset>
            <div class="form-group">
                <!-- Locatie naam -->
                <label>Locatienaam </label>
                <input autocomplete="on" autofocus class="form-control wide-input-field" name="location" placeholder="Locatie naam" type="text"/>
            </div>
        </fieldset>
    
        <fieldset>
            <div class="form-group">
                <!-- Website -->
                <label>Website locatie </label>
                <input autocomplete="on" autofocus class="form-control wide-input-field" name="website" placeholder="URL" type="text"/>
            </div>
        </fieldset>
    
        <!-- Straatnaam, huisnummer -->
        <fieldset>
            <div class="form-group">
                <label>Adres</label>
                <input autocomplete="on" autofocus class="form-control" name="street" placeholder="Straat" type="text"/>

                <input autocomplete="on" autofocus class="form-control narrow-input-field" name="number" placeholder="Nr" type="text"/>
            </div>
        </fieldset>
        
        <!--Plaats -->
        <fieldset>
            <div class="form-group">
                <label> </label>
                <input autocomplete="on" autofocus class="form-control" name="city" placeholder="Plaats" type="text"/>
            </div>
        </fieldset>   
    
    </div> <!--einde form-family 2 -->

    

    

    
    <!-- Beschrijving -->
    <fieldset>
        <div class="form-group">
            <label>Beschrijving </label>
            <textarea form ="add_gig_form" autocomplete="off" autofocus class="form-control" name="description" 
            placeholder="Schrijf hier een korte pakkende tekst die de lezer wat informatie verschaft over het optreden. Noem eventuele gasten en bijzonderheden..." type="text"></textarea>
        </div> 
    </fieldset>

    
    <!--TODO upload image -->
    <!--<div class="form-family"  > 
    <fieldset>
        <div class="form-group">
            <label>Upload foto </label>
            <form action="upload.php" method="post" enctype="multipart/form-data">
            Select image to upload:
            <input type="file" name="fileToUpload" id="fileToUpload" >
            <input type="submit" value="Upload Image" name="submit" >
            </form>
        </div>
    <fieldset>
    </div> -->
    
    <!-- image -->
    <div class="form-family"  >
    <div class="form-group">
        <label>Voeg afbeelding toe </label>
        <select autofocus class="form-control" name="image_path">
            <option disabled selected value="">image</option>
                <?php
                foreach($rows as $row)
                {
                    $image_name = $row["image_name"];
                    $image_path = $row["image_path"];
                    print("<option value='{$image_path}'> {$image_name} </option>\n");
                }
                ?>   
        </select>
    </div>
    </div>
    
    <!-- Submit button -->
    <div class="form-group">
        <button class="btn btn-default" type="submit"> Submit </button>
   </div>
   
<!--</form>
<?php
echo "<h2>Your Input:</h2>";
echo $gigtitle;
echo "<br>";
echo $playdate;
echo "<br>";
echo $address;
?> -->

</div>  

