<!DOCTYPE html>
<head>
    <title>
        Away Trip Itinerary
    </title>
    <link rel="icon" href="../sources/icon256.png">
    <link rel="stylesheet" href="../sources/stylesheets/main.css">
    <link rel="stylesheet" href="../sources/stylesheets/article.css">
    <link rel="stylesheet" href="../sources/stylesheets/topselec/resources.css">
    <link rel="stylesheet" href="../sources/stylesheets/topselec/fresher.css">

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
            <h1>Day Trip Itinerary</h1>
            <h2>Pre-trip</h2>
            Once you Sign up to the trip you will be added to the Whatsapp chat for that trip.<br>
            You can ask questions in here and sort out whose in which cars etc.<br>
            You should <a href="../article/daypacking">pack your bags</a>
            <h2>Getting There</h2>
            Meet in ASDA at specified time<br>
            Drive to the cave/mine<br>
            <h2>Kitting up</h2>
            Get ready for caving <small>Get changed in a layby/other parking</small><br>
            Aquire any borrowed kit from leaders
            <h2>Going underground</h2>
            Go to the cave/mine <small>(walk)</small><br>
            Cave! / Mine!<br>
            Return from the cave/mine<br>
            <h2>Getting Back</h2>
            De-kit<small>(your towel is useful to protect you from the wind and retain your modesty)</small><br>
            Rinse gear where possible<br>
            Pack up your kit and pack the cars<br>
            Drive home<br>
        </div>
    </main>

    <?php include '../footer.php';?>
</body>