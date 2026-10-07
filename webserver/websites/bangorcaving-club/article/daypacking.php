<!DOCTYPE html>
<head>
    <title>
        Packing List
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
            <h1>Packing for Day Trips</h1>
                You will need to bring several things with you<br>
                <p1 class="req">* indicates absolutely required to bring</p1>
                <h4>Underground</h4>
                    <ul>
                        <li class="req">*Wellies!</li>
                        <li class="req">*Medical Devices/Drugs <small>(if you use something like an inhaler or need to take a tablet every X hours)</small></li>
                        <li class="req">*Non Cotton cave clothes <small>(purpose made caving undersuits,</small></li>
                        <small>thermals, synthetic outdoors/workout clothes, and even onesies are appropriate)</small>
                        <li>Caving gear <small>(We can provide caving gear for those without)</small></li>
                        <li>Snacks! <small>food you can put in pockets to take underground</small></li>
                    </ul>
                <h4>Overground</h4>
                    <ul>
                        <li class="req">*Clean dry clothes <small>including underwear</small></li>
                        <li class="req">*Bag for dry kit/clothes</li>
                        <li class="req">*Wet kit bag <small>(Ikea bag/plastic shopping bag/drybag)</small></li>
                        <li class="req">*Towel</li>
                        <li>Flip flops / Crocs / other shoes to wear while getting changed</li>
                        <li>Deodorant</li>
                    </ul>
                <h4>Wombling Free</h4>
                    <ul>
                        <li>Water bottle <small>(You don't have to take underground)</small> </li>
                    </ul>
        </div>
    </main>

    <?php include '../footer.php';?>
</body>