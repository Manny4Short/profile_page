<!-- Create a simple profile page about yourself 
(use constants and variable to store information about yourself
 and echo them out on the page).
 -->

 <!-- ctrl + f5 to force refresh cache  -->
 <?php

 define('name','Emmanuel Udoh');
 define('course','Computer Science');
 $location = 'Lagos, Nigeria';
 $phone_number = 2349027673744;
 define('motto','Code everyday no matter how little it may be');
 $email = 'Emmanuel_au@yahoo.com';

 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href='style.css?v=1.1' rel='stylesheet'>
     <title>Profile Page</title>
 </head>
 <body>
     <h2>Simple Profile Page</h2>
     <div class='main-div'>
         <div class='left-div card'>
             <h1 style='color: gray'>Professional Details</h1>
            <img src="Emmanuel.jpg" alt="Emmanuel" style="width:95%; height:10%">
            <ul class='no-bullet'>
                <li><b>Name:</b> <i> <?php echo name ?> </i> </li>
                <li><b>Course Studied:</b> <i><?php echo course?></i></li>
                <li><b>Location :</b> <i> <?php echo $location?> </i> </li>
            </ul>            
            <p><button>Contact</button></p>
         </div>
         <div class='right-div card2'>         
             <h1>More Info</h1> 
             <hr>
             <ul class='no-bullet'>
                <li><b>Mobile_No:</b> <i> <?php echo '+' .$phone_number ?> </i> </li>           
                <li><b>Motto :</b><i><?php echo ' '. motto?> <i></li><br>
            </ul>
            <p><b><u>Other Hobbies:</u></b></p>
            <ul>
                <li>Football</li>
                <li>Music</li>
                <li>Travelling</li>            
            </ul>
            <h3><b><u>Contact Mail:</u></b></h3>
            <p> <a href='#'><?php echo $email  ?></a> for more details, inquirey or business opportunitiess</p>
        
         </div>

     </div>
     
 </body>
 </html>
