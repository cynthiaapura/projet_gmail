<?php
    include_once __DIR__."/include_inscription/inscription_head.inc.php";
?>

<body> 
    <?php
        include_once __DIR__."/include_inscription/inscription_header.inc.php";
    ?>

    <main>
        <?php
            require_once __DIR__ . "/controller/controller_base.class.php";
            ControllerBase::event();
        ?>

        <?php
            include_once __DIR__."/controller/userManager.class.php";
        ?>
    
        <section class="formInscription">
            <h2>
                Une boite de réception entièrement repensée
            </h2>
            <p>
                Avec les nouveaux onglets personnalisables, repérez immédiatemment les nouveaux messages et choisissez ceux que vous souhaitez lire en priorité.
            </p>

            <?php
                include_once __DIR__."/include_inscription/inscription_form.inc.php";
            ?>

        </section>
    </main>

    <?php
        include_once __DIR__."/include_inscription/inscription_footer.inc.php";
    ?>

</body>
</html>