<!DOCTYPE html>
<html lang="en-gb">
<?php include 'includes/head.php'; ?>
<body>
<?php include 'includes/header.php'; ?>
<main role="main">
    <div class="navigation-container">
        <div class="heading-container">
            <div class="logo-holder">
                <img src="images/100-logo.svg" alt="First World War 100" width="100%">
            </div>
            <h1>Germany in 1914</h1>
        </div>
        <div class="map-container">
            <img src="images/1914_Germany.svg" alt="1914 Germany map">
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

                    <p> Germany rapidly expanded its navy and army and in 1914 planned to defeat both France and Russia
                        in a
                        show of military strength. The strategy relied on a quick and decisive victory but the war on
                        the
                        western front soon became a stalemate. The allied blockade of German ports began to result in
                        shortages of food. The arrival of American troops in 1917 compounded Germany’s difficulties.
                    </p>
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
<?php include 'includes/footer-scripts.php'; ?>
<script>
    $("ul[role='tablist'] li").tabify();
</script>
</body>
</html>
