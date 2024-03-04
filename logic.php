<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>In Between Card Game</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=ABeeZee:ital@0;1&display=swap" rel="stylesheet">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        body {
        background-image: url("bground\ \(7\).png");
        background-size: 90%;
        background-position-x: 47% ;
        font-family: "ABeeZee", sans-serif;
        font-weight: 400;
        font-size: 17px;
        font-style: normal;
        color: white;
}
.container {
            display: flex;
            justify-content: flex-end; /* Align content to the right */
            margin-right: -10%;
            margin-top: 30px;
            align-items: center; /* Center content vertically */
            height: 100vh; /* Set height to viewport height */
            padding-right: 20px; /* Add some padding to the right for spacing */
        }
        .content {
            max-width: 1000px; /* Limit the width of the content */
            margin: 0 auto; /* Center the content horizontally */
        }
        .card-img {
            width: 170px;
            height: 240px;
        }
        .btn-group {
            margin-top: 10px;
        }
        .center {
            text-align: center;
        }

        .betform {
        background-color: #ffffff; /* White background */
        padding: 20px; /* Add some padding */
        border-radius: 8px; /* Add rounded corners */
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Add a subtle shadow */
        max-width: 500px; /* Limit width */
        margin: 0 auto; /* Center the container */
        margin-top: -80px;
    }

    .bet-form {
        margin-bottom: 0; /* Remove margin bottom from the form */
    }

    .bet-button {
    align-items: center;
  appearance: none;
  background-color: #800000;
  border-radius: 50px;
  border-width: 0;
  box-shadow: rgba(45, 35, 66, 0.4) 0 2px 4px,rgba(45, 35, 66, 0.3) 0 7px 13px -3px,#610404 0 -3px 0 inset;
  box-sizing: border-box;
  cursor: pointer;
  display: inline-flex;
  font-family: "ABeeZee", sans-serif;
  color: white;
  height: 48px;
  justify-content: center;
  line-height: 1;
  list-style: none;
  overflow: hidden;
  padding-left: 16px;
  padding-right: 16px;
  position: relative;
  text-align: left;
  text-decoration: none;
  transition: box-shadow .15s,transform .15s;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  white-space: nowrap;
  will-change: box-shadow,transform;
  font-size: 15px;
}

.bet-button:focus {
  box-shadow: #610404 0 0 0 1.5px inset, rgba(45, 35, 66, 0.4) 0 2px 4px, rgba(45, 35, 66, 0.3) 0 7px 13px -3px, #610404 0 -3px 0 inset;
}

.bet-button:hover {
  box-shadow: rgba(45, 35, 66, 0.4) 0 4px 8px, rgba(45, 35, 66, 0.3) 0 7px 13px -3px, #610404 0 -3px 0 inset;
  transform: translateY(-2px);
}

.bet-button:active {
  box-shadow: #610404 0 3px 7px inset;
  transform: translateY(2px);
}


    .form-floating label
    {
        color: black;
    }
    .hide {
        display: none;
    }
    #header {
        position: absolute; /* Position the image absolutely */
        top: 60px; /* Align to the top of tshe page */
        left: auto; /* Align to the left of the page */
        right: 980px;
        z-index: 9998; /* Set a high z-index to ensure it's on top of other content */
        width: 250px;
        height: auto;
    }
    .clickable-text {
        position: absolute;
        top: 26px; /* Adjust top position as needed */
        left: 1365px; /* Adjust left position as needed */
        margin-right: -100px; /* Adjust margin-right as needed */
        z-index: 9999; /* Ensure it's on top of other content */
        font-family: "ABeeZee", sans-serif;
        font-size: 20px;
        color: white;
        cursor: pointer; /* Change cursor to pointer to indicate interactivity */
    }
    .restart-button {
            position: absolute;
            top: 2px;
            right: 180px;
            align-items: center;
  appearance: none;
  background-color: #FCFCFD;
  border-radius: 50px;
  border-width: 0;
  box-shadow: rgba(45, 35, 66, 0.4) 0 2px 4px,rgba(45, 35, 66, 0.3) 0 7px 13px -3px,#D6D6E7 0 -3px 0 inset;
  box-sizing: border-box;
  cursor: pointer;
  font-family: "ABeeZee", sans-serif;
  color: black;
  height: 48px;
  line-height: 1;
  list-style: none;
  overflow: hidden;
  padding-left: 16px;
  padding-right: 16px;
  text-align: left;
  text-decoration: none;
  transition: box-shadow .15s,transform .15s;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  white-space: nowrap;
  will-change: box-shadow,transform;
  font-size: 15px;
        }
        
.restart-button:focus {
    box-shadow: #D6D6E7 0 0 0 1.5px inset, rgba(45, 35, 66, 0.4) 0 2px 4px, rgba(45, 35, 66, 0.3) 0 7px 13px -3px, #D6D6E7 0 -3px 0 inset;
}

