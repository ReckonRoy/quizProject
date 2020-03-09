<?php session_start(); ?>
<?php
$subject = "";
$answer ="";
$score = 0;
$group;
//track current question
$track_q_count = 1;

$correct = array(

    '1' => "",
    '2' => "",
    '3' => "primary, secondary and tertiary",
    '4' => "",
    '5' => "",
    '6' => "",
    '7' => "",
    '8' => "uses the goods but pays later.",
    '9' => "",
    '10' => "providing small quantities of goods to consumers",
    '11' => "",
    '12' => "",
    '13' => "",
    '14' => "buying and selling shares for clients",
    '15' => "",
    '16' => "",
    '17' => "",
    '18' => "",
    '19' => "invoice",
    '20' => "",
    '21' => "",
    '22' => "",
    '23' => "",
    '24' => "its weight",
    '25' => "",
    '26' => "the mass per unit volume",
    '27' => "",
    '28' => "",
    '29' => "dull black",
    '30' => "",
    '31' => "",
    '32' => "",
    '33' => "",
    '34' => "",
    '35' => "the energy used to drive charge through the resistance of the cell",
    '36' => "",
    '37' => "",
    '38' => "",
    '39' => "the number of neutrons and protons",
    '40' => "",
    '41' => "",
    '42' => "",
    '43' => "lactic acid",
    '44' => "",
    '45' => "",
    '46' => "They are stimulants.",
    '47' => "",
    '48' => "",
    '49' => "",
    '50' => "",
    '51' => "photsynthesis and respitation",
    '52' => "",
    '53' => "it helps food pass through the gut",
    '54' => "",
    '55' => "",
    '56' => "The cell contains a single large sap vacuole space",
    '57' => "",
    '58' => "",
    '59' => "",
    '60' => "",
    '61' => "",
    '62' => "as an electrode and as a lubricant",
    '63' => "",
    '64' => "by giving one pair of electrons to the oxygen atom",
    '65' => "",
    '66' => "",
    '67' => "",
    '68' => "",
    '69' => "",
    '70' => "a soluble acid with an insoluble base",
    '71' => "",
    '72' => "",
    '73' => "",
    '74' => "",
    '75' => "The manufacture of margarine from unsaturated vegetable oils",
    '76' => "",
    '77' => "",
    '78' => "",
    '79' => "sodium",
    '80' => "",
    '81' => "",
    '82' => "When the air resistance equals the weight of the object",
    '83' => "",
    '84' => "a gravitational field",
    '85' => "",
    '86' => "",
    '87' => "",
    '88' => "",
    '89' => "",
    '90' => "",
    '91' => "Using the same material for the ball so that it has lower density but the same mass",
    '92' => "",
    '93' => "",
    '94' => "The car slows down",
    '95' => "",
    '96' => "",
    '97' => "",
    '98' => "mass x velocity",
    '99' => "",
    '100' => ""
);

function markQuestion($correct_key_answer, $answerKey, $mark)
        {
            foreach( $correct_key_answer as $selection)
            {
                if( $selection == $answerKey)
                {
                    $mark++;
                }
            }
        }

