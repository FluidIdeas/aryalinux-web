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
    <?php $page = "downloads.php"?>
    <?php include_once('header.php')?>
    <div class="page-heading-container">
        <div class="container">
            <div class="page-heading">Downloads</div>
        </div>
    </div>
    <div class="main-content">
        <div class="container">
        <h2>Desktop Environment spins</h2>
        <p>
            Download AryaLinux with the desktop of your choice using one the following links. 
            The links below are for Live ISO files. For each desktop environment,
            applications for day-to-day usage are installed like Browser, Document and Image viewer,
            Audio and Video player, image editor and office productivity suite. In order to install
            more applications, you can use alps, docker or flatpak. Read more about it <a href="help.php?article=apps">here</a>.
            If you want a Live ISO with just the desktop environment, see the Slim ISO section below.
        </p>
        <p>
        <b style="color: red">Please note that password for the aryalinux account in the Live Disk is aryalinux and has super user rights.</b>
        <br>
        <b style="color: red">The Installer hangs while installing AryaLinux on a system with MSDOS partition table with the message: "NameError: global name 'subprocess' is not defined". Please follow <a href="help.php?article=install-on-mulitple-hdd">this</a>
        article to fix the issue. The issue has been fixed and we are uploading the new files and they would be available shortly.</b>
        </p>
        <div style="display: grid; grid-template-columns: 2.5fr 2fr 0.6fr;">
            <div class="head">URL</div>
            <div class="head">MD5</div>
            <div class="head">Size</div>
            <div class="even"><a target="_blank" href="https://sourceforge.net/projects/aryalinux/files/releases/2.1/fixed/aryalinux-2.1-xfce-x86_64.iso">aryalinux-2.1-xfce-x86_64.iso</a></div>
            <div class="even">f70300c6b10a34198ba39c25a8cda6c5</div>
            <div class="even">2.2 GB</div>
            <div class="odd"><a target="_blank" href="https://sourceforge.net/projects/aryalinux/files/releases/2.1/fixed/aryalinux-2.1-mate-x86_64.iso">aryalinux-2.1-mate-x86_64.iso</a></div>
            <div class="odd">cc195b10b9024cac805f05991cbe048d</div>
            <div class="odd">2.4 GB</div>
            <div class="even"><a target="_blank" href="https://sourceforge.net/projects/aryalinux/files/releases/2.1/fixed/aryalinux-2.1-kde5-x86_64.iso">aryalinux-2.1-kde5-x86_64.iso</a></div>
            <div class="even">32a4f2d1b9bd3d0e98b581943ee081cd</div>
            <div class="even">2.7 GB</div>
            <div class="odd"><a target="_blank" href="https://sourceforge.net/projects/aryalinux/files/releases/2.1/fixed/aryalinux-2.1-gnome-x86_64.iso">aryalinux-2.1-gnome-x86_64.iso</a></div>
            <div class="odd">f7c52acefeb6ddffc54e1b6093ff02e2</div>
            <div class="odd">2.3 GB</div>
        </div>
        <br>
        <h2>Slim ISOs</h2>
        <p>
            Slim ISOs are Live ISOs with just the desktop environment. You can install applications of your choice once you install
            the Slim ISO. These ISOs are meant for customization purposes in case you want control over the installed applications.
        </p>
        <div style="display: grid; grid-template-columns: 2.5fr 2fr 0.6fr;">
            <div class="head">URL</div>
            <div class="head">MD5</div>
            <div class="head">Size</div>
            <div class="even"><a target="_blank" href="https://sourceforge.net/projects/aryalinux/files/releases/2.1/min/aryalinux-2.1-gnome-slim-x86_64.iso">aryalinux-2.1-gnome-slim-x86_64.iso</a></div>
            <div class="even">e2f5c940e720a322d048513791f144b2</div>
            <div class="even">1.5 GB</div>
            <div class="odd"><a target="_blank" href="https://sourceforge.net/projects/aryalinux/files/releases/2.1/min/aryalinux-2.1-kde5-slim-x86_64.iso">aryalinux-2.1-kde5-slim-x86_64.iso</a></div>
            <div class="odd">30788dad2c07652d9c16d4cd87519003</div>
            <div class="odd">1.7 GB</div>
            <div class="even"><a target="_blank" href="https://sourceforge.net/projects/aryalinux/files/releases/2.1/min/aryalinux-2.1-mate-slim-x86_64.iso">aryalinux-2.1-mate-slim-x86_64.iso</a></div>
            <div class="even">7a6fca1b6ab5fe95cfa3c636a7ee7d44</div>
            <div class="even">1.3 GB</div>
            <div class="odd"><a target="_blank" href="https://sourceforge.net/projects/aryalinux/files/releases/2.1/min/aryalinux-2.1-xfce-slim-x86_64.iso">aryalinux-2.1-xfce-slim-x86_64.iso</a></div>
            <div class="odd">96040319b08dd0411704c8f2f842ade6</div>
            <div class="odd">1.1 GB</div>
            <div class="even"><a target="_blank" href="https://sourceforge.net/projects/aryalinux/files/releases/2.1/min/aryalinux-2.1-slim-x86_64.iso">aryalinux-2.1-slim-x86_64.iso</a></div>
            <div class="even">9547afd07cfbefc3b4f5417e2b274843</div>
            <div class="even">422 MB</div>
        </div>
        <br>
        <h2>Development backups</h2>
        <p>
            During the build process of AryaLinux, we make backups at strategic points. You can download them below.
            A lot can be done with these backup files. Read more about them <a href="help.php?article=remastering">here</a>.
        </p>
        <div style="display: grid; grid-template-columns: 2.5fr 2fr 0.6fr;">
            <div class="head">URL</div>
            <div class="head">MD5</div>
            <div class="head">Size</div>
            <div class="even"><a target="_blank" href="https://sourceforge.net/projects/aryalinux/files/releases/2.1/aryalinux-2.1-base-system-x86_64.tar.gz">AryaLinux 2.1 base system</a></div>
            <div class="even">ce9e45ecfed02b5ae243db9a994afa0c</div>
            <div class="even">593 MB</div>
            <div class="odd"><a target="_blank" href="https://sourceforge.net/projects/aryalinux/files/releases/2.1/aryalinux-2.1-base-system-with-xserver-x86_64.tar.gz">AryaLinux 2.1 base system with X Server</a></div>
            <div class="odd">8e5ded58bb2ec030b22136310663165a</div>
            <div class="odd">945 MB</div>
            <div class="even"><a target="_blank" href="https://sourceforge.net/projects/aryalinux/files/releases/2.1/aryalinux-2.1-base-system-with-xfce-x86_64.tar.gz">AryaLinux 2.1 base system with X Server and XFCE</a></div>
            <div class="even">fffa77cec2f8acf1a46c10d87be14c93</div>
            <div class="even">1.5 GB</div>
            <div class="odd"><a target="_blank" href="https://sourceforge.net/projects/aryalinux/files/releases/2.1/aryalinux-2.1-base-system-with-mate-x86_64.tar.gz">AryaLinux 2.1 base system with X Server and Mate</a></div>
            <div class="odd">45386ba4b71c44650e479119a63e57d6</div>
            <div class="odd">1.8 GB</div>
            <div class="even"><a target="_blank" href="https://sourceforge.net/projects/aryalinux/files/releases/2.1/aryalinux-2.1-base-system-with-kde5-x86_64.tar.gz">AryaLinux 2.1 base system with X Server and KDE Plasma</a></div>
            <div class="even">165d6b9f8124f24542f14c0addcbedca</div>
            <div class="even">2.1 GB</div>
            <div class="odd"><a target="_blank" href="https://sourceforge.net/projects/aryalinux/files/releases/2.1/aryalinux-2.1-base-system-with-gnome-x86_64.tar.gz">AryaLinux 2.1 base system with X Server and Gnome</a></div>
            <div class="odd">746a083381144dd12d0fc757aefc7018</div>
            <div class="odd">2 GB</div>
        </div>
        <br>
        <h2>Older Releases</h2>
        <p>
            For older releases, visit our sourceforge site: <a target="_blank" href="https://sourceforge.net/projects/aryalinux/files/">https://sourceforge.net/projects/aryalinux/files/</a>.
        </p>
        <br>
        <br>
        </div>
    </div>
    <?php include_once('footer.php')?>
</body>
</html>