.restart-button:hover {
    color: black;
    background-color: #FCFCFD;
    box-shadow: rgba(45, 35, 66, 0.4) 0 4px 8px, rgba(45, 35, 66, 0.3) 0 7px 13px -3px, #D6D6E7 0 -3px 0 inset;
  transform: translateY(-2px);

}

.restart-button:active {
    box-shadow: #D6D6E7 0 3px 7px inset;
  transform: translateY(2px);

}
        .game-buttons {
            font-family: "Open Sans", sans-serif;
  font-size: 16px;
  letter-spacing: 2px;
  text-decoration: none;
  text-transform: uppercase;
  color: #000;
  cursor: pointer;
  border: 3px solid;
  padding: 0.25em 0.5em;
  box-shadow: 1px 1px 0px 0px, 2px 2px 0px 0px, 3px 3px 0px 0px, 4px 4px 0px 0px, 5px 5px 0px 0px;
  position: relative;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
        margin-right: 10px; /* Add margin between buttons */
    }

    .game-buttons:active {
  box-shadow: 0px 0px 0px 0px;
  top: 5px;
  left: 5px;
}

@media (min-width: 768px) {
  .button-54 {
    padding: 0.25em 0.75em;
  }
}
    

    .game-buttons:hover {
        background-color: #D1D1D1; /* Darker green on hover */
    }
        .game-info {
        position: absolute;
        top: 20px;
        left: 20px;
        text-align: left;
        font-family: "ABeeZee", sans-serif;
        font-size: 18px;
        color: white;
    }
    
</style>
    </style>
</head>
<body>
<img id="header" src="header.png" alt="header">
<p class="clickable-text" id="main-menu-link">MAIN MENU</p>

<div class="container">
    <div class="content">

<?php

// Function to generate a random card number
function generateRandomCard() {
    return mt_rand(2, 14);
}

// Function to display card image based on card number
function displayCardImage($cardNumber) {
    $imagePath = "img/";

    $cardImages = array(
        2 => "2.png",
        3 => "3.png",
        4 => "4.png",
        5 => "5.png",
        6 => "6.png",
        7 => "7.png",
        8 => "8.png",
        9 => "9.png",
        10 => "10.png",
        11 => "jack.png",
        12 => "queen.png",
        13 => "king.png",
        14 => "1.png"
    );

    if (array_key_exists($cardNumber, $cardImages)) {
        $imageName = $cardImages[$cardNumber];
        echo "<img src='" . $imagePath . $imageName . "' alt='Card $cardNumber' width='170' height='240' margin-right='10px'>";
    } else {
        echo "Invalid card number";
    }
}

// Function to display two cards
function displayCards($card1, $card2) {
    displayCardImage($card1);
    displayCardImage($card2);
    echo "<br>";
}

