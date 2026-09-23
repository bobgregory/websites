<!DOCTYPE html>
<head>
    <title>
        Template
    </title>
    <link rel="icon" href="../sources/icon256.png">
    <link rel="stylesheet" href="../sources/stylesheets/main.css">
    <link rel="stylesheet" href="../sources/stylesheets/guide.css">


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
            <h1>Main Title<br></h1>
                words
                
                <h2>Section Title</h2>
                words
                <h3>Sub-Section Title</h3>
                Words
                <h4>Subtitle</h4>
                    <ul>
                        <li class="req">*list</li>
                        <li>list</li>
                        <li>list</li>
                        <li>list</li>
                    </ul>
        </div>
    </main>

    <?php include '../footer.php';?>
</body>