<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Brain Quiz</title>
        <link rel="stylesheet" href="css/main.css" type="text/css">
        <link rel="stylesheet" href="css/phone.css" type="text/css">
    </head>
    <body>
        
        <div id="container"><!-- container begins here-->
            
            <div id="header"><!-- header begins here -->
                <div class="header-img">
                    <img src="img/brain-quiz.gif">
                </div>
                
                <div class="h1">
                    <h1>Test Your Knowledge</h1>
                </div>
            </div><!-- Header ends here -->
            
            <div id="nav"><!-- Nav begins here --> 
            
            </div><!-- Nav ends here-->
            
            <div id="main"><!-- main begins here-->
                <div id="username">                    
                    <form action="index.php" method="POST">
                        <label for="name">Name: </label>
                        <br>
                        <input type="text" name="name" required>
                        <br>
                        <label for="surname">Surname: </label>
                        <br>
                        <input type="text" name="surname" required>
                        <br>
                        <input type="submit" value="submit" required>
                        <input type="button" value="proceed>" onclick="relocate()">
                    </form>    
                </div>
                
            </div><!-- main ends here -->
                
            
            <div id="footer"><!-- footer tag begins here-->
                <ul>
                    <li><a href="#">About</a></li>
                    <li><a href="#">Help</a></li>
                    <li><a href="#">Contact</a></li>
                </ul>
            </div><!-- close footer tag-->
            
        </div><!-- close container tag-->
        <?php
                    $name = "";
                    $surname = "";
                    $username = "";
                    //function returns name and surname as username
                    function getUsername($n, $s)
                    {
                        $n;
                        $s;
                        
                        return $n." ".$s; 
                    }
                    
                    if(isset($_POST["name"]) && isset($_POST["surname"]))
                    {
                        if( !empty($_POST["name"]) && !empty($_POST["surname"]))
                        {
                            $name = $_POST["name"];
                            $surname = $_POST["surname"];
                            
                            $username = getUsername($name, $surname);
        
                         
                        }else{
                            ?><!-- Close php tag in order to use alert() warning message-->
                            <script type="text/javascript">
                                alert("Please fill name and surname fields.");
                            </script>
                        <?php
                        
                        }//Close else statement 
                    }//Close isset if() statement
                    
                    //manage sessions here
                    $proceed;
                    $_SESSION['user_session'] = $username;
                    $user_session = $_SESSION['user_session'];
                    if(!empty($user_session))
                    {
                        $proceed = "quiz.php";
                    } else {
                        $proceed = "index.php";
                    }
                    //end manage sessions 
                ?>
                            
                <script type="text/javascript">
                    function relocate()
                    {
                        $url = "<?php echo $proceed; ?>";
                        window.location.href = $url;
                        if($url == "index.php")
                        {
                            alert("Please fill in name and surname fields in order to proceed!");
                        }
                    }
                </script>
    </body>
</html>
