<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.css">
    <title>Home</title>
    <meta charset="utf-8">
    <link href="assets/favicon.ico" rel="icon" type="image/x-icon"/>
</head>

<body>
    <?php include ('php/nav.php')?>

    <main class="main-info">
        <div class="row">
            <div class="col"></div> <!--Filler column-->
            <div class="col-8 text-center">
                <section>
                    <h3>Welcome!</h3>
                    <p>I'm a professional with experience across several different domains. I'm a junior developer, lexicographer, and linguist.</p>
                    <img src="assets/dictionary.jpg" class="img-fluid" width="40%" height="40%">
                </section> <!--TODO: An interactable array of words to describe me-->
                <hr />
                <section>
                <div id="work-grid">
                    <p><h3>Sample of my Work</h3></p>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm">
                                <a href="#"><img src="assets\resized stock app gif.gif" class="img-fluid"></a>
                            </div>
                            <div class="col-sm">
                                <a href="#"><img src="assets\demigirl.png" class="img-fluid" style="width:383px; height:240px;"></a>
                            </div>
                            <div class="col-sm">
                                <a href="#"><img src="assets\events api gif.gif" class="img-fluid" style="width:383px; heightL240px;"></a> <!--My API I made.-->
                            </div>
                        </div>
                    </div>
                    <!--Fill it with pics of my work with small desc-->
                </div>
                </section>
            </div>
            <div class="col"></div> <!--Filler column-->
        </div>
    </main>

    <?php include ('php/footer.php'); ?>
    <!--<script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</script>-->
</body>
</html>