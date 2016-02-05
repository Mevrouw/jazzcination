<!--TODO write script to make active tab the right color -->
<div class = admin-forms>
<h1>Add a new gig:</h1>


<!--<form action="admin_add_gig.php" method="post" id="add_gig_form"> -->
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">

    <!-- Title -->
    <div class="form-family">
        <fieldset>
            <div class="form-group">
                <label>Titel</label>
                <input autocomplete="on" autofocus class="form-control wide-input-field" placeholder = "bv: Jazz marathon!" name="gigtitle" "type="text"/>
                <span class="error">* <?php echo $gigtitleErr;?></span>
            </div>
        </fieldset>
    </div>  
      
   

    <div class="form-family">
        <fieldset>
            <!--Speeldatum -->
            <div class="form-group">
        
                <!-- Dag -->
                <label>Datum</label>
                <select autofocus class="form-control" name="day">
                    <option disabled selected value="<?php echo $date;?>">Dag</option>
                        <?php
                        $days = array("maandag", "dinsdag", "woensdag", "donderdag", "vrijdag", "zaterdag", "zondag");
                        foreach($days as $day)
                        {
                            print("<option value='{$day}'> {$day} </option>\n");
                        }
                        ?>    
                </select>

            
                <!-- Datum -->
                <select autofocus class="form-control" name="date">
                    <option disabled selected value="<?php echo $date;?>">Datum</option>
                        <?php
                
                        $date = 0;
                        for($i=0; $i<31; $i++)
                        {
                            $date++;
                            print("<option value='{$date}'> {$date} </option>\n");
                        }
                        ?>
                </select> 

              
                <!-- Maand -->       
                <select autofocus class="form-control" name="month">
                    <option disabled selected value="<?php echo $month;?>" >Maand</option>
                        <?php
                        $days = array("januari", "februari", "maart", "april", "mei", "juni", "juli", "augustus", "september", "oktober", "november", "december");
                        foreach($days as $day)
                        {
                            print("<option value='{$day}'> {$day} </option>\n");
                        }
                        ?>   
                </select>
                <span class="error">* <?php echo $dateErr;?></span>
            </div>
        </fieldset>
 
    
        <!-- Speeltijd -->
        <fieldset>
            <div class="form-group">
                <!-- Uur -->
                <label>Tijd</label>
                <select autofocus class="form-control" name="hour">
                    <option disabled selected value=""  value="<?php echo $hour;?>">uur</option>
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
                    <option disabled selected value=""  value="<?php echo $minutes;?>">minuten</option>
                        <?php
                        $minutes = array(":00", ":15", ":30", ":45");
                        foreach($minutes as $minute)
                        {
                            print("<option value='{$minute}'> {$minute} </option>\n");
                        }
                        ?>   
                </select>
                <span class="error">* <?php echo $timeErr;?></span>
            </div>
        </fieldset>
    </div><!--einde form-family 2 -->
    

    <!--Locatie, website -->
    <div class="form-family"  >  
        <fieldset>
            <div class="form-group">
                <!-- Locatie naam -->
                <label>Locatienaam </label>
                <input autocomplete="on" autofocus class="form-control wide-input-field" name="location" placeholder="Locatie naam" value="<?php echo $location;?>"type="text"/>
                <span class="error">* <?php echo $locationErr;?></span>
            </div>
        </fieldset>
    
        <fieldset>
            <div class="form-group">
                <!-- Website -->
                <label>Website locatie </label>
                <input autocomplete="on" autofocus class="form-control wide-input-field" name="website" placeholder="URL" value="<?php echo $website;?>"type="text"/>
            </div>
        </fieldset>
    
        <!-- Straatnaam, huisnummer -->
        <fieldset>
            <div class="form-group">
                <label>Adres</label>
                <input autocomplete="on" autofocus class="form-control" name="street" placeholder="Straat" value="<?php echo $street;?>"type="text"/>
                <span class="error">* <?php echo $streetErr;?></span>
                <input autocomplete="on" autofocus class="form-control narrow-input-field" name="number" placeholder="Nr" value="<?php echo $number;?>"type="text"/>
                <span class="error">* <?php echo $numberErr;?></span>     
            </div>
        </fieldset>
        
        <!--Plaats -->
        <fieldset>
            <div class="form-group">
                <label> </label>
                <input autocomplete="on" autofocus class="form-control" name="city" placeholder="Plaats" value="<?php echo $city;?>"type="text"/>
                <span class="error">* <?php echo $cityErr;?></span>
            </div>
        </fieldset>   
    
    </div> <!--einde form-family 2 -->

    

    

    
    <!-- Beschrijving -->
    <fieldset>
        <div class="form-group">
            <label>Beschrijving </label>
            <textarea form ="add_gig_form" autocomplete="off" autofocus class="form-control" name="description" 
            placeholder="Schrijf hier een korte pakkende tekst die de lezer wat informatie verschaft over het optreden. Noem eventuele gasten en bijzonderheden..." type="text"></textarea>
            <span class="error">* <?php echo $descriptionErr;?></span>
        </div> 
    </fieldset>

    
    <!--TODO upload image -->

    
    <!-- Submit button -->
    <div class="form-group">
        <button class="btn btn-default" type="submit"> Submittt </button>
   </div>
   
</form>
<?php
echo "<h2>Your Input:</h2>";
echo $gigtitleErr;
echo "<br>";
echo $dateErr;
echo "<br>";
echo $locationErr;
?> 

</div>  

         







