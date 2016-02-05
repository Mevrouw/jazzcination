<!DOCTYPE html>

<html>

    <head>

        <link href="/css/bootstrap.min.css" rel="stylesheet"/> 
        <link href="/css/bootstrap-theme.min.css" rel="stylesheet"/>
        <link href="/css/styles.css" rel="stylesheet" type="text/css"/>  
        <style type="text/css"></style>
        <link rel="shortcut icon" href="../afbeeldingen/favicon-noot.ico" type="image/png"/>

        <?php if (isset($title)): ?>
            <title>Jazzcination: <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>Jazzcination-home</title>
        <?php endif ?>

        <script src="/js/jquery-1.11.1.min.js"></script>
        -<script src="/js/bootstrap.min.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
        <script src="/js/scripts.js"></script>

    </head>

    <body>

        <div class="container"> <!--Begin containter --> 
            <div id="header">
                <ul class="topnav">
                    <li><a href="contact.html"> contact</a></li>
                    <li> repertoire</li>
                    <li> links</li>
                </ul>
  
                <div id="logo"></div>    

                <div id="mainnav">
                    <ul>
                        <li><a href="index.php">Home</a></li>
                        <li><a href="bandleden.php">band</a></li>
                        <li><a href="arrangeurs.php">arrangeurs</a></li>
                        <li><a href="agenda.php">agenda</a></li>
                    </ul>
                </div> 
            </div>
            
        <div id="content"> <!--Begin content -->
            
          
         
  

