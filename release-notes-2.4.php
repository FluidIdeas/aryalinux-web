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
            <div class="page-heading">AryaLinux 2.4 Release notes</div>
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
                <li>Kernel updated to version 5.5.8, subsequent update in the aufs kernel patches.</li>
                <li>Introducing in this release is alpsui - a synaptic-like User Interface to alps. alps ui is undergoing a lot of development and bug fixes at present. Please report problems to help us improve alpsui.</li>
                <li>Gnome 3.36 which was released a few days earlier. AryaLinux is one of the very first distributions to make a Gnome 3.36 release.</li>
                <li>Libreoffice updated to 6.4.0.3</li>
                <li>Much improved Indian language font support.</li>
                <li>A improvement in support of applications which need kernel headers like VMWare, VirtualBox, NVidia drivers etc, by providing the compiled kernel source directory with the release.</li>
                <li>Although we could not still achieve upradability and updatability in this release, we are very much in the path to getting updates and upgrades implemented so that AryaLinux ends up being a rolling release distro.</li>
            </ul>
        </div>
    </div>
    <?php include_once('footer.php')?>
</body>
</html>