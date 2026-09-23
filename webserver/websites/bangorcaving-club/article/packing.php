<!DOCTYPE html>
<head>
    <title>
        Packing List
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
            <h1>Packing for Away Trips</h1>
                You will need to bring several things with you<br>
                * indicates absolutely required to bring
                <h4>Sleeping</h4>
                    <ul>
                        <li class="req">*A sleeping bag or some blankets</li>
                        <li>A Pillow</li>
                        <li>Pajamas</li>
                        <li>Tent <small>(only required if listed in signup form, such as at CHECC, ABC week, or other larger events)</small></li>
                    </ul>
                <h4>Caving</h4>
                    <ul>
                        <li class="req">*Wellies!</li>
                        <li class="req">*Medical Devices/Drugs <small>(if you use something like an inhaler or need to take a tablet every X hours)</small></li>
                        <li class="req">*Non Cotton cave clothes <small>(purpose made caving undersuits,</small></li>
                        <small>thermals, synthetic outdoors/workout clothes, and even onesies are appropriate)</small>
                        <li>Caving gear <small>(We can provide caving gear for those without)</small></li>
                        <li>Snacks! <small>food you can put in pockets to take underground</small></li>
                        <li>Water bottle <small>(Must withstand being bashed around)</small> </li>
                    </ul>
                <h4>Toiletries</h4>
                    <ul>
                        <li class="req">*Towel</li>
                        <li class="req">*Soap </li>
                        <li class="req">*Toothbrush & toothpaste</li>
                        <li>Flip flops / Crocs / other shoes to wear while showering and getting changed</li>
                        <li>Deodorant</li>
                    </ul>
                <h4>Other</h4>
                    <ul>
                        <li class="req">*Hut Shoes <small>Shoes to wear around the hut</small></li>
                        <li class="req">*Hut Clothes <small>(your cave clothes will probably be wet)</small></li>
                        <li>Hut snacks</li>
                        <li>Alcohol <small>(Obviously only if you want to)</small></li>
                        <li>Chargers</li>
                        <li>Money <small>(some huts are near pubs & shops)</small></li>
                        <li>House keys <small>(don't get locked out your house...)</small></li>
                    </ul>
        </div>
    </main>

    <?php include '../footer.php';?>
</body>