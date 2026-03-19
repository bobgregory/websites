<!DOCTYPE html>
<head>
    <title>
        Bangor Student Caving Club
    </title>
    <link rel="icon" href="sources/icon256.png">

    <link rel="stylesheet" href="sources/stylesheets/main.css">
    <link rel="stylesheet" href="sources/stylesheets/hgal.css">
    <link rel="stylesheet" href="sources/stylesheets/home.css">
</head>

<body>
    <?php include 'header.php';?>

    <main>
        <div>
            <h2>Trips Calendar</h2>
            <iframe src="cal.php" style="border-width:0" width=100% frameborder="0" scrolling="no"></iframe>
        </div>
        
        <div>
            <h2>About us</h2>
            <p1>
                The Bangor student Caving Club was re-established in 2020. We
                run monthly(ish) weekend away trips to various caving regions like
                the Peaks, Yorkshire dales, south Wales and occasionally more.<br><br>
                Hosting regular thursday socials at the Harp Inn in Bangor, day trips to local mines and caves, and Tree based rope training sessions.
                <br><br>
                Details on joining can be found in the Join Us section,
                <br><br>
                Dig deep and stay dirty.
            </p1>
        </div>

        <div class="hgal">
            <h2>Some Photos</h2>
            <?php
            $dir = "sources/hgal";
            // Open a directory, and read its contents
            if (is_dir($dir)){
            if ($dh = opendir($dir)){
                while (($file = readdir($dh)) !== false){
                    if ($file != "." and $file != ".."){
                        $filename = pathinfo($file, PATHINFO_FILENAME);
                        echo '<img src="sources/hgal/',$file,'">';
                    }
                }
                closedir($dh);
            }
            }
            ?>
            <p1><br>Yes these are placeholders<br> If people want to find nice photos in the drive and <br>put them in the album "website pics"</p1>
        </div>

    </main>

    <?php include 'footer.php';?>
</body>