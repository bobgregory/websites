<!DOCTYPE html>
<head>
    <title>
        Away Trip Itinerary
    </title>
    <link rel="icon" href="../sources/icon256.png">
    <link rel="stylesheet" href="../sources/stylesheets/main.css">
    <link rel="stylesheet" href="../sources/stylesheets/article.css">
    <link rel="stylesheet" href="../sources/stylesheets/resources.css">

    <style>
        #fresher{
            background-color: #b57614;
            color: #ebdbb2;
        }

        #fresher:hover {
            background-color: #8f3f71;
        }
    </style>

</head>

<body>
    <?php
    $content = file_get_contents('../header.php');

    // Inject directory offset by replacing the "/ in href tags
    $content = str_replace('href="', 'href="../', $content);
    $content = str_replace('src="', 'src="../', $content);
    echo $content;
    ?>

    <main>
        <div>
            <h1>Away Trip Itinerary</h1>
            <h2>Pre-trip</h2>
            Once you Sign up to the trip you will be added to the Whatsapp chat for that trip.<br>
            You can ask questions in here and sort out whose in which cars etc.<br>
            You should <a href="../article/packing">pack your bags</a>
            <h2>Friday</h2>
            Meet in ASDA ~6PM<br>
            Drive to the caving hut (2.5hrs+)<br>
            Potential on route meal at a services<br>
            Arrive at the caving hut<br>
            Sign the Sign-in sheet (this is for fire and insurance reasons)<br>
            Claim a Bunk Space<br>
            Evening chatter, social, and games<br>
            Sleep<br>
            <h2>Saturday</h2>
            Rise and shine<br>
            Breakfast <small>(you will help, either by cooking or cleaning)</small><br>
            Get ready for caving<br>
            Go to the cave <small>(car or walk)</small><br>
            Cave!<br>
            Return from the cave<br>
            De-kit and clean gear<br>
            Evening meal <small>(you will help, either by cooking or cleaning)</small><br>
            Evening chatter, social, and games<br>
            Sleep<br>
            <h2>Sunday</h2>
            Rise and shine<br>
            Breakfast <small>(you will help, either by cooking or cleaning)</small><br>
            Get ready for caving<br>
            Go to the cave <small>(car or walk)</small><br>
            Cave!<br>
            Return from the cave<br>
            De-kit and clean gear<br>
            Tidy and clean the hut<br>
            Pack up your kit and pack the cars<br>
            Drive home<br>
        </div>
    </main>

    <?php include '../footer.php';?>
</body>