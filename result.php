<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/result.css" type="text/css">
        <title>Congrats</title>
    </head>
    
    <body>
        
<!---------------------------------Web Page Container---------------------------------------->        
        <div id="container">
            
<!-------------- div main displays the results  for test quiz ---------------------------------->
            <div id="main">
                <p>Quiz Test Result For: <?php echo $_SESSION['user_session']?></p>
                <p>You have successfully completed the O'Level Quiz Show!</p>
                <?php
                if($_SESSION['user_score'] < 10)
                {
                ?>
                <p style="background-color: red; color: orange; font-size: 1.5em;">Your score is: <?php echo $_SESSION['user_score']; ?></p>
                <?php
                }else
                {
                ?>
                <p style="background-color: green; color: black; font-size: 1.5em;">Your score is: <?php echo $_SESSION['user_score']; ?></p>
                <?php
                }
                ?>
                <p>
                    
                    <?php
                        if($_SESSION['user_score'] > 10)
                        {
                            
                            if($_SESSION['user_score'] > 10 && $_SESSION['user_score'] < 15)
                            {
                                echo "Weldone. You scored an average pass<br>";
                            }elseif($_SESSION['user_score'] >= 15)
                            {
                                echo "Weldone. What a smart intelligent being you are<br>";
                            }
                      ?>
                    <img src="img/passed.jpg" alt="You Passed">
                    <?php
                            
                        } else {
                            echo "Sorry! Your mark is below the standard pass. Better Luck Next Time<br>";
                    ?>
                    
                        <img src="img/test_fail.jpg" alt="You failed" id="fail">
                    <?php
                        }
                        
                        session_unset();
                    ?>
                    
                </p>
            </div>
            
        </div>
<!------------------------------------------------------------------------------------------------------>        
    </body>
</html>
