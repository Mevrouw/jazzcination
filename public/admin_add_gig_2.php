<?php

    // configuration
    require("../includes/config.php"); 
    
    // define variables and set to empty values
    $gigtitle =    $day =    $date =    $month =    $hour =    $minutes =    $location =    $website =    $street =    $number =    $city =    $description ="";
    $gigtitleErr =           $dateErr =             $timeErr =               $locationErr =               $streetErr = $numberErr = $cityErr = $descriptionErr = "";   ;
    
    // in case form is submitted:
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {   
        // clean input and validate entry
        if (empty($_POST["gigtitle"])) {
          $gigtitleErr = "test";
          echo "<script>history.go(-1) </script>;";
        } else {
          $gigtitle = test_input($_POST["gigtitle"]);
        }
        
        if (empty($_POST["day"])) {
          $dateErr = "*";
          echo "<script>history.go(-1) </script>;";
        } else {
          $day = test_input($_POST["day"]);
        }
        
        if (empty($_POST["number"])) {
          $dateErr = "*";
        } else {
          $number = test_input($_POST["number"]);
        }
        
        if (empty($_POST["month"])) {
          $dateErr = "*";
        } else {
          $month = test_input($_POST["month"]);
        }
        
        if (empty($_POST["hour"])) {
          $timeErr = "*";
        } else {
          $hour = test_input($_POST["hour"]);
        }
        
        if (empty($_POST["minutes"])) {
          $timeErr = "*";
        } else {
          $minutes = test_input($_POST["minutes"]);
        }
        
         if (empty($_POST["location"])) {
          $locationErr = "*";
        } else {
          $location = test_input($_POST["location"]);
        }

        $website = test_input($_POST["website"]);
        
        if (empty($_POST["street"])) {
          $streetErr = "*";
        } else {
          $street = test_input($_POST["street"]);
        }
        
        if (empty($_POST["number"])) {
          $numberErr = "*";
        } else {
          $number = test_input($_POST["number"]);
        }
        
         if (empty($_POST["city"])) {
          $cityErr = "*";
        } else {
          $city = test_input($_POST["city"]);
        }
        
        if (empty($_POST["description"])) {
          $descriptionErr = "*";
        } else {
          $description = test_input($_POST["description"]);
        }
      
        // Some more error checking
        $website = test_input($_POST["website"]);
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
        $websiteErr = "Invalid URL";
        }
        
        //create:
        $playdate           = $day." ".$date." ".$month;
        $playtime           = $hour. $minutes;
        $address            = $street." ".$number. ",". $city;
    }
    
    
    
    else 
    {
        render("admin_add_gig.php", [   "title" => "admin" , 
                                        "gigtitle" => $gigtitle, 
                                        "gigtitleErr" => $gigtitleErr,
                                        "day" => $day,
                                        "date" => $date,
                                        "month" => $month,
                                        "hour" => $hour,
                                        "minutes" => $minutes,
                                        "location" => $location,
                                        "website" => $website,
                                        "street" => $street,
                                        "number" => $number,
                                        "city" => $city,
                                        "description" => $description,
                                        "dateErr" => $dateErr,
                                        "timeErr" => $timeErr,
                                        "locationErr" => $locationErr,
                                        "streetErr" => $streetErr,
                                        "numberErr" => $numberErr,
                                        "cityErr" => $cityErr,
                                        "descriptionErr" => $descriptionErr
                                        ]);
    }
        
        


    

    
        // validate entry
        //if (empty($_POST["title"]) || empty($_POST["day"]) || empty($_POST["date"]) || empty($_POST["month"]) ||
            //empty($_POST["hour"]) || empty($_POST["minutes"]) ||
            //empty($_POST["location"]) || empty($_POST["website"]) || 
            //empty($_POST["street"]) || empty($_POST["number"]) || empty($_POST["city"]) || empty($_POST["description"])
            //)
	    
	   
	        
	        //{   
	            // TODO : improve
	            // Alert user if not all required fiels are filled 
                //echo "<script type=\"text/javascript\"> window.alert('Alle velden moeten ingevuld worden.'); </script>"; 
                // Go back to the form.
                //echo "<script>history.go(-1) </script>;";
                //apologize ("Alle velden moeten ingevuld worden.");
            //}
        
     


        
        /* debugging:
        /* echo "title = '$title '</br>"; 
        echo "date = '$date '</br>";
        echo "time = '$time '</br>";
        echo "location_name = '$location_name '</br>";
        echo "location_website = '$location_website '</br>";
        echo "adres = '$address'</br>";
        echo "description = '$description'</br>"; */
        
        // TODO add values to the database
        // TODO send the user a succes message
        

        
    

    

    

    
    

?>
