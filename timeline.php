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
            <div class="page-heading">Development and Release timeline</div>
        </div>
    </div>
    <div class="main-content">
        <div class="container main-content-container">
            <div class="sidenav">
                <?php include_once('about-links.php')?>
            </div>
            <div>
                <table class="striped" cellspacing="0">
                    <thead>
                        <tr>
                            <th style="width: 25%">Date</th>
                            <th style="width: 20%">Status</th>
                            <th>Activity</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                Jan-31-2020 (Actual : Mar-16-2020)
                            </td>
                            <td>
                                Done
                            </td>
                            <td>
                                Release GUI for Alps - alpsui<br>
                                <span style="color: red; font-size: 0.8em">Several issues were fixed in the existing implementation
                                including the issue of not being able to stop the install process once it starts from the UI. These
                                changes took time and hence wasn't able to complete in time.</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                February 28, 2020
                            </td>
                            <td>
                                Pending
                            </td>
                            <td>
                                Development Release - 2.2. Finish working on the overlay method of system upgrade.
                                Make release of the overlay method for 2.1.<br>
                                <span style="color: red; font-size: 0.8em">Would be wise
                                to do this post fixing a proper update method for AryaLinux. This might involve shifting
                                out of the from source to binary paradigm.</span>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                February 28, 2020(Actual : March 16, 2020)
                            </td>
                            <td>
                                Done
                            </td>
                            <td>
                                Development Release - 2.4
                            </td>
                        </tr>
                        <tr>
                            <td>
                                16 May, 2020
                            </td>
                            <td>
                                To Be Started
                            </td>
                            <td>
                                Development Release - 2.5
                            </td>
                        </tr>
                        <tr>
                            <td>
                                June 09, 2020
                            </td>
                            <td>
                                To Be Started
                            </td>
                            <td>
                                Distribution Release - AryaLinux 2.5, Release the LxQT Spin.
                            </td>
                        </tr>
                        <tr>
                            <td>
                                June 09, 2020
                            </td>
                            <td>
                                To Be Started
                            </td>
                            <td>
                                Distribution Release - AryaLinux 2.5
                            </td>
                        </tr>
                        <tr>
                            <td>
                                -
                            </td>
                            <td>
                                To Be Started
                            </td>
                            <td>
                                Release the Deepin Spin.
                            </td>
                        </tr>
                        <tr>
                            <td>
                                -
                            </td>
                            <td>
                                -
                            </td>
                            <td>
                                Detour from the LFS/BLFS Path.
                            </td>
                        </tr>
                        <tr>
                            <td>
                                -
                            </td>
                            <td>
                                -
                            </td>
                            <td>
                                The Binary experiment
                            </td>
                        </tr>
                    </tbody>
                </table>
                <br><br>
            </div>
        </div>
    </div>
    <?php include_once('footer.php')?>
</body>
</html>