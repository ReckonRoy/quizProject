<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Brain Quiz</title>
        <link rel="stylesheet" href="css/quiz.css" type="text/css">
        
    </head>
    <body>
        <div id="container"><!-- container begins here-->
       
            <div id="header"><!-- header begins here-->
                <div id="header_img">
                    <img src="img/commerce.jpg" alt="An image illustrating commerce">
                </div>
                
                <div id="trace_page">page: 1/4</div><!-- this div is responsible for pagination-->
                    
                <div id="header_text"><!-- div for the header text-->
                    <h1>COMMERCE</h1>
                </div><!-- div header text ends here -->
            </div><!-- End of header-->
            
<!------------------------------------------------------------------------------------------------------->            

<!--------------------------------------------Nav construction goes here------------------------------------>
<div>
    
</div>
<!-------------------------------------------------------------------------------------------------------->
        
<!--------------------------------------------Main construction goes here--------------------------------->        
<div id="main">
    <?php
        //$QACommerce -> questions and answers array
        $QACommerce = array(array("What is the main function of a retailer?",
                                "Mrs Lee wishes to buy new clothes for the summer."
                            . " <br?<br><ul><li>Which is an advantage to Mrs Lee of buying them from a multiple <br>chain store rather than from a
                                factory shop?<li></ul>",
                                "Using credit means that the customer",
                                "Which service is provided by wholesalers to manufacturers?"),
                          array("manufacturing goods for customers",
                              "providing small quantities of goods to consumers",
                              "selling goods in bulk to wholesalers",
                              "supplying raw materials to manufacturers"),
                          array("car parking", "cheaper prices", "choice of brands", "free delivery"),
                          array("always pays extra for the goods.",
                                "gets goods repaired for nothing.",
                                "obtains discount on goods.",
                                "uses the goods but pays later."),
                          array("forecasting the likely changes in the market",
                                "giving information on record-keeping",
                                "operating a cash-and-carry facility",
                                "providing a wide range of goods")
            );
        $groupControl = array("controla", "controlb", "controlc", "controld");
        
    ?>
    
    <?php 
        $tag_count = 0;
        while( $tag_count < 4)
        {
    ?>
    <div class="qp_d"><!-- question parent div -->
        <ul>
            <li><h2>Question 1</h2></li>
        </ul>
        <div id="ac_d"><!-- answer child div-->
            <ul>
                <li><input type="radio" value="group">answer1</li>
                <li><input type="radio" value="group">answer1</li>
                <li><input type="radio" value="group">answer1</li>
                <li><input type="radio" value="group">answer1</li>
            </ul>
        </div><!-- close answer child div-->
    </div><!-- close question parent div-->
    <?php
    $tag_count++;
        }
    ?>
</div><!-- Close main -->
<!-------------------------------------------------------------------------------------------------------->
        </div><!-- close container tag-->
    </body>
</html>