<?php

    // configuration
    require("../includes/config.php");
     
    
    // define variables and set to empty values
    $gigtitle =    $weekday =    $day =    $month =    $year =  $hour =    $minutes =    
    $location =    $website =    $street =    $number =    $city =    $description = $image_path = "";
    
    // in case form is submitted:
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    { 
    
        // validate entry
        if (empty($_POST["gigtitle"]) || empty($_POST["weekday"]) || empty($_POST["day"]) || empty($_POST["month"]) || empty($_POST["year"]) ||
            empty($_POST["hour"])     || empty($_POST["minutes"]) ||
            empty($_POST["location"]) || empty($_POST["website"]) || 
            empty($_POST["street"])   || empty($_POST["number"])  || empty($_POST["city"])|| empty($_POST["description"] ) || empty($_POST["image_path"])
            ){
                apologize ("Alle velden moeten ingevuld worden.\n"); 
             }   
            
        else{   
            $gigtitle = test_input($_POST["gigtitle"]);
            $weekday = test_input($_POST["weekday"]);
            $day = test_input($_POST["day"]);
            $month = test_input($_POST["month"]);
            $year = test_input($_POST["year"]);
            $hour = test_input($_POST["hour"]);
            $minutes = test_input($_POST["minutes"]);
            $location = test_input($_POST["location"]);
            $website = test_input($_POST["website"]);
            $street = test_input($_POST["street"]);
            $number = test_input($_POST["number"]);
            $city = test_input($_POST["city"]);
            $description = test_input($_POST["description"]);
            $image_path = test_input($_POST["image_path"]);

            // Some more error checking
            //$website = test_input($_POST["website"]);
            //if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
                //apologize ("Alle velden moeten ingevuld worden.");
                //echo "<script>history.go(-1) </script>;"; 
            //}
            
            // create numbered $month
            if ($month == "januari"){$month = 1;}
            if ($month == "februari"){$month = 2;}
            if ($month == "maart"){$month = 3;}
            if ($month == "april"){$month = 4;}
            if ($month == "mei"){$month = 5;}
            if ($month == "juni"){$month = 6;}
            if ($month == "juli"){$month = 7;}
            if ($month == "augustus"){$month = 8;}
            if ($month == "september"){$month = 9;}
            if ($month == "oktober"){$month = 10;}
            if ($month == "november"){$month = 11;}
            if ($month == "december"){$month = 12;}
          
            
            
            //create concatinted variables
            $playdate           = $year."-".$month."-".$day;
            $playtime           = $hour. $minutes;
            $playdatetime       = $year."-".$month."-".$day." ".$hour. $minutes; 
            $address            = $street." ".$number. ", ". $city;
            
            // TODO automate pictures
            
            
            // Check if weekday matches the date.
            $what_day = date("l", mktime(0 , 0, 0, $month, $day, $year));
            // translate what_day into dutch
            if ($what_day == "Monday"){$what_day = "maandag";}
            if ($what_day == "Tuesday"){$what_day = "dinsdag";}
            if ($what_day == "Wednesday"){$what_day = "woensdag";}
            if ($what_day == "Thursday"){$what_day = "donderdag";}
            if ($what_day == "Friday"){$what_day = "vrijdag";}
            if ($what_day == "Saturday"){$what_day = "zaterdag";}
            if ($what_day == "Sunday"){$what_day = "zondag";}
            if ($weekday !== $what_day)
            {
                echo("what_day = $what_day, weekday = $weekday, month = $month, day = $day, year = $year" );
                //apologize("Weekdag klopt niet met de datum. Kies een geldige datum.");
                return false;
            }
            
            // TODO check if date exists
            if(checkdate($month, $day, $year)===false)
            {
                apologize("Datum bestaat niet. Kies een geldige datum.");
                return false;
            }
            
 
        
        // TODO add values to the database
         $query = query("INSERT INTO gigs ( gigtitle,  weekday,  playdate,  playtime,  playdatetime, location,    website,   address,  description,  image_path) 
                                VALUES    ( ?,         ?,        ?,         ?,         ?,            ?,           ?,         ?,        ?,            ?    )"
                                          , $gigtitle, $weekday, $playdate, $playtime, $playdatetime, $location,   $website,  $address, $description, $image_path);
        
        // TODO send the user a succes message if query was succesfull
        if($query === false)
        {
            apologize("Er staad reeds een optreden gepland op deze datum en tijd! \n Kies een andere datum en/of tijd!");
        }
        else
        {
            require ("succes_add_gig.php");
        }
        
        }
    }
    
    // render empty form on GET request
    else 
   
        
    {
        $rows = query("SELECT id, image_name, image_path FROM img ");
        
        render("admin_add_gig.php", [   "title" => "admin", "rows" => $rows ]);
    }
        
        


        

        
    

    

    

    
    

?>