//Questions and answers array. contains data that represent questions and answers
$QA = array(
    'Commerce' => array(
        
     'What are the three stages of production?' => array(
         '1' => "importing, manufacturing and exporting",
         '2' => "manufacturing, wholesaling and retailing",
         '3' => "primary, secondary and tertiary",
         '4' => "selling, buying and distribution"
     ),
     'Using credit means that the customer' => array(
         '5' => "always pays extra for the goods.",
         '6' => "gets goods repaired for nothing.",
         '7' => "obtains discount on goods.",
         '8' => "uses the goods but pays later."
     ),
     'Which service is provided by wholesalers to manufacturers?' => array(
        '9' => "manufacturing goods for customers",
        '10' => "providing small quantities of goods to consumers",
        '11' =>"selling goods in bulk to wholesalers",
        '12' => "supplying raw materials to manufacturers"),
     
     'What is the function of a broker in international trade?' => array(
         '13' => "bringing buyers and sellers together",
         '14' => "buying and selling shares for clients",
         '15' => "guaranteeing payment for goods",
         '16' => "warehousing the principal’s goods awaiting sale"
     ),
        
     'Which document shows a summary of transactions taking place between a trader and a customer
     during a month?' => array(
         '17' => "advice note",
         '18' => "catalogue",
         '19' => "invoice",
         '20' => "statement of account"
     )),
    
    'Science' => array(
        'Which property of a spacecraft is zero when it travels through outer space after leaving earth\'s gravitational field' => array(
           '21' => "its density",
           '22' => "itsw energy",
           '23' => "its mass",
           '24' => "its weight"
        ),
        
        'Which of the following describes the density of a material' => array(
            '25' => "the amount of matter in the material",
            '26' => "the mass per unit volume",
            '27' => "the pull of gravity on the material",
            '28' => "the volume per unit mass of the material"
        ),
        
        'Which surface is the best emitter of heat rediation' => array(
            '29' => "dull black",
            '30' => "dull white",
            '31' => "shiny black",
            '32' => "shiny white"
        ),
        
        'Which of the following describes the e.m.f of a cell' => array(
            '33' => "the difference in energy between that needed to drive unit charge through the load resistors and through the cell",
            '34' => "the energy used to drive unit charge through all the load resistors in the circuit",
            '35' => "the energy used to drive charge through the resistance of the cell",
            '36' => "the total energy used to drive unit charge round the complete circuit"
        ),
        
        'What is the nucleon number(mass number) of a nuclide' => array(
            '37' => "the number of neutrons",
            '38' => "the number of protons",
            '39' => "the number of neutrons and protons",
            '40' => "the number of protons and electrons"
        )),
        
        'Biology' => array(
            'Which substance builds up up in a muscle as a result of anaerobic respiration' => array(
                '41' => "carbon dioxide",
                '42' => "ethanol",
                '43' => "lactic acid",
                '44' => "water"
            ),
            'Which statement is true of both alcohol and heroin?' => array(
                '45' => "Their use can lead to habitual criminal behavior",
                '46' => "They are stimulants.",
                '47' => "They are usually taken by injection.",
                '48' => "They produce mid withdrawal symptoms."
            ),
            
            'Which processes return carbon dioxide into the air' => array(
                '49' => "cumbustion and feeding",
                '50' => "feeding and photsynthesis",
                '51' => "photsynthesis and respitation"
            ),
            
            'Why is it important to include fibre in the diet' => array(
                '52' => "it gives energy to keep the body warm",
                '53' => "it helps food pass through the gut",
                '54' => "it increases growth in young children",
                '55' => "it is easy to digest"
            ),
            
            'A new cell is being examined.'
            . '<br> which feature would enable you to identify it as a plant cell or an animal cell?' => array(
                '56' => "The cell contains a single large sap vacuole space",
                '57' => "The cell contains glucose and amino acids",
                '58' => "The cell contains stored fat",
                '59' => "The cell surface membrane is partially permeable"
            )),
        
            'Chemistry' => array(
            'For which of the following can graphite be used?' => array(
                '60' => "as an abrassive only",
                '61' => "as an abrasive and as an electrode",
                '62' => "as an electrode and as a lubricant",
                '63' => "as a lublicant only"
            ),
            
            'How does a magnesium atom form a bond with an oxygen atom?' => array(
                '64' => "by giving one pair of electrons to the oxygen atom",
                '65' => "by sharing one pair of electrons, both electrons provided by the magnesium atom",
                '66' => "by sharing two pairs of electrons, both pairs provieded by the oxygen atom",
                '67' => "by sharing two pairs of electrons, each atom donating one pair of electrons",
            ),
                
            'Salts are made by reacting acids with bases.'
                . '<br><br>For which combination of acids and bases is the titration method of preparation is suitable?' => array(
                '68' => "an insoluble acid with an insoluble base",
                '69' => "an insoluble acid with a soluble base",
                '70' => "a soluble acid with an insoluble base",
                '71' => "a soluble acid with a soluble base"
                ), 
            'In which process is a catalyst not used?' => array(
                '72' => "The blast furnace for the manufacture of iron",
                '73' => "The contact proces for the manufacture of sulpheric acid.",
                '74' => "The Haber process for the manufacture of ammonia.",
                '75' => "The manufacture of margarine from unsaturated vegetable oils"
            ),
                
            'The carbinate of metal X is white solid. It decomposes when heated. Carbon dioxide and a yellow solid oxide are formed.'
                . '<br><br>What is metal X?' => array(
                    '76' => "copper",
                    '77' => "iron",
                    '78' => "lead",
                    '79' => "sodium"
            )),
    
            'Physics' => array(
            'When does an object falling verticaly through the air reach terminal velocity?' => array(
                '80' => "When the acceleration of the object becomes negative",
                '81' => "When the acceleratrion of the object is equal to g",
                '82' => "When the air resistance equals the weight of the object",
                '83' => "When the air resistance is greater than the weight of the object"
            ),
                
            'An object always has mass but does not always have weight.'
                . '<br><br>What must be present and acting on the mass for it to have weight?' =>array(
                 '84' => "a gravitational field",
                 '85' => "a set of scales",
                 '86' => "displaced water",
                 '87' => "friction due to air resitance"
            ),
                
            'A force acting on a moving ball cuases its action to change. This force stays constant.'
                . '<br><br> What makes the force produce a greater change in the motion of the ball?' => array(
                    '88' => "Decreasing the total mass of the ball",
                    '89' => "Increasing the total mass of the ball",
                    '90' => "Using a ball with a hollow center but the same mass",
                    '91' => "Using the same material for the ball so that it has lower density but the same mass"
                ),
                
            'A car is moving in a straight line on a level road. Its engine provides a forward force on the car. A'
            .'second force of equal size acts on the car due to resistive forces.'
            . '<br><br>Which statement desribes what happens?' => array(
                '92' => "The car changes direction",
                '93' => "The car moves at a constant speed",
                '94' => "The car slows down",
                '95' => "The car speeds up"
            ),
                
            'Which expression gives the momentum of an object?' => array(
                '96' => "Mass x acceleration",
                '97' => "Mass x gravitation field strength",
                '98' => "mass x velocity",
                '99' => "1/2 * maass * (velocity * velocity)"
            )
            ) 
    );
