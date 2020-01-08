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
    <?php include_once('header.php')?>
    <div class="page-heading-container">
        <div class="container">
            <div class="page-heading">AryaLinux 2.1 Release notes</div>
        </div>
    </div>
    <div class="main-content">
        <div class="container">
            <p>
            Listed below are some of the changes that have made it to this release of AryaLinux.
            Apart from package updates and upgrades, there are several things that make this release
            different from our other releases.
            </p>
            <ul>
                <li>Release for all supported desktop environments: XFCE, Mate, KDE and Gnome</li>
                <li>Kernel major version update from 4.x to 5.x</li>
                <li>All package versions in line with package versions of LFS and BLFS stable book version 9.0</li>
                <li>A complete rewrite of AryaLinux took place before this release which resulted in few
                regressions. We are working on the same. Please click <a href="known-issues-2.1.php">here</a> for known issues in this release.</li>
                <li>Updates and upgrades in a lot of packages, the KDE, Mate and Gnome desktop environments</li>
                <li>Support for Flatpak and Docker provided in this release. Docker and Flatpak work out of the box.</li>
                <li>A complete rewrite of the AryaLinux installer on Python3 and PyGTK.</li>
                <li>Gnome 3 desktop layout changed to resemble the windows style desktop.</li>
                <li>
                KDE plasma and QT5 now gets installed in /usr prefix instead of the old /opt prefix.
                The installation prefix was the root cause of several KDE issues which were taken
                care of by making this change.</li>
                <li>Chrome can now be installed by installing the chromium-bin package.</li>
                <li>Firefox can now be installed by installing the firefox-bin package.</li>
                <li>Fixed a build script issue related to bootloader installation in UEFI systems.</li>
                <li>Fixed several build script issues for applications.</li>
                <li>NVidia drivers supported with this release. We were able to lay our hands on a 1650 and resolved several issues with NVidia cards in AryaLinux.</li>
                <li>Tested on HiDPI systems(Gnome and KDE). Scaling works without any issues.</li>
            </ul>
        </div>
    </div>
    <?php include_once('footer.php')?>
</body>
</html>