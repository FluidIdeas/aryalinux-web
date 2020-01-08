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
    <div class="banner-container"><div class="container"><h2>About AryaLinux</h2></div></div>
    <div class="main-content">
        <div class="container">
        <h2>Frequently Asked Questions</h2>
        <dl>
            <dt>Is AryaLinux dead?</dt>
            <dd>
            Absolutely not. We are a bit slow compared to other distributions when it comes to doing releases but we are constantly
            working on making AryaLinux more usable and less of a distribution for enthusiasts or distro-hoppers. You can figure out
            how much development activity is happening in AryaLinux by looking at our bitbucket repositories. Nevertheless, AryaLinux
            is far from dead and we are working on bringing better versions of AryaLinux with every release. Being fairly young in the
            Linux distribution sphere, we are still discovering and learning but we intend to go much further.
            </dd>
            <dt>Who is AryaLinux meant for? Who uses AryaLinux?</dt>
            <dd>
            Well, anyone who has a desktop or laptop can use AryaLinux(provided it has the 64 bit Intel architecture). AryaLinux is
            a general-purpose distribution which means it can more or less fit into the requirements of the general public. AryaLinux
            has been downloaded over 43,000 times in 153 countries(stats provided by sourceforge.net) and is used by enthusiasts who
            have tried LFS and BLFS and intend to build their own Linux distribution. Since AryaLinux helps you build your own distro
            by providing the tools and platform to do so, people have created their own distributions using AryaLinux. We use AryaLinux
            as our primary desktop environment and use it do everything ranging from software development to video editing and production.
            </dd>
            <dt>What is the package manager in AryaLinux?</dt>
            <dd>
            AryaLinux is source-based. So it does not have a package manager like other distros which deal in package binaries.
            AryaLinux ships with a command line tool to install and update applications - alps. alps can be used to install
            applications using build scipts that are bash scripts with instructions to download, build and install the packages
            from source tarballs that are publicly available over the internet.
            alps can resolve package dependencies and can also be used to update packages. A detailed documentation of alps
            can be found <a href="#">here</a>.
            </dd>
            <dt>Does AryaLinux support package managers of other distributions?</dt>
            <dd>
            While it's difficult, yet doable to build support for let's say debian package manager or other package managers,
            it defeats the purpose of having a different distro altogether. Sometimes one might find the repository of
            AryaLinux too sparse and might wish for a support of deb or rpm built into AryaLinux. This would definitely bring
            in a huge set of applications into AryaLinux repositories, yet installing applications would bring in their
            dependencies in a recursive fashion which would overwrite AryaLinux packages, thus breaking other applications or
            libraries. AryaLinux comes with built in support for docker and flatpak and thus their repositories are at your disposal
            if you are looking for applications outside AryaLinux repositories.
            </dd>
            <dt>Would AryaLinux be supporting desktop environments like Cinnamon or Deepin?</dt>
            <dd>
            Well, we would love to but with sparse documentation on how to install these desktop environments in AryaLinux like
            distributions it is an uphill task. We are still working on bringing in other desktop environments under the AryaLinux
            umbrella and would provide more information in future regrarding the same as things unfold.
            </dd>
            <dt>Can AryaLinux be used on servers?</dt>
            <dd>
            Yes AryaLinux can be used on servers. AryaLinux being vanilla GNU/Linux, it provides a very slim system to be deployed
            on servers. There is one downside however. We have not worked on orienting AryaLinux towards running on servers. So
            things like security and server related concerns have not been dealt with. We have also not been contacted by users
            running AryaLinux as a server. In case we are, we would love to work it out.
            </dd>
        </dl>
        </div>
    </div>
    <?php include_once('footer.php')?>
</body>
</html>