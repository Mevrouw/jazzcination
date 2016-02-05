<?php
        // configuration
    require("../includes/config.php"); 
    
    // SQL query
    $rows =     query("SELECT * FROM gigs WHERE playdate >= CURRENT_DATE() ORDER BY playdate DESC");
    $rowspast = query("SELECT * FROM gigs WHERE playdate < CURRENT_DATE() ORDER BY playdate DESC");
    
    
    
    
    // render portfolio
    render("agenda.php", ["rows" => $rows, "rowspast" => $rowspast, "title" => "Agenda"]);

?>


























//<?php
//$source = '2012-07-31';
//$date = new DateTime($source);
//echo $date->format('d.m.Y'); // 31.07.2012
//echo $date->format('d-m-Y'); // 31-07-2012
//?>
