<?php
    $files = glob("*.{txt,html,css,js,php}", GLOB_BRACE);
    $folders = glob("*", GLOB_ONLYDIR);
    asort($files);
    asort($folders);
?>

<!doctype html>
<html lang="en-us">
<head>
    <meta charset='utf-8'><meta name="author" content="Matt T. Myers"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">

    <title>Localhost Portal</title>
    <link rel="stylesheet" href="index.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</head>

<body>
<main>

<h2 class="center">Local Project Portal</h2>

<aside class="left">
<?php
    echo "<h3>Folders</h3>\n\t<ul class='fa-ul'>\t\n";
    foreach ($folders as $folder){
        echo "\t\t<li><span class='fa-li'><i class='fas fa-folder'></i></span><a href='$folder'>$folder</a></li>\n";
    }
    echo "\t</ul>\n";
?>
</aside>

<aside class="right">
<?php
    echo "<h3>Files</h3>\n\t<ul class='fa-ul'>\t\n";
    foreach ($files as $file){
        echo "\t\t<li><span class='fa-li'><i class='fas fa-file'></i></span><a href='$file'>$file</a></li>\n";
    }
    echo "\t</ul>\n";
?>
</aside>

</main>
</body>
</html>