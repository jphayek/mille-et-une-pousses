<?php include "./inc/head.php";?>

<main id="account" class="account">

    <span class="circle b-lightPink"></span>

    <img class="leaf leaf-1" src="/media/leafs/leaf1_2.png" alt="leaf">
    <img class="leaf leaf-2" src="/media/leafs/leaf1_1.png" alt="leaf">

    <section id="account-one" class="account-one">

        <div class="text">
            <h1 class="title c-deepBlue">Bienvenue sur votre compte !</h1>
            <p class="c-deepBlue">Vous pouvez organiser vos abonnements, vos commandes mais aussi vos informations
                personnelles !</p>
        </div>

        <div class="buttons">
            <a href="/user/orders" class="btn btn-deepBlue b-deepBlue c-white">mes commandes</a>
            <button id="subscriptionProfile" class="btn btn-deepBlue b-deepBlue c-white">mes abonnements</button>
            <button id="infoProfile" class="btn btn-deepBlue b-deepBlue c-white">informations personnels</button>
        </div>
    </section>

    <section id="account-two" class="account-two none">
        <p class="text c-deepBlue">Votre abonnement box touche à sa fin et vous souhaitez renouveler votre abonnement ?
            On vous comprend totalement ! Un seul clic et vous voilà assuré de recevoir votre box le mois prochain !
        </p>
        <p class="text c-deepBlue">Vous souhaitez résilier votre abonnement ?
            N’hésitez pas à nous faire part de vos retours ainsi que les points que vous aimeriez voir améliorés.</p>

        <div class="container">

            <div class="button">

                <div class="img">
                    <img src="/media/img/background_leafs.png" alt="leafs">
                </div>

                <form action="" method="post">
                    <input class="c-pinkOrange" type="submit" value="renouveler">
                </form>

                <span class="bar top-bar b-deepBlue"></span>
                <span class="bar right-bar b-deepBlue"></span>
                <span class="bar bottom-bar b-deepBlue"></span>
                <span class="bar left-bar b-deepBlue"></span>
            </div>

            <div class="button">

                <div class="img">
                    <img src="/media/img/background_leafs.png" alt="leafs">
                </div>

                <div class="form">
                    <form action="" method="post">
                        <input class="c-pinkOrange" type="submit" value="résilier">
                    </form>
                </div>

                <span class="bar top-bar b-deepBlue"></span>
                <span class="bar right-bar b-deepBlue"></span>
                <span class="bar bottom-bar b-deepBlue"></span>
                <span class="bar left-bar b-deepBlue"></span>
            </div>
        </div>
        <button class="btn btn-lightPink b-lightPink c-white backToProfile">retour</button>
    </section>

    <section id="account-three" class="account-three none">
        <p class="text c-deepBlue">Un changement d’adresse ?<br> Pas de soucis, changez vos informations personnelles
            quand vous
            le souhaitez ! </p>
        <div class=container>
            <div class="info">
                <h3 class='c-deepBlue'>mails</h3>
                <button class="btn btn-deepBlue b-deepBlue c-white">modifier</button>
            </div>
            <div class="info">
                <h3 class='c-deepBlue'>adresse</h3>
                <button class="btn btn-deepBlue b-deepBlue c-white">modifier</button>
            </div>
            <div class="info">
                <h3 class='c-deepBlue'>téléphone</h3>
                <button class="btn btn-deepBlue b-deepBlue c-white">modifier</button>
            </div>
            <div class="info">
                <h3 class='c-deepBlue'>mot de passe</h3>
                <button class="btn btn-deepBlue b-deepBlue c-white">modifier</button>
            </div>
        </div>
        <button class="btn btn-lightPink b-lightPink c-white backToProfile">retour</button>
    </section>
</main>

<?php include "./inc/foot.php";?>