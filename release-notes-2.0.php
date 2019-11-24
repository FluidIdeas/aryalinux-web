<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>Home of AryaLinux, Linux built from source</title>
  <meta name="description" content="AryaLinux, Linux built from source">
  <meta name="author" content="Chandrakant">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <?php include_once('logo.php')?>
    <?php include_once('main-menu.php')?>
    <div class="container">
	<h2>AryaLinux 2.0 Release Notes</h2>
    <p>
    This release of AryaLinux brings about a lot of fundamental changes like the previous releases have and these changes are geared more towards proving an easier to use and more robust operating system platform for our users.
    Here are a few changes that you would notice in AryaLinux 2.0:    
    </p>
    <ul>
        <li>Updated, packages and the latest kernel available at the time the build was done.</li>
        <li>A rewrite of the alps packaging tool running on python3</li>
        <li>A pygtk based binary application installer tool which can be used to install binary applications from their downloaded tarballs. At present only a handful of applications are supported but we would be adding support for more applications in due course of time. More details <a href="#">here</a>.</li>
        <li>Integration of flathub. Applications can now be easily installed in AryaLinux through the aryalinux-software-center.</li>
        <li>Improved support for nvidia graphics.</li>
        <li>Tested on systems as old as 3rd generation intel i3 processors.</li>
        <li>The installer has been re-written on pygtk.</li>
        <li>Support for partition management in the installer through gparted.</li>
        <li>Updated wallpapers and themes.</li>
    </ul>
    <p>Here are the issues that are fixed in this version of AryaLinux:</p>
    <ul>
        <li>Fixed issue with bootloader installation of UEFI systems while building from scratch.</li>
        <li>Fixed no-graphics after booting problem with some systems.</li>
        <li>Fixed issues related to installation of AryaLinux inside VMWare and VirtualBox.</li>
        <li>Fixed build issues related to dconf which were breaking build of other packages like gnome-terminal, ibus and dconf-editor.</li>
    </ul>
	<br>
    </div>
    <?php include_once('footer.php')?>
</body>
</html>
