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
    <div class="container" style="margin: 2em auto">
        <div style="float: left; width: 60%">
            <div style="padding: 2em 2em 2em 0">
                <h2>Welcome to AryaLinux</h2>
                <p>
                    AryaLinux is a GNU/Linux system built from source. It provides a customizable, clean, intuitve and safe computing environment. Arya, comes pre-loaded with
                    lots of applications for day-to-day usage like media players, browsers and office productivity suite. Arya is fast and secure and brings the best of the Linux
                    world is a package that is not only easy to learn and use but also safe and productive.
                </p>
                <p>Learn more about AryaLinux <a href="#">here</a>.</p>
            </div>
        </div>
        <div style="float: left; width: 40%">
            <div style="padding: 2em 3em; background-color: #b16e4b; color: #fff; border-radius: 10px;">
                <h2>AryaLinux 2.0 is out.</h2>
                <p>
                    AryaLinux 2.0 was released with updates for a lot of packages, a new kernel, a completely rewritten alps packaging tool and whole new package management features.
                </p>
                <p>Read the release notes <a href="release-notes-2.0.php">here</a>.</p>
                <p><a href="#" class="download-button">Download Now</a></p>
            </div>
        </div>
        <div style="clear: both"></div>
    </div>
    <hr class="thin">
    <div class="container">
        <div style="padding: 2em 0">
            <ul style="list-style-type: none; margin: 0px; padding: 0px; border: 0px;" class="news-snips">
                <li>
                    <div class="datetime">November 24, 2019</div>
                    <div class="author">Administrator</div>
                    <p>
                        Release 2.0 would be shipping with support for flatpak out of the box. This would help users install applications from flathub with ease.
                        The AryaLinux Software Center is a frontend to flathub that would enable users install/uninstall/update apps with ease.
                    </p>
                </li>
                <li>
                    <div class="datetime">October 15, 2019</div>
                    <div class="author">Administrator</div>
                    <p>
                        AryaLinux 2.0 was released with lots of package updates. This is a major release coming almost two years after the last release.
                        A lot of problems have been fixed with support for more recent NVidia graphics cards. Cick <a href="#">here</a> to read the release notes for the release.
                    </p>
                </li>
                <li>
                    <div class="datetime">October 15, 2019</div>
                    <div class="author">Administrator</div>
                    <p>
                        Started working on the next release of AryaLinux. There are a lot of things to be done in this release. For a full list of features and their implementation status click <a href="#">here</a>.
                    </p>
                </li>
                <li>
                    <div class="datetime">October 15, 2019</div>
                    <div class="author">Administrator</div>
                    <p>
                        Rewrote the installer from scratch. This time the installer is based on py-gtk rather than wxPython as it was in the previous release. For a complete list of
                        changes in the new installer, click <a href="#">here</a>.
                    </p>
                </li>
                <li>
                    <div class="datetime">October 15, 2019</div>
                    <div class="author">Administrator</div>
                    <p>
                        AryaLinux moved over to a new .info domain. Due to nothing less than negligence we lost the .com domain. Our sincere apologies for the same.
                        From now on, &quot;aryalinux.info&quot; is the new home of AryaLinux.
                    </p>
                </li>
            </ul>
        </div>
    </div>
    <?php include_once('footer.php')?>
</body>
</html>