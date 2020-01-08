<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>AryaLinux | Linux for Builders</title>
    <meta name="description" content="AryaLinux | Linux for Builders">
    <meta name="author" content="Chandrakant Singh">

    <link rel="stylesheet" href="style.css">

</head>

<body>
    <?php $page = "index.php"?>
    <?php include_once('header.php')?>
    <?php include_once('banner.php')?>
    <div class="main-content">
        <div class="container">
            <div style="display: grid; grid-template-columns: 6fr 4fr; gap: 30px;">
                <div style="text-align: justify; line-height: 2em">
                    <h3>Welcome to AryaLinux</h3>
                    <p>
                    AryaLinux is a GNU/Linux operating system built from source using instructions from the LFS and BLFS books. Even though AryaLinux started off as an implementation of LFS, a lot of things changed along the way in order to make AryaLinux a complete distribution in itself. 
                    </p>
                    <p> AryaLinux supports the KDE Plasma 5, XFCE, Gnome3 and Mate desktop environments as of now, the default being Gnome3</p>
                </div>
                <div class="download-panel">
                    <div class="heading">AryaLinux 2.1 Released</div>
                    <br>
                    <a href="#" class="download-btn">Download AryaLinux 2.1 Gnome</a>
                    <br><br>
                    <a href="release-notes-2.1.php">Release Notes</a>
                    <br><br>
                    <a href="downloads.php">Other Downloads</a>
                </div>
            </div>
        </div>
        <div class="container">
            <h3>News Updates</h3>
            <p><?php include_once('news-updates.php')?></p>
        </div>
    </div>
    <?php include_once('footer.php')?>
</body>
</html>