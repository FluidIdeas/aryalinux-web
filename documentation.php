<?php
$articles = array(
    "aryalinux-doc",
    "alps-doc"
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
    <?php $page = "documentation.php"?>
    <?php include_once('header.php')?>
    <div class="page-heading-container">
        <div class="container">
            <div class="page-heading">Documentation</div>
        </div>
    </div>
    <div class="main-content">
        <div class="container">
        <?php if (!array_key_exists("article", $_REQUEST)) { ?>
        <p style="font-size: 0.9em; color: #ff0000">
		The documentation is currently available only in English. If you are interested in translating the documentation,
		please write us at <a href="mailto:aryalinux11@gmail.com">aryalinux11@gmail.com</a>.
		</p>
		<p>
		The documentation here is mostly meant for developers or anyone who is interested to know about
		the internals of AryaLinux in particular and Linux in general. We have tried to cover most of the
		things related to AryaLinux that would help someone understand AryaLinux in as much detail as possible.
		</p>
		<p>
		Since AryaLinux borrows heavily from <a href="http://linuxfromscratch.org/">Linux from scratch</a> and <a href="http://linuxfromscratch.org/blfs/">Beyond Linux from scratch</a> books, it would be
		a good idea to read them first. The documentation presented below adds to the knowledge provided in the
		LFS and BLFS books.
		</p>
		<div>
			<ul>
				<li><a href="?article=aryalinux-doc">Aryalinux Documentation</a></li>
				<li><a href="?article=alps-doc">alps documentation</a></li>
			</ul>
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
                $str = file_get_contents("docs/" . $article, TRUE);
                echo $str;
                echo "</div>";
            }
        ?>
        <?php } ?>
        </div>
        <br><br>
    </div>
    <?php include_once('footer.php')?>
</body>
</html>