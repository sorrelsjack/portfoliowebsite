<!--<?php session_start();?>

<?php
$counter_file = "php/counter.txt";

$f = fopen($counter_file, "r");
$counterNumber = fread($f, filesize($counter_file));
fclose($f);

if(!isset($_SESSION["hasVisited"])){ #not hitting this block?
    $_SESSION["hasVisited"]="yes";
    $counterNumber++;
    $f = fopen($counter_file, "w");
    fwrite($f, $counterNumber);
    fclose($f);   
}

$stringCounterNumber = str_pad($counterNumber, 5, "0", STR_PAD_LEFT);
$counterArray = str_split($stringCounterNumber);

echo "hey, you're visitor #$stringCounterNumber!";
?>-->

<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Home</title>
    <meta charset="utf-8">
    <link href="assets/favicon.ico" rel="icon" type="image/x-icon"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="script.js"></script>
</head>

<body>
    <?php include ('php/nav.php')?>
    <!--<ul class="nav">
        <li><a class="active" href="/index.php">Home</a></li>
        <li><a href="/about.php">About</a></li>
        <li><a href="/projects.php">Projects</a></li>
        <li><a href="/resume.php">Resume</a></li>
    </ul>-->

    <!--<div id="entire-marquee">
        <span class="marquee-background">
            <span class="marquee-instance" id="actual-marquee">Hey!</span>
        </span>
    </div>-->

    <main>
    <div>
        <p>I'm a professional with experience across several different domains. I'm a developer, a lexicographer, and a copywriter.</p>
        <img src="assets/dictionary.jpg" width="25%" height="25%">
    </div>
    </main>

    <?php include ('php/footer.php'); ?>
</body>
</html>