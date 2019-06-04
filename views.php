<?php
    include('set_stats.php');
    $start_view = '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
        <title>Hero game</title>
    </head>
    <body>
        <div class="contaniner">
            <div class="row">
                <div class="col-sm-8 mx-auto mt-5">
                    <div class="card bg-info text-light">
                        <div class="card-body text-center ">
                           <h4>Welcome to the battle between the hero Orderus and the green beast!</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         
        <div class="container">
            <div class="row">
                <div class="col-sm-12 mt-5">
                    <h3 class="text-center">
                       Game starting... initializing characters...
                    </h3>
                </div>
            </div>
        </div>

        <div class="container fade-in">
            <div class="row">
                <div class="col-sm-12 mt-5">
                    <h3 class="text-center ">
                        Once upon a time there was a great hero, called Orderus, with some strengths and weaknesses,
                        as all heroes have.
                        After battling all kinds of monsters for more than a hundred years, Orderus was passing through
                        a forest and he met a weird monster. And their fate was to battle...
                    </h3>
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <form action="init_chars.php">
                <input type="submit" value="Battle" class="btn btn-warning font-weight-bold d-block m-auto">
            </form>
        </div>

    </body>
    </html>
    ';


    $start_battle_view = '
    <?php 
        session_start();
        if(!isset($_SESSION[\'orderus_health\']))
            $_SESSION[\'orderus_health\'] = rand(1,100);
            $orderus_health =  $_SESSION[\'orderus_health\'];
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
        <title>Hero game</title>
    </head>
    <body>
        <div class="contaniner">
            <div class="row mt-5 p-5">
                <div class="col-sm-6">
                    <div class="card">
                        <h4 class="text-center pt-2">Orderus\' stats</h4> 
                            <table class="table">
                            <thead class="text-center">
                                <tr>
                                <th scope="col">Attack</th>
                                <th scope="col">Defence</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <td>Strength:' . $orderus_initial_strength . '</th>
                                    <td>Health:' . $orderus_initial_health . '</td>
                                </tr>
                                <tr>
                                    <td>Speed:' . $orderus_initial_speed . '</th>
                                    <td>Defence:' . $orderus_initial_defence . '</td>
                                </tr>
                                <tr>
                                    <td>Luck:' . $orderus_initial_luck . '</th>
                                    <td></td>
                                </tr>
                            </tbody>
                            </table>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <h4 class="text-center pt-2">Beast\' stats</h4> 
                       
                        <table class="table">
                            <thead class="text-center">
                                <tr>
                                <th scope="col">Attack</th>
                                <th scope="col">Defence</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <td>Strength:' . $beast_initial_strength . '</th>
                                    <td>Health:' . $beast_initial_health . '</td>
                                </tr>
                                <tr>
                                    <td>Speed:' . $beast_initial_speed . '</th>
                                    <td>Defence:' . $beast_initial_defence . '</td>
                                </tr>
                                <tr>
                                    <td>Luck:' . $beast_initial_luck . '</th>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                 
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="row">
                <div class="col-sm-12 mt-5">
                    <h3 class="text-center">
                       Preparing for Battle
                    </h3>
                </div>
            </div>
        </div>

        <div class="container fade-in">
            <div class="row">
                <div class="hero col-sm-6">
                    <img src="images/hero.png" width="200" height="200" class="d-block mx-auto">
                </div>
                <div class="beast col-sm-6">
                    <img src="images/beast.png" width="200" height="200" class="d-block mx-auto">
                </div>
             </div>
        </div>

       
        <div class="container mb-5">
            <form action="battle.php">
                <input type="submit" value="Fight" class="btn btn-danger d-block m-auto">
            </form>
        </div>

    </body>
    </html>
    ';


    $first_attack_view = '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/main.css">
        <title>Hero game</title>
    </head>
    <body>
        <div class="contaniner">
            <div class="row mt-1 p-5">
                <div class="col-sm-6">
                    <div class="card">
                        <h4 class="text-center pt-2">Orderus\' stats</h4> 
                        <table class="table">
                            <thead class="text-center">
                                <tr>
                                <th scope="col">Attack</th>
                                <th scope="col">Defence</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <td>Strength: test </th>
                                    <td>Health: test </td>
                                </tr>
                                <tr>
                                    <td>Speed: test</th>
                                    <td>Defence: test</td>
                                </tr>
                                <tr>
                                    <td>Luck: test</th>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <h4 class="text-center pt-2">Beast\' stats</h4> 
                        <table class="table">
                            <thead class="text-center">
                                <tr>
                                <th scope="col">Attack</th>
                                <th scope="col">Defence</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                <tr>
                                    <td>Strength: test</th>
                                    <td>Health: test</td>
                                </tr>
                                <tr>
                                    <td>Speed: test</th>
                                    <td>Defence: test</td>
                                </tr>
                                <tr>
                                    <td>Luck: test</th>
                                    <td></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                 
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="text-center">
                       Fight!
                    </h3>
                    <h4 class="text-center">
                    ' . $first_attacker .' Attacks First
                    </h4>
                </div>
            </div>
        </div>

        <div class="container fade-in">
            <div class="row">
                <div class="hero col-sm-6">
                    <img src="images/hero.png" width="200" height="200" class="d-block mx-auto">
                </div>
                <div class="beast col-sm-6">
                    <img src="images/beast.png" width="200" height="200" class="d-block mx-auto">
                </div>
             </div>
        </div>

       
        <div class="container mb-5">
            <form action="battle.php">
                <input type="submit" value="Attack" class="btn btn-warning font-weight-bold d-block m-auto">
            </form>
        </div>
         
        \' .\'<br>'. $orderus_health .'
    </body>
    </html>
    ';

?>