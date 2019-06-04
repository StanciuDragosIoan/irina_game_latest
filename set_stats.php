<?php
 
      //Orderus Initial Stats; 
      $orderus_initial_health  = rand(70,100);
      $orderus_initial_strength = rand(70, 80);
      $orderus_initial_defence = rand(45, 55);
      $orderus_initial_speed = rand(40, 50);
      $orderus_initial_luck = rand(10, 30);
  
       //Beast Initial Stats; 
       $beast_initial_health  = rand(60,90);
       $beas_initialt_strength = rand(60, 90);
       $beast_initial_defence = rand(40, 60);
       $beast_initial_speed = rand(40, 60);
       $beast_initial_luck = rand(25, 40);
  

     $first_attacker = '';

     //decide who attacks first
     if($orderus_initial_speed > $beast_initial_speed){
         $first_attacker = 'Orderus';
     } elseif($beast_initial_speed > $orderus_initial_speed){
        $first_attacker = 'Beast';
     } elseif($orderus_initial_speed === $beast_initial_speed){
         if($orderus_initial_luck > $beast_initial_luck){
            $first_attacker = 'Orderus';
         } elseif($beast_initial_luck > $orderus_initial_luck){
            $first_attacker = 'Beast';
         }
     }


     //Char stats before first attack
     
     
    //  $_SESSION["orderus_health"] = $orderus_initial_health;
    //  $orderus_health = $_SESSION["orderus_health"];

    

     //char stats after first attack
?>