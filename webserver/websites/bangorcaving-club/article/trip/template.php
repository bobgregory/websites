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
                    <h1>Report Title</h1>
                    <h2>DD/MM/YYYY</h2>
                </div>
                <div class="author">
                    <h4>Author:</h4>
                    Name1<br>
                    Name2<br>
                </div>
            </span>
            <div class="solid"></div>
            
            <h4>Attended by</h4>
            <small>Comma, separated, names</small>
                <div class="dashed"></div>
            <h2>Small Title</h2>
                <aside>
                    <img src="../../sources/whereverimageis"/>
                </aside>
            <p1>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. In pharetra luctus porttitor. Nam ornare feugiat commodo. Donec sed nisl elit. Vivamus gravida lorem a viverra finibus. Donec vulputate sem in ultrices consectetur. Nam id neque ac arcu consectetur sodales. Suspendisse elementum quam nunc, vitae finibus augue sagittis a. Suspendisse posuere velit quis ultrices pulvinar. Nulla efficitur, metus in aliquam faucibus, nisi nulla tincidunt eros, et blandit nisi libero ac purus. Phasellus interdum ex vel aliquet ornare. Mauris vel tortor sit amet orci viverra elementum. 
            </p1>
            <h4>A little list thing</h4>
                <ul>
                    <li>WORDS WRODS</li>
                    <li>etc</li>
               </ul>
        </div>
    </main>

    <?php include '../../footer.php';?>
</body>