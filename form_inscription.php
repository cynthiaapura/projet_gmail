<?php
    include_once __DIR__."/include_inscription/inscription_head.inc.php";
?>

<body> 
    <?php
        include_once __DIR__."/include_inscription/inscription_header.inc.php";
    ?>

    <main>

        <?php
            include_once __DIR__."/controller/userManager.class.php";
        ?>
    
        <section class="formInscription">
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