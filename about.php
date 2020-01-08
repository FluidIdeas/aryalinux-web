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
    <?php $page = "about.php"?>
    <?php include_once('header.php')?>
    <div class="page-heading-container">
        <div class="container">
            <div class="page-heading">About AryaLinux</div>
        </div>
    </div>
    <div class="main-content">
        <div class="container">
        <h2>Build from source</h2>
        <p>
            AryaLinux is built from source code of packages, libraries and applications that is publicly available over the internet.
            This limits the numbers of applications that can be installed on AryaLinux, because there are still a lot of applications
            out there which are not open source and since AryaLinux does not have support for Wine, Windows applications are out of
            question. Being built from source however brings in other advantages - you get a vanilla system that has not been modified
            or patched by us. In case you build AryaLinux in your own system from ground up, you end up getting the most compatible
            Linux system because its built on your system itself compared to downloading and installing AryaLinux. There are downsides
            as well to being built from source. Installing large applications take time, especially if your system is not fast enough.
            Moreover due to the built from source nature of AryaLinux, uninstalling applications from AryaLinux is not an easy thing
            to do.
        </p>
        <br>
        <h2>AryaLinux Packaging System (alps)</h2>
        <p>
            AryaLinux ships with the alps tool which similifies the process of building and installing applications and libraries in
            AryaLinux. Having been heavily inspired by LFS and BLFS, applications in AryaLinux are not installed via binary packages
            (except a few). That is why there is no packaging system in AryaLinux. Installing from source is a difficult thing to do
            especially for people with no background in software development. So we have created a tool that would make the task of
            downloading, building, installing and resolving dependencies for applications easy. alps provides a command line interface
            with basic package management options like install, upgrade etc to easy application installation and update. Learn more
            about alps <a href="#">here</a>.
        </p>
        <br>
        <h2>AryaLinux Build platform</h2>
        <p>
            AryaLinux is not just a distribution, AryaLinux also provides a build platform so that you too can build your own distribution
            from source. Being open source you are also free to remaster, respin AryaLinux to build your own Linux distribution. AryaLinux
            build scripts can be used to build any kind of distribution like GUI less applications which run on servers and distributions with
            custom Desktop manager build from independent desktop manager components and full blown distributions with applications and live
            media all with a few simple commands.
        </p>
        <br>
        <h2>More about AryaLinux</h2>
        <ul>
            <li><a href="faqs.php">Frequently Asked Questions</a></li>
            <li><a href="screenshots.php">Screenshots</a></li>
            <li><a href="history.php">History</a></li>
        </ul>
        </div>
    </div>
    <?php include_once('footer.php')?>
</body>
</html>