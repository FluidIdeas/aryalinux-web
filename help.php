<?php
$articles = array(
    "vbox-vmware",
    "livemedia",
    "installing",
    "building",
    "apps",
    "remastering",
    "lampstack",
    "install-on-mulitple-hdd",
    "chromium",
    "command-not-found-on-sudo",
    "installing-java-for-development"
);
?>
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
    <?php $page = "help.php"?>
    <?php include_once('header.php')?>
    <div class="page-heading-container">
        <div class="container">
            <div class="page-heading">Help &amp; Support</div>
        </div>
    </div>
    <div class="main-content">
        <div class="container">
        <?php if (!array_key_exists("article", $_REQUEST)) { ?>
        <p>
        In case you are facing any issue with AryaLinux, see if our help section
        can provide solutions to your concerns. In case you dont get a solution, please mail us at
        <a href="mailto:aryalinux11@gmail.com">aryalinux11@gmail.com</a> and we would try to get back to you as soon as
        possible. Also try to mention your issue with as much detail as possible
        so that we can find a proper solution before getting in touch with you.
        </p>
        <h2>Help</h2>
        <div style="display: grid; grid-template-columns: 1fr 1fr">
            <div>
                <h3>General</h3>
                <ul>
                    <li><a href="?article=livemedia">How to create AryaLinux Bootable USB Drive</a></li>
                    <li><a href="?article=vbox-vmware">Running AryaLinux inside Virtualbox/VMWare</a></li>
                    <li><a href="?article=apps">Installing applications/packages</a></li>
                    <li><a href="?article=installing">Installing Aryalinux</a></li>
                    <li><a href="?article=remastering">Remastering Aryalinux</a></li>
                    <li><a href="?article=building">Building AryaLinux from scratch</a></li>
                </ul>
            </div>
            <div>
                <h3>Applications</h3>
                <ul>
                    <li><a href="?article=lampstack">How to install lamp stack</a></li>
                    <li><a href="?article=chromium">How to install Chromium browser</a></li>
                    <li><a href="?article=installing-java-for-development">How to install Java for development in AryaLinux</a></li>
                </ul>
            </div>
            <div>
                <h3>Issues &amp; Solutions</h3>
                <ul>
                    <li><a href="?article=install-on-mulitple-hdd">AryaLinux installation failing with message: NameError: global name 'subprocess' is not defined</a></li>
                    <li><a href="?article=command-not-found-on-sudo">When running commands on sudo, sometimes it gives error - command not found</a></li>
                </ul>
            </div>
        </div>
        <?php } else { ?>
        <?php
            $article = $_REQUEST['article'];
            if (!in_array($article, $articles)) {
                echo "<div style=\"font-size: 2.5em; color: red\">Article Not found!</div>";
                echo "<p>Please go to the <a href=\"help.php\">Help Section</a> and choose one of the articles in the list.</p>";
            }
            else {
                echo "<div class=\"container\">";
                $str = file_get_contents("help/" . $article, TRUE);
                echo $str;
                echo "</div>";
            }
        ?>
        <?php } ?>
        </div>
    </div>
    <?php include_once('footer.php')?>
</body>
</html>