?>
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
                
                
                    
                <div id="header_text"><!-- div for the header text-->
                    <h1><?php echo $subject; ?></h1>
                </div><!-- div header text ends here -->
            </div><!-- End of header-->
            
<!------------------------------------------------------------------------------------------------------->            

<!--------------------------------------------Nav construction goes here------------------------------------>
<div>
    
</div>
<!-------------------------------------------------------------------------------------------------------->
        
<!--------------------------------------------Main construction goes here--------------------------------->        
<div id="main">
    
    
<div class="qp_d"><!-- question parent div -->
        
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST" >
<?php

    //iterate through multidimensional array
        //with each iteration load next until you reach last key and load its value
        foreach($QA as $subjects_key => $question)
        {
           
                //keep track of current subject represinting questionnaire
                //this will help with loading quiz questions
                $subject = $subjects_key;
                
                //grab question key inorder to return posion of current question
                foreach($question as $question_key => $answer)
                {
                ?>        
                    <ul>
                    <li><h2><?php echo $question_key ?></h2></li>
                    </ul>
                <?php
                    //switch between question key values
                    switch($track_q_count)
                    {
                        case 1: $group = "first";
                            break;
                        case 2: $group = "second";
                            break;
                        case 3: $group = "third";
                            break;
                        case 4: $group = "fourth";
                            break;
                        case 5: $group = "fifth";
                            break;
                        case 6: $group = "sixth";
                            break;
                        case 7: $group = "seven";
                            break;
                        case 8: $group = "eight";
                            break;
                        case 9: $group = "nine";
                            break;
                        case 10: $group = "ten";
                            break;
                        case 11: $group = "eleven";
                            break;
                        case 12: $group = "twelve";
                            break;
                        case 13: $group = "thirteen";
                            break;
                        case 14: $group = "fourteen";
                            break;
                        case 15: $group = "fifteen";
                            break;
                        case 16: $group = "sixteen";
                            break;
                        case 17: $group = "seventeen";
                            break;
                        case 18: $group = "eighteen";
                            break;
                        case 19: $group = "ninteen";
                            break;
                        case 20: $group = "twenty";
                            break;
                        case 21: $group = "twentyone";
                            break;
                        case 22: $group = "twentytwo";
                            break;
                        case 23: $group = "twentythree";
                            break;
                        case 24: $group = "twentyfour";
                            break;
                        case 25: $group = "twentyfive";
                            break;
                    }
                    
                    //increment $track_q_count. this automates grouping answers and prevents the program from selecting multiple answers
                    $track_q_count++;
                    
                    foreach($answer as $answer_key => $value)
                    {
                        ?>
                            <div id="ac_d"><!-- answer child div-->
                            <ul>
                                <li><input type="radio" name="<?php echo $group; ?>" value="<?php echo $answer_key; ?>"><?php echo $value; ?></li>
                            </ul>
                            </div><!-- close answer child div-->
                        <?php
                        
                        //check if answer is correct
                        //if answer is correct increment score
                        
                        if(isset($_POST[$group]))
                        {
                            $myanswer = $_POST[$group];
                            echo $myanswer;
                            foreach($correct as $ca => $ca_v)
                            {
                                echo $ca;
                                if($ca == $myanswer && $ca_v != "")
                                {
                                    $score++;
                                }
                                
                                if($ca == 100)
                                {
                                    header('Location: result.php');
                                }
                            }
                            
                            break;
                        }
                        
                    }
                }
            }    
        
            
        
 ?>
        <center><input type="submit" value="submit" ><input type="button" value="review score" onclick="reviewScore();"></center>
    
    </form>
  
    <?php
        
            $_SESSION['user_score'] = $score;
    ?>
</div><!-- Close main -->
<!-------------------------------------------------------------------------------------------------------->
        </div><!-- close container tag-->
        
            <script type="text/javascript">
                function reviewScore()
                {
                    document.location.href = "result.php";
                }
               
               
            </script>
    </body>
</html>