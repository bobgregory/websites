<!DOCTYPE html>
<head>
    <title>
        Away Trip Itinerary
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
            <h1>Away Trip Itinerary</h1>
            <h2>Pre-trip</h2>
            Once you Sign up to the trip you will be added to the Whatsapp chat for that trip.<br>
            You can ask questions in here and sort out whose in which cars etc.<br>
            You should <a href="../article/packing">pack your bags</a>
            <h2>Friday</h2>
            Meet in ASDA ~6PM<br>
            Drive to the caving hut<br>
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

            <h1>Away Trips<br></h1>
                <h2>Friday Evening</h2>
                <h3>Getting there</h3>
                Once you've signed up you'll be added to a WhatsApp group for the trip<br>
                We tend to meet in the ASDA car-park at 6pm<br>
                Drivers will be re-imbursed for fuel(+some)<br>
                Specifics get planned in the whatsapp group<br>
                Caving huts are far away with the closest being a 2.5hr drive.<br>
                Its recommended you either eat beforehand, or arrange within your car to stop at a services to get some food.<br>

                <h3><del>Snooze</del> Party</h3>
                You've arrived! Time to go and sign in and claim a bunk<br>
                There may be other groups or members from the huts associated club already there. <br>
                You need to sign into the sign in sheet.<br>
                You'll be sleeping in the guest/non-members bunks, often these are alpine bunks which are basically very very wide beds.<br>
                A sleeping bag, blanket, or bag can be used to claim space. Don't move other peoples stuff off the bunks.<br>
                <br>
                With a bed secured and your name in the sign in sheet you can now get on with the evening activities, often a drink and some caving games, sharing caving stories, sometimes at a nearby pub.<br>
                When you eventually go to bed make sure you are quiet in the bunk rooms, if you must use a torch to see have it on a low setting and don't shine them at people.

                <h2>Saturday</h2>
                <h3>Breakfast</h3>
                Those that rise early <strong>WILL</strong> help with breakfast, normally a half english fry up to fuel the day.<br>
                Those that didn't cook wash up the pans and oven trays.<br>

                If you haven't risen before ~9am when breakfast is ready you may be loudly awoken by people with pans, or just shouting.<br>
                No seconds till everyone has eaten

                <h3>Get ready to Cave</h3>
                Finally time to go underground<br>
                Trips may have been arranged the night before, or will be cast down from above based on vibes and prior experience.<br>
                Any kit you are borrowing should be collected from the tackle mistress<br>
                If your trip is a drive away collect your things into a bag and load it into cars<br>
                If not you can get ready in the warmth of the hut<br>
                
                Caving huts are often just a walk away from a cave.<br>


                You cave wearing a tough abbrasion resistant set of overalls called an oversuit.<br><br>
                Under your oversuit you should wear:<br>your caving underclothes, full coverage <strong>NON COTTON</strong> clothes <br><strong>or</strong><br> a caving undersuit(basically a onesie).<br><br>
                Expect to potentially get wet(depending on the trip), very wet trips can benefit from a wetsuit.<br>
                Helmets, lights, and harnesses etc can be provided by the club<br>

                <h3>Caving</h3>
                Caves are a constant ~9c in britain, no matter the season. <br>
                If you feel cold, tell the leaders/second of the group<br>
                Depending on the trip you will be doing a mixture of walking, crawling, ascending/descending ropes, climbing ladders, swimming, or paddling in a boat.
                Caving is just hardcore corridors.
                Don't walk off from the group...

                <h3>Evening</h3>
                After your caving you surface and return to the hut. Where you shower, get changed into your clean dry hut clothes and shoes.<br>
                The evening meal is cooked and eaten, same rules as breakfast, help or clean. No seconds till everyone has eaten.
                This tends to be either a curry, pasta dish, or 
        </div>
    </main>

    <?php include '../footer.php';?>
</body>