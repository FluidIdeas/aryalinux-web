<?php
$menu_options = array(
    "index.php" => "Home",
    "downloads.php" => "Downloads",
    "about.php" => "About AryaLinux",
    "contact.php" => "Contact Us",
    "help.php" => "Help and Support",
    "documentation.php" => "Documentation"
);
?>
<div class="menu-container">
<div class="container">
<?php
    foreach ($menu_options as $link=>$label) {
        $active = $page == $link?"active":"";
        echo "<a href=\"$link\" class=\"$active\">$label</a>";
    }
?>
</div>
</div>