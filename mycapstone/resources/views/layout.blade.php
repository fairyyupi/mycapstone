<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAPSTONE</title>
    <style>
        /* CSS styling */
        body {
            background-color: #F1EAE7; 
            margin: 0;
            padding: 0; 
        }
        header {
            background-color: white; 
            padding: 30px;
            box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.1);
        }
        content {
            padding: 20px;
            color: #333;
        }
        .white-box {
            background-color: white;
            width: 700px;
            height: 400px;
            border: 2px;
            margin: 10px 20px 30px 40px;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .choose-text-container {
            margin-left: 20px;
        }
        .choose {
            margin-top: 10px;
        }
        .card-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }

        .card {
            background-color: #f0f0f0;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 50px;
            width: calc(30% - 15px);
            height: 150px;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
        .card img {
            max-width: 100%; 
            max-height: 100%; 
            display: block;
            margin-bottom: 5px;
        }
    </style>
</head>

<header>
</header>


<body>
    <div class="choose-text-container">
        <div class="choose">
            <h3>Choose Your Beverage!</h3> 
        </div>
    </div>
    <div class="white-box">
         <div class="card-container">
            <?php
            // Array of image paths for each card
            $imagePaths = array(
                "mycapstone/images/sprite.jpg",
                "mycapstone/images/botol.jpg",
                "mycapstone/images/youc.jpg",
                "mycapstone/images/pocari sweat.jpg",
                "mycapstone/images/fruit tea.jpg",
                "mycapstone/images/sosro.jpg"
            );
            foreach ($imagePaths as $path) {
                echo '<div class="card">';
                echo '<img src="'.$path.'" alt="Image">';
                echo '</div>';
        }
        ?>
        </div>
    </div>
</body>
