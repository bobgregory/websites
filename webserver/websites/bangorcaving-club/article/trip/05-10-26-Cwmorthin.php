<!DOCTYPE html>
<head>
    <title>
        Template
    </title>
    <link rel="icon" href="../../sources/icon256.png">
    <link rel="stylesheet" href="../../sources/stylesheets/main.css">
    <link rel="stylesheet" href="../../sources/stylesheets/article.css">
    <link rel="stylesheet" href="../../sources/stylesheets/topselec/club.css">
    <link rel="stylesheet" href="../../sources/stylesheets/topselec/trips.css">
</head>

<body>
    <?php
    $content = file_get_contents('../../header.php');

    // Inject directory offset by replacing the "/ in href tags
    $content = str_replace('href="', 'href="../../', $content);
    $content = str_replace('src="', 'src="../../', $content); 
    echo $content;
    ?>

    <main>
        <div>
            <span class="title">
                <div>
                    <h1>Cwmorthin Freshers Trip</h1>
                    <h2>05/10/2026</h2>
                </div>
                <div class="author">
                    <h4>Author:</h4>
                    Luke Kuhlmann<br>

                </div>
            </span>

            
                <div class="solid"></div>
            
            <h4>Attended by</h4>
            <small>Alex Johnson, Luke Kuhlmann, Ewan Grey, Osian Griffith, Alexander Stott, Alfie Smith, Cody Moore, Emily Roach, Freyja Brodie</small>
                <div class="dashed"></div>
            <h2>The Trip</h2>
                <aside>
                    <img src="../../sources/qrs/calendar.png"/>
                </aside>
            <p1>
                In the evening of Monday, the 5th October 2026 a group of 9 of us headed underground into Cwmorthin slate mine which is an old Victorian Mine. We started by showing our freshers the basics of how to use clip lines and how to keep themselves safe. The journey then began by traversing along an old catwalk and descending to the floor below. A bit of hesitation by some of the freshers but they all smashed it. We continued down another floor towards the first ziplines of the evening where our Treasurer gave a beautiful demonstration of how to clip on and use it. Our members then took their turn, and a lot of fun was had however one member hadn’t set their cowstails correctly so had a bit of issue. We continued on with the journey to the deepest level of Cwmorthin accessible which is E floor, after a bit of time splashing around, we made it to the Corkscrew climb and Traverse. There was a little hesitation, but everyone gave it a go, but one member found out that the traverse line was quite tall for them so struggled a little. One more bridge crossing and zipline then it was onto the biggest abseil on the night, one by one the members either got lowered or used SRT techniques to reach the ground, and once everyone was down it was time to head back to the incline and up to lake level (5 floors), and finally it was time to leave the mine but not before a group photo. On the way down one of our members did a post trip interview and all but 1 freshers said they would definitely come back and 1 was a Maybe.
            </p1>
            <h4>Here are some comments from our freshers:</h4>
                <ul>
                    <li>“Exciting! Very well organised and felt safe and looked after!”</li>
                    <li>“Yesterday’s trip was great fun! Really enjoyed meeting new people and exploring Cwmorthin mine, the zip lines were wicked”</li>
                    <li>“It was really enjoyable, I felt comfortable around everyone even without knowing what to do. The leaders guided us well and the sights were wicked”</li>
                    <li>“It was even more fun than I expected, felt so comfortable doing it for the first time, with lots of help and guidance from the leaders. Cant wait for next time!”</li>
                </ul>
        </div>
    </main>

    <?php include '../../footer.php';?>
</body>