<div class="bg-dark">
    <div class="container main-menu">
    <?php
    $pages = array(
        "index.php"=>"Home",
        "downloads.php"=>"Downloads",
        "about.php"=>"About AryaLinux",
        "support.php"=>"Documentation",
        "contact.php"=>"Contact Us",
        "blog.php"=>"Blog"
    );
    $current_page = basename($_SERVER['PHP_SELF']);
    foreach($pages as $page=>$label) {
        $active = "";
        if ($page == $current_page) {
            $active = "active";
        }
?>
<a href="<?php echo $page?>" class="<?php echo $active;?>"><?php echo $label?></a>
<?php } ?>
    </div>
</div>
