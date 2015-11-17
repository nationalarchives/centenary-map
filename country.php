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
            <?php
            $country = "Germany";
            function getCoordinates($country)
            {
                switch ($country) {
                    case "Germany":
                        echo "230 105 120 333.15";
                        break;
                    default:
                        echo "170 70 300 333.15";
                }
            }

            ?>
            <h1><?php echo($country) ?> in 1914</h1>
        </div>
        <div class="map-container" style="padding-bottom: 32%; position relative;">
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                 y="0px"
                 viewBox="<?php getCoordinates($country); ?>" xml:space="preserve" width="100%" height="100%"
                 preserveAspectRatio="xMidYMin slice" style="position: absolute;">
                <style>
                    .st4 {
                        stroke-width: 0.15 !important;
                    }
                </style>
                <?php include 'includes/1914-map-mono.php'; ?>
        </div>
    </div>
    <div class="row box">
        <div class="container center">
            <?php include 'includes/breadcrumb.php'; ?>
        </div>
    </div>
    <div class="row">
        <div class="container center margin-top-large">
            <div class="col starts-at-full ends-at-one-third">
                <ul class="no-bullet" role="tablist">
                    <li id="panel-1" role="tab"><a href="">Overview</a></li>
                    <li id="panel-2" role="tab"><a href="">Prelude to war</a></li>
                    <li id="panel-3" role="tab"><a href="">The Front Line</a></li>
                    <li id="panel-4" role="tab"><a href="">Home Front</a></li>
                    <li id="panel-5" role="tab"><a href="">Armistice and Aftermath</a></li>
                </ul>
            </div>
            <div class="col starts-at-full ends-at-two-thirds">
                <div class="tabs" role="tabpanel" aria-labelledby="panel-1">
                    <h2>Overview</h2>
                    <img src="http://www.nationalarchives.gov.uk/wp-content/uploads/2014/06/CAB-24-144-127.jpg" alt="">

                    <p> Situated in Central Europe, the German Empire was one of the Central Powers in the First World
                        War.
                        The Empire had been established in 1871 following the unification of the German states under
                        Chancellor Otto von Bismarck.</p>

                    <p> Germany rapidly expanded its navy and army and in 1914 planned to defeat both France and Russia
                        in a
                        show of military strength. The strategy relied on a quick and decisive victory but the war on
                        the
                        western front soon became a stalemate. The allied blockade of German ports began to result in
                        shortages of food. The arrival of American troops in 1917 compounded Germany’s difficulties.
                    </p>
                </div>
                <div class="tabs" role="tabpanel" aria-labelledby="panel-2">
                    <h2>Prelude to war</h2>

                    <p> Germany rapidly expanded its navy and army and in 1914 planned to defeat both France and Russia
                        in a
                        show of military strength. The strategy relied on a quick and decisive victory but the war on
                        the
                        western front soon became a stalemate. The allied blockade of German ports began to result in
                        shortages of food. The arrival of American troops in 1917 compounded Germany’s difficulties.
                    </p>
                </div>
                <div class="tabs" role="tabpanel" aria-labelledby="panel-3">
                    <h2>The Front Line</h2>

                    <div class="image-list-container clr">
                        <div class="image">
                            <img
                                src="http://www.nationalarchives.gov.uk/wp-content/uploads/2014/07/Sir-Francis-Reginald-Wingate.jpg"
                                alt="General Sir Francis Reginald Wingate">
                        </div>
                        <div class="description">
                            <p class="margin-none"><a
                                    href="http://discovery.nationalarchives.gov.uk/SearchUI/Details?uri=C746060"
                                    title="Find out more about General Sir Francis Reginald Wingate" target="_blank">
                                    General Sir Francis Reginald Wingate </a></p>

                            <p>Governor General and Sirdar (1899-1916)</p>

                            <p class="caption"><a
                                    href="http://www.npg.org.uk/collections/search/portrait/mw103447/Sir-Francis-Reginald-Wingate-1st-Bt?LinkID=mp56415&amp;search=sas&amp;sText=Francis+Reginald+Wingate&amp;role=sit&amp;rNo=0"
                                    target="_blank" title="">Detail of NPG x91881, Sir Francis Reginald Wingate, 1st Bt
                                    © National Portrait Gallery, London.</a></p>
                        </div>
                    </div>
                    <div class="image-list-container clr">
                        <div class="image">
                            <img
                                src="http://www.nationalarchives.gov.uk/wp-content/uploads/2014/07/Sir-Francis-Reginald-Wingate.jpg"
                                alt="General Sir Francis Reginald Wingate">
                        </div>
                        <div class="description">
                            <p class="margin-none"><a
                                    href="http://discovery.nationalarchives.gov.uk/SearchUI/Details?uri=C746060"
                                    title="Find out more about General Sir Francis Reginald Wingate" target="_blank">
                                    General Sir Francis Reginald Wingate </a></p>

                            <p>Governor General and Sirdar (1899-1916)</p>

                            <p class="caption"><a
                                    href="http://www.npg.org.uk/collections/search/portrait/mw103447/Sir-Francis-Reginald-Wingate-1st-Bt?LinkID=mp56415&amp;search=sas&amp;sText=Francis+Reginald+Wingate&amp;role=sit&amp;rNo=0"
                                    target="_blank" title="">Detail of NPG x91881, Sir Francis Reginald Wingate, 1st Bt
                                    © National Portrait Gallery, London.</a></p>
                        </div>
                    </div>
                </div>
                <div class="tabs" role="tabpanel" aria-labelledby="panel-4">
                    <h2>Home Front</h2>

                    <p> Germany rapidly expanded its navy and army and in 1914 planned to defeat both France and Russia
                        in a
                        show of military strength. The strategy relied on a quick and decisive victory but the war on
                        the
                        western front soon became a stalemate. The allied blockade of German ports began to result in
                        shortages of food. The arrival of American troops in 1917 compounded Germany’s difficulties.
                    </p>
                </div>
                <div class="tabs" role="tabpanel" aria-labelledby="panel-5">
                    <h2>Armistice and Aftermath</h2>

                    <p> Germany rapidly expanded its navy and army and in 1914 planned to defeat both France and Russia
                        in a
                        show of military strength. The strategy relied on a quick and decisive victory but the war on
                        the
                        western front soon became a stalemate. The allied blockade of German ports began to result in
                        shortages of food. The arrival of American troops in 1917 compounded Germany’s difficulties.
                    </p>
                </div>
            </div>
        </div>
    </div>
</main>
<a id="goTop"></a>
<?php include 'includes/footer.php'; ?>
<script>
    var country = '';
    var country = "Germany";
</script>
<?php include 'includes/footer-scripts.php'; ?>
<script>
    $("ul[role='tablist'] li").tabify();
</script>
</body>
</html>
