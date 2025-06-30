<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width">
        <title id="title">Landing Page</title>
        <link href="style.css" rel="stylesheet" type="text/css" />
        <meta name="description" content="Hugo Switt's Random Files"/>
        <meta property="og:title" content="Files"/>
        <meta property="og:description" content="Hugo Switt's Random Files"/>
        <meta property="og:type" content="website"/>
        <meta property="og:url" content="https://hugoswitt.co.uk/downloads"/>
        <meta property="og:image" content="https://hugoswitt.co.uk/meta-logo.png"/>
        <meta property="og:site_name" content="Hugo Switt's Random Files"/>     
        <link id="favicon" rel="icon" href="favi.png"></link>
        <script src="script.js"></script>
    </head>

    <div class="boids">
        <canvas id="boids"></canvas>
    </div>

    <body>

    <div class="icon-box">
    <a href="https://hugoswitt.co.uk/"><img src="iconlarge.png" class="icon"></a>
    </div>

    <div class="header">
        <h1>
            <b>
                Downloads?
            </b>
        </h1>
    </div>

    <div class="small-text">
        <p1>
            This is all the random files i am sharing with people
        </p1>
    </div>

    <div class="files">
        <?php
        $dir = "thefiles";
        // Open a directory, and read its contents
        if (is_dir($dir)){
          if ($dh = opendir($dir)){
            while (($file = readdir($dh)) !== false){
                if ($file != "." and $file != ".."){
                    $filename = pathinfo($file, PATHINFO_FILENAME);
                    echo '<a href="thefiles/',$file,'" download>',$filename,'</a>';
                }
            }
            closedir($dh);
          }
        }
        ?>    
    </div>

    <div class="credits-box">
        <p1 class="credits">
        Website designed by Hugo Switt & Instantlysi<br>
        </p1>
    </div>

    </body>
</html>