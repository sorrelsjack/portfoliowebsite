<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Home</title>
    <meta charset="utf-8">
    <link href="assets/favicon.ico" rel="icon" type="image/x-icon"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>

<body>
    <ul class="nav">
        <li><a class="active" href="/index.php">Home</a></li>
        <li><a href="/about.php">About</a></li>
        <li><a href="/projects.php">Projects</a></li>
        <li><a href="/resume.php">Resume</a></li>
    </ul>

    <div id="entire-marquee">
        <span class="marquee-background">
            <span class="marquee-instance">Hey!</span>
        </span>
    </div>

    <main>
    <div>
        <p>I'm a professional with experience across several different domains. I'm a developer, a lexicographer, and a copywriter. I'm the full package.</p>
        <img src="assets/dictionary.jpg" width="25%" height="25%">
    </div>
    </main>

    <?php include ('php/footer.php'); ?>
</body>
</html>