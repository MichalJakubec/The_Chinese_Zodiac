<html>
    <head>
        <meta charset="UTF-8">
        <title>The Chinese Zodiac</title>
        <style>
        body {
        font-size: 50px; 
        background-color: #000000; 
        color: #00FF00;
        font-variant: small-caps; 
        text-align: center; 
        }
        </style>
    </head>
    <body>
        <?php
        $zodiacAnimal = ["2020"=>"rat", "2021"=>"ox", "2022"=>"tiger", "2023"=>"rabbit", "2024"=>"dragon", "2025"=>"snake", "2026"=>"horse",
            "2027"=>"goat", "2028"=>"monkey", "2017"=>"rooster", "2018"=>"dog", "2019"=>"pig"];
        $year = $zodiacAnimal[date("Y")];
        echo("It is year of the $year.")
        ?>
    </body>
</html>