<?php
    include_once __DIR__."/include_co/connection_head.inc.php";
?>

<body>
    <?php
        include_once __DIR__."/include_co/connection_header.inc.php";
    ?>

    <main>
        <section class="home">
            <h2>
                Retrouvez la fluidité et la simplicité de Gmail sur tous vos appareils
                <a href="./form_inscription.php" class="account-creation">CRÉER UN COMPTE</a>
            </h2>
        </section>
    </main>

        <div id="scroll-btn"> 
            <a href="#formSection">
                <img src="./asset/arrow.png" alt="fleche vers le bas">
            </a>
        </div>

        <section class="form" id="formSection">
            <h2>
                Bienvenue dans votre espace null
            </h2>

            <?php
                include_once __DIR__."/include_co/connection_form.inc.php";
            ?>

        </section>
    </main>

    <?php
        include_once __DIR__."/include_co/connection_footer.inc.php";
    ?>
</body>
</html>