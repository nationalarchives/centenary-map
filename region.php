<!DOCTYPE html>
<html lang="en-gb">
<?php include 'includes/head.php'; ?>
<body>
<?php include 'includes/header.php'; ?>
<main role="main">
    <div class="navigation-container">
        <div class="heading-container">
            <div class="logo-holder">
                <img src="images/100-logo.svg" alt="First World War 100">
            </div>
            <h1>Europe in 1914</h1>
        </div>
        <div class="map-container" style="padding-bottom: 32%; position relative;">
            <ul class="utilities">
                <li><a href="#countries" id="countries-link">Countries/territories</a></li>
            </ul>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                 y="0px"
                 viewBox="170 70 300 333.15" xml:space="preserve" width="100%" height="100%"
                 preserveAspectRatio="xMidYMin slice" style="position: absolute;">
            <?php include 'includes/1914-map-mono.php'; ?>
        </div>
    </div>
    <div class="row box">
        <div class="container center">
            <?php include 'includes/breadcrumb.php'; ?>
        </div>
    </div>
    <div class="container">
        <div class="center breather">
            <div class="row">
                <div class="col starts-at-full">
                    <div class="width-full"><a id="countries"></a>

                        <h2 class="icon">European countries/territories</h2></div>
                    <div id="desktop-keywords">
                        <ul class="no-bullet border-none keywords-selectable clr">
                            <li><a href="">Albania</a></li>
                            <li><a href="">Austria-Hungary</a></li>
                            <li><a href="">Belgium</a></li>
                            <li><a href="">Bulgaria</a></li>
                            <li><a href="">Denmark</a></li>
                            <li><a href="country.php">Germany</a></li>
                            <li><a href="">Greece</a></li>
                            <li><a href="">Italy</a></li>
                            <li><a href="">Lichtenstein</a></li>
                            <li><a href="">Luxembourg</a></li>
                            <li><a href="">Montenegro</a></li>
                            <li><a href="">Netherlands</a></li>
                            <li><a href="">Norway</a></li>
                            <li><a href="">Portugal</a></li>
                            <li><a href="">Roumania</a></li>
                            <li><a href="">Serbia</a></li>
                            <li><a href="">Sweden</a></li>
                            <li><a href="">Switzerland</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<a id="goTop"></a>
<?php include 'includes/footer.php'; ?>
<?php include 'includes/footer-scripts.php'; ?>
</body>
</html>
