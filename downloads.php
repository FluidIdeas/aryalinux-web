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
        <b style="color: red">Please note that password for the aryalinux account and root in the Live Disk is aryalinux and has super user rights.</b>
        <!--<br>
        <b style="color: red">The Installer hangs while installing AryaLinux on a system with MSDOS partition table with the message: "NameError: global name 'subprocess' is not defined". Please follow <a href="help.php?article=install-on-mulitple-hdd">this</a>
        article to fix the issue. The issue has been fixed and we are uploading the new files and they would be available shortly.</b>-->
        </p>
        <div style="display: grid; grid-template-columns: 2.5fr 2fr 0.6fr;">
            <div class="head">URL</div>
            <div class="head">MD5</div>
            <div class="head">Size</div>
            <div class="odd"><a target="_blank" href="https://sourceforge.net/projects/aryalinux/files/releases/2.4/full/aryalinux-2.4-gnome-x86_64.iso">aryalinux-2.4-gnome-x86_64.iso</a></div>
            <div class="odd">967fdadad3dcab77c36ca49b5c3b1baf</div>
            <div class="odd">2.6 GB</div>
            <div class="even"><a target="_blank" href="https://sourceforge.net/projects/aryalinux/files/releases/2.4/full/aryalinux-2.4-kde-x86_64.iso">aryalinux-2.4-kde-x86_64.iso</a></div>
            <div class="even">abdeb28be07f91a2c18a548f0c54fdd2</div>
            <div class="even">3.2 GB</div>
            <div class="odd"><a target="_blank" href="https://sourceforge.net/projects/aryalinux/files/releases/2.4/full/aryalinux-2.4-mate-x86_64.iso">aryalinux-2.4-mate-x86_64.iso</a></div>
            <div class="odd">e10e8fcaaf465e2bb88415aae59aac22</div>
            <div class="odd">2.8 GB</div>
            <div class="even"><a target="_blank" href="https://sourceforge.net/projects/aryalinux/files/releases/2.4/full/aryalinux-2.4-xfce-x86_64.iso">aryalinux-2.4-xfce-x86_64.iso</a></div>
            <div class="even">30577fb147c7109f9fc4be40e534fd7e</div>
            <div class="even">3.4 GB</div>
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
            <div class="even"><a target="_blank" href="https://sourceforge.net/projects/aryalinux/files/releases/2.4/min/aryalinux-2.4-gnome-slim-x86_64.iso">aryalinux-2.4-gnome-slim-x86_64.iso</a></div>
            <div class="even">0a91e74fd785fc99f2b8a8b1ef9aaec8</div>
            <div class="even">1.7 GB</div>
            <div class="odd"><a target="_blank" href="https://sourceforge.net/projects/aryalinux/files/releases/2.4/min/aryalinux-2.4-kde-slim-x86_64.iso">aryalinux-2.4-kde-slim-x86_64.iso</a></div>
            <div class="odd">a5fe5751aca716d895cf44fc1345d412</div>
            <div class="odd">2.1 GB</div>
            <div class="even"><a target="_blank" href="https://sourceforge.net/projects/aryalinux/files/releases/2.4/min/aryalinux-2.4-mate-slim-x86_64.iso">aryalinux-2.4-mate-slim-x86_64.iso</a></div>
            <div class="even">79e6ba44e10f5663092918f51b69e67f</div>
            <div class="even">1.6 GB</div>
            <div class="odd"><a target="_blank" href="https://sourceforge.net/projects/aryalinux/files/releases/2.4/min/aryalinux-2.4-xfce-slim-x86_64.iso">aryalinux-2.4-xfce-slim-x86_64.iso</a></div>
            <div class="odd">faa9aaa0978df3235aa02c61363cf3d3</div>
            <div class="odd">1.5 GB</div>
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
            <div class="even"><a target="_blank" href="https://sourceforge.net/projects/aryalinux/files/releases/2.4/aryalinux-2.4-base-system-x86_64.tar.gz">AryaLinux 2.4 base system</a></div>
            <div class="even">07e1c773639470c3689672de36309db5</div>
            <div class="even">1.1 GB</div>
            <div class="odd"><a target="_blank" href="https://sourceforge.net/projects/aryalinux/files/releases/2.4/aryalinux-2.4-base-system-with-xserver-x86_64.tar.gz">AryaLinux 2.4 base system with X Server</a></div>
            <div class="odd">e4c3e097239d4214bcf132bfe78a3567</div>
            <div class="odd">1.5 GB</div>
            <div class="even"><a target="_blank" href="https://sourceforge.net/projects/aryalinux/files/releases/2.4/min/aryalinux-2.4-base-system-with-xfce-x86_64.tar.gz">AryaLinux 2.4 base system with X Server and XFCE</a></div>
            <div class="even">014b1fbb84a116c38407e25782e6cedc</div>
            <div class="even">2.2 GB</div>
            <div class="odd"><a target="_blank" href="https://sourceforge.net/projects/aryalinux/files/releases/2.4/min/aryalinux-2.4-base-system-with-mate-x86_64.tar.gz">AryaLinux 2.4 base system with X Server and Mate</a></div>
            <div class="odd">75aed625a4a66de1ad662cefe613cc69</div>
            <div class="odd">2.4 GB</div>
            <div class="even"><a target="_blank" href="https://sourceforge.net/projects/aryalinux/files/releases/2.4/min/aryalinux-2.4-base-system-with-kde5-x86_64.tar.gz">AryaLinux 2.4 base system with X Server and KDE Plasma</a></div>
            <div class="even">20ef27b623ec273dd6d5fccbf4e5827e</div>
            <div class="even">2.9 GB</div>
            <div class="odd"><a target="_blank" href="https://sourceforge.net/projects/aryalinux/files/releases/2.4/min/aryalinux-2.4-base-system-with-gnome-x86_64.tar.gz">AryaLinux 2.4 base system with X Server and Gnome</a></div>
            <div class="odd">59fe11c0966575cd5e22397e398e275b</div>
            <div class="odd">2.5 GB</div>
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