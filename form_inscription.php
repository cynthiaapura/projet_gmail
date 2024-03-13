<?php
    include_once __DIR__."/include/inscription_head.inc.php";
?>

<body> 
    <?php
        include_once __DIR__."/include/inscription_header.inc.php";
    ?>

    <main>
   
        <section class="formInscription">
        <p class="warning">
            <?php
                include_once __DIR__."/controller/userManager.class.php";
            ?>
        </p>
        
            <?php
                include_once __DIR__."/include/inscription_form.inc.php";
            ?>

        </section>
    </main>

    <?php
        include_once __DIR__."/include/inscription_footer.inc.php";
    ?>

</body>
</html>