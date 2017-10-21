<?php require 'inc/head.php';

if (empty($_SESSION['user'])) {
    header("location: login.php");
}

$cart = $_COOKIE["cart"];

$total = 0;
$total += $cart["pecan"];
$total += $cart["chocolateChips"];
$total += $cart["chocolateCookie"];
$total += $cart["mCookies"];
?>

<section class="cookies container-fluid">
    <div class="row">
        <div class="col-xs-8 col-xs-offset-2">
            <div class="panel panel-default text-center">
                <div class="panel-heading">
                    <h3 class="panel-title">Votre panier</h3>
                </div>

                <div class="panel-body">
                    <?= " Vous avez " . $cart["pecan"] . " cookie(s) aux noix de pécan <br/>"; ?>
                    <?= " Vous avez " . $cart["chocolateChips"] . " cookie(s) aux pépites de chocolat <br/>"; ?>
                    <?= " Vous avez " . $cart["chocolateCookie"] . " cookie(s) tout chocolatés <br/>"; ?>
                    <?= " Vous avez " . $cart["mCookies"] . " cookie(s) aux M&M's <br/><br/>"; ?>
                </div>
            </div>

            <div class="btn-group btn-group-justified" role="group" aria-label="...">
                <a href="index.php">
                    <button type="button" class="btn btn-success r-push">Modifier mon panier</button>
                </a>

                <a href="cookie_init.php">
                    <button type="button" class="btn btn-info r-push">Vider mon panier</button>
                </a>
            </div>
        </div>
    </div>
</section>
<?php require 'inc/foot.php'; ?>

