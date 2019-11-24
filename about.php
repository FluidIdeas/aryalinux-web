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
	<h2>About AryaLinux</h2>
	<h3>Linux, built from scratch</h3>
	<p>AryaLinux is built from scratch. Arya is not a remaster or spin of any other Linux distribution.
  There are advantages and disadvantages of the same.
  Arya for instance is built purely by building individual components of a GNU/Linux system and compiling all of it together into one unit from sources that are publicly availble.
  This helps us provide a very realistic open source experience where everything that your system is made up of is openly available and is used vanilla without any patches and updates from us.
  In a way you can say AryaLinux is "vanilla Linux".
  As a matter of fact you too can build AryaLinux on your system from scratch, provided you have a system powerful enough to undertake such a taxing job.
  Such a purist approach to building a Linux distribution however has its downsides.
  Since AryaLinux is not compatible with any other Linux distribution, their binary packages cannot be reliably used on Arya.
  A lot of such distributions being developed over a much longer time have matured and have a very large application database which you would not be able to use.
  One such thing is &quot;games&quot;.
  There are very few open source games for Linux, whose source code is available for public download.
  They are the only ones that run on Arya, because they can be built from their source code.
  </p>
	<p>Other than AryaLinux is a very simple Linux system, yet powerful enough to handle anything ranging from home computing to hosting enterprise applications, from profession Video processing to Machine Learning, Big Data and Analytics development.</p>
	<br>
  <h3>Developed by developers for developers</h3>
  <p>
  While developing AryaLinux, we put in a lot of thought and efforts into understanding what an end user would need.
  Being programmers ourselves, our natural tendency was to build something that would run out of the box for developers and would support developers in all ways possible.
  Despite the bias Arya would also prove to be useful to the professional and the content developer and the graphics and multimedia artists.
  We took time to understand what applications are useful for people in specialized areas of expertise and made sure that those applications are supported either natively or through flatpaks.
  </p>
  <p>
  We also made sure AryaLinux is aesthetically pleasing, looks modern and is snappy enough to be termed as a professional Linux variant than a mere distro-hopper's whim.
  Given the right choice of hardware platform, Aryalinux not just works like a charm but also looks equally good and can handle loads of computing work with ease.
  <p>
  <br>
  <h3>Applications supported through flatpak</h3>
  <p>A problem that we noticed with earlier versions of AryaLinux was the very closed way in which AryaLinux was supporting applications.
  Since the repository of applications was very small, we felt the need to support bigger application repositories.
  This is where there was a major challenge because repositories are distro specific and AryaLinux would have to lose its identity to support any of the widely used ones available.
  At this point in time flatpak was the most natural and logical choice for us because not only does flatpak provide a very versatile repository of applications but also provides a very distro-agonistic way of dealing with them.
  With this is mind, we built flatpak support natively into AryaLinux and you can install flatpak applications in AryaLinux out of the box.
  </p>
  <p>
  We also developed the aryalinux-software-center which is essentially a front-end to flatpak-flathub though which application installation/uninstallation/update etc can be done with ease.
  In due course of time we would also built support for docker in AryaLinux so that server containers could be easily installed in AryaLinux.
  </p>
  <p>
  Freeing ourselves from application and package management gives us time to focus in adding value to the base operating system and make it more robust, secure and reliable.
  </p>
  <br>
	<h3>ALPS packaging tool</h3>
	<p>One of the things that defines a Linux distribution is the package management system used by the distribution. AryaLinux does not have any form of packaging and hence there is no package manager for Arya. Since applications in AryaLinux are compiled from their source code, the simple default way of compiling and installing open source packages from their source code works perfectly for Arya. This is however also the reason behind few inconvenincences. A few applications(like libreoffice and firefox) take quiet a bit of time and computing resource to be built thus rendering the system unusable during the compilation process save modern powerful hardware or very simple application usage. For this reason large applications are also available as binaries so that they can be directly installed. Also there is no standard way of removing packages in this system.</p>
	<p>In Arya, to make the process of building and installing easy, we have put a very simple Python and bash scripts based tool in AryaLinux called ALPS(AryaLinux Packaging System) which has an interface similar to package managers in other distributions, thus making the process of application installation, dependency resolution and updates very easy in Arya. Read more about ALPS <a href="#">here</a></p>
	<br>
	<br>
    </div>
    <?php include_once('footer.php')?>
</body>
</html>
