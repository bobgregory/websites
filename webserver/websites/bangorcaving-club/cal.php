<style>
    * {
        margin:0;
        padding:0;
    }
</style>

<?php
// google.php

// Fetch the original content from the external URL
$content = file_get_contents('https://calendar.google.com/calendar/embed?height=400&wkst=2&ctz=Europe%2FLondon&showPrint=0&showTz=0&showCalendars=0&showTabs=0&hl=en_GB&title=Bangor%20Caving%20Calendar&showTitle=0&src=YmFuZ29ydW5pY2F2aW5nQGdtYWlsLmNvbQ&src=ZW4tZ2IudWsjaG9saWRheUBncm91cC52LmNhbGVuZGFyLmdvb2dsZS5jb20&color=%238f3f71&color=%23b57614');



// Inject a base URL to ensure relative CSS/JS paths work correctly
$content = str_replace('</title>', '</title><base href="https://calendar.google.com/calendar/" />', $content);

// Inject custom CSS by replacing the closing </head> tag
$customCss = '<link rel="stylesheet" href="https://switt.net/sources/stylesheets/cal.css" />';
$content = str_replace('</head>', $customCss . '</head>', $content);

echo $content;
?>