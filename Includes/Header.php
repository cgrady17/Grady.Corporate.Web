<?php require_once'Includes/Functions.php'; ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title><?php echo $page; ?> | Grady Capital LLC | inspired by innovation</title>
    <meta name="keywords" content="grady, capital, connor, investments, private, innovation, advanced, investment, gradycapital, bluefiber, blue, fiber, atomblue, proaffect" />
    <meta name="description" content="Grady Capital is the personal investment firm of Connor Grady and focuses on advanced technology markets and online services. Properties under management include atomBlue Design Studio and ProAffect Hosting." />
    <meta name="robots" content="index, follow" />
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <link rel="dns-prefetch" href="<?php echo $cdn1; ?>">
    <link href="<?php echo $cdn1; ?>CSS/GradyCapital.css" rel="stylesheet" />
    <script src="http://static.centurion.bluefiber.us/global/js/jquery/jquery-2.1.1.min.js"></script>
    <script src="<?php echo $cdn1; ?>Scripts/jquery.fittext.js"></script>
    <script src="<?php echo $cdn1; ?>Scripts/GradyCapital.js"></script>
</head>

<body>
<?php if ($page == 'Home') { ?>
        <div id="header-wrapper">
            <header>
                <div id="header-title">
                    <ul id="home-menu">
                        <li><a href="<?php echo $site; ?>About">About Us</a></li>
                        <li><a href="<?php echo $site; ?>Portfolio">Our Portfolio</a></li>
                        <li><a href="<?php echo $site; ?>Contact">Contact Us</a></li>
                    </ul>
                    <h3 id="header-welcome">Welcome to</h3>
                    <h1 id="header-brandname">Grady Capital</h1>
                    <h3 id="header-tagline"><span class="normal-weight">inspired by</span> <span class="bold-weight">innovation</span></h3>
                </div>
            </header>
        </div>
<?php } else {
    if ($page == 'About Us') {
        $aboutClass = 'active';
        $contactClass = 'inactive';
        $portfolioClass = 'inactive';
    } elseif ($page == 'Contact Us') {
        $contactClass = 'active';
        $aboutClass = 'inactive';
        $portfolioClass = 'inactive';
    } elseif ($page == 'Our Portfolio') {
        $portfolioClass = 'active';
        $contactClass = 'inactive';
        $aboutClass = 'inactive';
    }
    ?>
        <div id="page-header-wrapper">
            <header>
                <h1 class="page-header-title"><a href="<?php echo $site; ?>">Grady Capital</a></h1>
                <h3 class="page-header-tagline"><span class="normal-weight">inspired by</span> <span class="bold-weight">innovation</span></h3>
                <ul id="page-menu">
                    <li><a href="<?php echo $site; ?>About" class="<?php echo $aboutClass; ?>">About Us</a></li>
                    <li><a href="<?php echo $site; ?>Portfolio" class="<?php echo $portfolioClass; ?>">Our Portfolio</a></li>
                    <li><a href="<?php echo $site; ?>Contact" class="<?php echo $contactClass; ?>">Contact Us</a></li>
                </ul>
            </header>
        </div>
<?php } ?>