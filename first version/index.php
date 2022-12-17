<?php
$array_dischi = [
    [
    "poster" => "https://upload.wikimedia.org/wikipedia/en/thumb/2/2c/Bon_Jovi_New_Jersey.jpg/220px-Bon_Jovi_New_Jersey.jpg",
    "title" => "New Jersey",
    "author" => "Bon Jovi",
    "genre" => "Rock",
    "year" => "1988"
    ],
    [
    "poster" => "https://m.media-amazon.com/images/I/A1S3OwNU+NL._AC_SL1500_.jpg",
    "title" => "Live at Wembley 86",
    "author" => "Queen",
    "genre" => "Pop",
    "year" => "1992"
    ],
    [
    "poster" => "https://images-na.ssl-images-amazon.com/images/I/41JD3CW65HL.jpg",
    "title"=> "Ten's Summoner's Tales",
    "author"=> "Sting",
    "genre"=> "Pop",
    "year"=> "1993"
    ],
    [
    "poster"=> "https://cdn2.jazztimes.com/2018/05/SteveGadd-800x723.jpg",
    "title"=> "Steve Gadd Band",
    "author"=> "Steve Gadd Band",
    "genre"=> "Jazz",
    "year"=> "2018"
    ],
    [
    "poster"=> "https://images-na.ssl-images-amazon.com/images/I/810nSIQOLiL._SY355_.jpg",
    "title"=> "Brave new World",
    "author"=> "Iron Maiden",
    "genre"=> "Metal",
    "year"=> "2000"
    ],
    [
    "poster"=> "https://upload.wikimedia.org/wikipedia/en/9/97/Eric_Clapton_OMCOMR.jpg",
    "title"=> "One more car, one more raider",
    "author"=> "Eric Clapton",
    "genre"=> "Rock",
    "year"=> "2002"
    ],
    [
    "poster"=> "https://images-na.ssl-images-amazon.com/images/I/51rggtPgmRL.jpg",
    "title"=> "Made in Japan",
    "author"=> "Deep Purple",
    "genre"=> "Rock",
    "year"=> "1972"
    ],
    [
    "poster"=> "https://images-na.ssl-images-amazon.com/images/I/81r3FVfNG3L._SY355_.jpg",
    "title"=> "And Justice for All",
    "author"=> "Metallica",
    "genre"=> "Metal",
    "year"=> "1988"
    ],
    [
    "poster"=> "https://m.media-amazon.com/images/I/51UVW34rJTL._AC_SX425_.jpg",
    "title"=> "Hard Wired",
    "author"=> "Dave Weckl",
    "genre"=> "Jazz",
    "year"=> "1994"
    ],
    [
    "poster"=> "https://m.media-amazon.com/images/I/71K9CbNZPsL._SS500_.jpg",
    "title"=> "Bad",
    "author"=> "Michael Jacjson",
    "genre"=> "Pop",
    "year"=> "1987"
    ],
];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>first</title>
</head>
<body>
    <header>
        <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/84/Spotify_icon.svg/991px-Spotify_icon.svg.png" class="logo">
    </header>
    <main>
        <?php
        foreach($array_dischi as $valore){
            echo "<div>";
            echo "<img src='". $valore["poster"] ."'>";
            echo "<h1>" . $valore["title"] . "</h1>";
            echo "<h3>" . $valore["author"] . "</h3>";
            echo "<h4>" . $valore["genre"] . "</h4>";
            echo "<h4>" . $valore["year"] . "</h4>";
            echo "</div>";

        }
        ?>
    </main>
</body>
</html>