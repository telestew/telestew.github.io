<!DOCTYPE html>
<html>

<head>
    <?php date_default_timezone_set("America/Los_Angeles") ?>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="res/css/main.css">
    <link rel="icon" type="image/x-ico" href="res/img/favicon.ico">
    <title>Stewart McGinnis</title>
</head>

<body>
    <h1 id="title-name">Stewart McGinnis</h1>

    <img id="selfportrait" src="res/img/portrait.jpg" alt="Portrait of Stewart McGinnis"></img>

    <address>
        <b>Office</b>: <a href="https://www.google.com/maps/place/Deady+Hall,+Eugene,+OR+97401/">303A
            Deady Hall</a><br>
        <b>Email</b>: <a href="mailto:stewartm@uoregon.edu">stewartm@uoregon.edu</a>
    </address>

    <section id="about">
        <h2>About</h2>
        <p>I am a first year Ph.D. student at University of Oregon. My primary mathematical interests are algebraic
            topology and algebra. Outside of school I enjoy music, being outdoors, and a little bit of coding.</p>
    </section>

    <section id="teaching">
        <h2>Teaching</h2>
        <section id="current-teaching">
            <h3>Current</h3>
            <ul>
                <li>Winter 2020 Math 111 - College Algebra <a
                        href="https://canvas.uoregon.edu/courses/147757">(Canvas)</a>
                </li>
            </ul>
        </section>
        <section id="past-teaching">
            <h3>Past</h3>
            <ul>
                <li>Spring 2018 Brigham Young University Math 118 - Finite Mathematics</li>
            </ul>
        </section>
    </section>

    <section id="education">
        <h2>Education</h2>
        <ul>
            <li>Ph.D. Mathematics, University of Oregon, In progress</li>
            <li>M.S. Mathematics, Brigham Young University, April 2019</li>
            <li>B.S. Mathematics (CS Minor), Brigham Young University, June 2017</li>
        </ul>
    </section>

    <section id="works">
        <h2>Works</h2>
        <ul>
            <li><cite>
                    McGinnis, Stewart, "Regular Fibrations over the Hawaiian Earring" (2019). Theses and
                    Dissertations. 7366.
                    <a href="https://scholarsarchive.byu.edu/etd/7366">https://scholarsarchive.byu.edu/etd/7366</a>
                </cite>
            </li>
        </ul>
    </section>

    <footer>
        <hr>
        <p><i>Last updated: <?php echo date("m/d/Y \a\\t g:iA T" , filemtime("index.php"))?></i></p>
    </footer>
</body>

</html>