// Function to play the game
function playGame($bet, &$totalPoints) {
    if (!isset($_SESSION['round'])) {
        $_SESSION['round'] = 1;
    }

    $round = $_SESSION['round'];

    echo "<div style='text-align: center;'>"; 
        
    echo "<div class='game-info'>";
    echo "<div>Round " . $round . "</div>";
    echo "<div>Current Balance: " . $totalPoints . "</div>";
    echo "</div>";
    
    if (!isset($_SESSION['card1']) || !isset($_SESSION['card2'])) {
        $_SESSION['card1'] = generateRandomCard();
        $_SESSION['card2'] = generateRandomCard();
    }

    $card1 = $_SESSION['card1'];
    $card2 = $_SESSION['card2'];


    if ($card1 == $card2) {
        echo "<form method='post'>";
        echo "<input type='hidden' name='card1' value='$card1'>";
        echo "<input type='hidden' name='card2' value='$card2'>";
        echo "<input type='hidden' name='bet' value='$bet'>";
        echo "<br>";
        echo "<button type='submit' name='option' value='HIGHER' class='game-buttons'>HIGHER</button>";
        echo "<button type='submit' name='option' value='LOWER' class='game-buttons'>LOWER</button>";
        echo "</form>";
        echo "<br>";

    } else {
        echo "<form method='post'>";
        echo "<input type='hidden' name='card1' value='$card1'>";
        echo "<input type='hidden' name='card2' value='$card2'>";
        echo "<input type='hidden' name='bet' value='$bet'>";
        echo "<br>";
        echo "<button type='submit' name='option' value='DEAL' class='game-buttons'>DEAL</button>";
        echo "<button type='submit' name='option' value='NODEAL' class='game-buttons'>NO DEAL</button>";
        echo "</form>";
        echo "<br>";

    }

    displayCards($card1, $card2);

    echo "</div>"; 

    if (isset($_POST['option'])) {
        if ($_POST['option'] == "HIGHER" || $_POST['option'] == "LOWER" || $_POST['option'] == "DEAL" || $_POST['option'] == "NODEAL") {
            $_SESSION['thirdCard'] = generateRandomCard();
            $thirdCard = $_SESSION['thirdCard'];
    
            displayCardImage($thirdCard);
            echo "<br><br>";
    
            if ($_POST['option'] == "HIGHER" || $_POST['option'] == "LOWER") {
                if (($thirdCard > $card1 && $_POST['option'] == "HIGHER") || ($thirdCard < $card1 && $_POST['option'] == "LOWER")) {
                    echo "<script>alert('Congratulations for winning the JACKPOT!');";
                    echo "document.querySelectorAll('.game-buttons').forEach(function(button) { button.style.display = 'none'; });</script>";
                    $totalPoints += 1000000 + $bet; // Earn 1000000 plus bet back
                } else {
                    echo "<script>alert('Sorry, you LOSE the round!');";
                    echo "document.querySelectorAll('.game-buttons').forEach(function(button) { button.style.display = 'none'; });</script>";
                    $totalPoints -= $bet; // lose bet
                }
            } elseif ($_POST['option'] == "DEAL") {
                if (($card1 < $thirdCard && $thirdCard < $card2) || ($card1 > $thirdCard && $thirdCard > $card2)){
                    $totalPoints += 2 * $bet; // earn 2x bet
                    echo "<script>alert('Congratulations, you won the round!');";
                    echo "document.querySelectorAll('.game-buttons').forEach(function(button) { button.style.display = 'none'; });</script>";
                } else {
                    echo "<script>alert('Sorry, you LOSE the round!');";
                    echo "document.querySelectorAll('.game-buttons').forEach(function(button) { button.style.display = 'none'; });</script>";
                    $totalPoints -= $bet; // lose bet
                }
            } elseif ($_POST['option'] == "NODEAL") {
                echo "<script>alert('Sorry, you LOSE the round!');";
                echo "document.querySelectorAll('.game-buttons').forEach(function(button) { button.style.display = 'none'; });</script>";
                $totalPoints -= 0.5 * $bet; // lose half of the bet
            } else {
                echo "Invalid option!";
            }
    
            // Unset card values after round completion
            unset($_SESSION['card1']);
            unset($_SESSION['card2']);
            unset($_SESSION['thirdCard']);
     
            $_SESSION['round']++;
    
            // If session round exceeds 10, game over
// If session round exceeds 10, game over
if ($_SESSION['round'] > 10) {
    // Unset round session
    unset($_SESSION['round']);

    // Check the total points and display an appropriate alert
    if ($totalPoints < 0) {
        echo "<script>alert('Game over! Your final score is $totalPoints.');</script>";
        // Redirect after showing the alert
        echo "<script>window.location.href = 'gameover.php';</script>";
        exit; // Make sure to exit after the redirection
    } elseif ($totalPoints >= 0) {
        echo "<script>alert('Congratulations! You won the game with a final score of $totalPoints.');</script>";
        // Redirect after showing the alert
        echo "<script>window.location.href = 'gameover-win.php';</script>";
        exit; // Make sure to exit after the redirection
    } else {
        echo "<script>alert('Game over! Your final score is $totalPoints.');</script>";
        // Redirect after showing the alert
        echo "<script>window.location.href = 'gameover.php';</script>";
        exit; // Make sure to exit after the redirection
    }
}



        }
    }

}















echo "<div style='text-align: center;'>"; 
echo "In Between Card Game<br>";

$totalPoints = 0;
if (isset($_SESSION['totalPoints'])) {
    $totalPoints = $_SESSION['totalPoints'];
} else {
    // Set initial total points to 500
    $_SESSION['totalPoints'] = 500;
    $totalPoints = $_SESSION['totalPoints'];
}

if (isset($_POST['bet'])) {
    $bet = intval($_POST['bet']);
} else {
    $bet = 0; 
}

echo "<form method='post'>";
echo "<div class='betform'>";
echo "<div class='form-floating mb-3'>";
echo "<input type='number' class='form-control' id='bet' name='bet' min='1' placeholder='Enter your bet'>";
echo "<label for='bet'>Enter your bet</label>";
echo "</div>";
echo "<button type='submit' class='bet-button'>CONFIRM BET</button>";
echo "<br>";
echo "</div>";
echo "</form>";

echo "<form method='post' onsubmit='return confirmRestart()'>";
echo "<button type='submit' name='restart' class='btn btn-danger mt-3 restart-button'>RESTART GAME</button>";
echo "</form>";

if (isset($_POST['restart'])) {
    unset($_SESSION['round']);
    unset($_SESSION['totalPoints']);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['bet'])) {
    playGame($bet, $totalPoints);
    $_SESSION['totalPoints'] = $totalPoints;
}

echo "</div>"; 
?>

</div>
</div>

<script>
        function confirmRestart() {
        return confirm("Are you sure you want to restart the game?");
    }

    document.getElementById("main-menu-link").addEventListener("click", function() {
    // Reset rounds and total points to 0
    localStorage.setItem("rounds", 0);
    localStorage.setItem("total_points", 0);

    // Navigate back to index.php
    window.location.href = "index.php";
});

</script>
</body>
</html>
