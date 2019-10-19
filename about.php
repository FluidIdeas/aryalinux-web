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
	<h1>About AryaLinux</h1>
	<h3>Linux, built from scratch</h3>
	<p>AryaLinux is built from scratch. Arya is not a remaster or spin of any other Linux distribution. There are advantages and disadvantages of the same. Arya for instance is built purely by building individual components of a GNU/Linux system and compiling all of it together into one unit from sources that are publicly availble. That is the way most open source softwares work. In a way you can say AryaLinux is "vanilla Linux". As a matter of fact you too can build AryaLinux on your system from scratch, provided you have a system powerful enough to undertake such a taxing job. Such a purist approach to building a Linux distribution however has its downsides. Since AryaLinux is not compatible with any other Linux distribution, their binary packages cannot be reliably used on Arya. A lot of such distributions being developed over a much longer time have matured and have a very large application database which you would not be able to use. One such thing is &quot;games&quot;. There are very few open source games for Linux. They are the only ones that run on Arya, because they can be built from their source code.</p>
	<p>Other than AryaLinux is a very simple Linux system, yet powerful enough to handle anything ranging from home computing to hosting enterprise applications, from profession Video processing to Machine Learning, Big Data and Analytics.</p>
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
