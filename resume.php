<!DOCTYPE HTML>
<head>
    <link rel="stylesheet" href="css/style.css">
    <title>Resume</title>
    <meta charset="utf-8">
    <link href="assets/favicon.ico" rel="icon" type="image/x-icon"/> 
</head>

<body>
    <ul class="nav">
        <li><a href="/index.php">Home</a></li>
        <li><a href="/about.php">About</a></li>
        <li><a href="/projects.php">Projects</a></li>
            <ul>
                <li><a href="/stocktrackingapp.php">Stock Tracking Application</a></li>
            </ul>
        <li><a class="active" href="/resume.php">Resume</a></li>
    </ul>

    <div id="resume">
        <p>On this page, I will list out my previous and current positions. These are also viewable on <a href="https://www.linkedin.com/in/jacksorrels/">LinkedIn</a> or can be downloaded as a <a href="assets/jasorrels technical resume.pdf" download>PDF</a>.</p>
        <div id="work-experience">
            <p><h2>Work Experience</h2></p>
            <div id="dictionarycom">
                <p><h3>Freelance Lexicographic Content Contributor</h3></p>
                <h4><a href="https://www.dictionary.com/">Dictionary.com</a></h4>
                <h5>March 2017 - May 2017, January 2018 - May 2018</h5>
                <ul>
                    <li>Authored over 100 lexicographic articles featuring the meaning, origin, and use of a particular word</li>
                    <li>Researched a wide variety of topics, including internet language, memetics (study of memes), sociolinguistics, and LGBTQ+ topics</li>
                    <li>Described modern language, such as <a href="https://www.dictionary.com/e/slang/conversion-therapy/">“conversion therapy”</a>, <a href="https://www.dictionary.com/e/gender-sexuality/aromantic/">“aromantic”</a>, <a href="https://www.dictionary.com/e/slang/swole/">“swole”</a>, and <a href="https://www.dictionary.com/e/slang/open-relationship/">“open relationship”</a></li>
                    <li>Consistently delivered an agreed-upon number of articles on a weekly schedule</li>
                </ul>
            </div>
            
            <div id="optym">
                <p><h3>Marketing Writer</h3></p>
                <h4><a href="https://www.optym.com/">Optym</a></h4>
                <h5>September 2017 - December 2017</h5>
                <ul>
                    <li>Edited business-critical documents of up to 40 pages within a 24-hour time period </li>
                    <li>Worked to increase the understandability of the company’s message regarding their products </li>
                    <li>Composed a business proposal and statement of work to secure a five figure deal for Marketing </li>
                    <li>Produced a <a href="https://www.youtube.com/watch?v=fPxNpvPRT74">video</a> script about the flagship software suite with input from subject-matter experts</li>
                </ul>
            </div>
            
            <div id="panlex">
                <p><h3>Source Acquisition Intern</h3></p>
                <h4><a href="http://longnow.org/">The Long Now Foundation</a>, <a href="https://panlex.org/">PanLex Project</a></h4>
                <h5>July 2016 - August 2016</h5>
                <ul>
                    <li>Sought out dictionaries for over 106 resource-impoverished languages and found 83 to acquire</li>
                    <li>Mastered several in-house systems, including the database containing multilingual lexical entries</li>
                    <li>Appraised hundreds of dictionaries online and in-person to determine their utility to the project</li>
                    <li>Read dictionaries in Swedish, Danish, Latin, Spanish, English, and other related languages</li>
                </ul>
            </div>
        </div>
        
        <div id="education">
            <p><h2>Education</h2></p>
            <h3>University of Florida, 2016</h3>
            <h5>Major: Linguistics</h5>
            <h5>Minor: Classical Studies</h5>
        </div>
        
        <div id="skills">
            <p><h2>Skills</h2></p>
            <ul>
                <li>Fundemental understanding of C#, SQL, Java, C, HTML, and CSS</li>
                <li>Conversational speaking ability in Swedish and working knowledge of Classical Latin</li>
                <li>Experience with content writing, technical writing, academic writing, and business writing</li>
                <li>Familiarity with the AP, CMS, MLA, and APA style guidelines</li>
            </ul>
        </div>
    </div>
    <?php include ('php/footer.php'); ?>
</body>