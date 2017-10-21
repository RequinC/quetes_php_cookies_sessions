<?php require 'inc/head.php';

if (empty($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

$cart = $_COOKIE["cart"];
if (!empty($_GET)) {
    switch ($_GET["ajout"]) {
        case "pecan":
            $cart["pecan"]++;
            setCookie("cart[pecan]", $cart["pecan"]);
            break;
        case "chocolateChips":
            $cart["chocolateChips"]++;
            setCookie("cart[chocolateChips]", $cart["chocolateChips"]);
            break;
        case "chocolateCookie":
            $cart["chocolateCookie"]++;
            setCookie("cart[chocolateCookie]", $cart["chocolateCookie"]);
            break;
        case "mCookies":
            $cart["mCookies"]++;
            setCookie("cart[mCookies]", $cart["mCookies"]);
            break;
    }
}
?>

<section class="cookies container-fluid">
    <div class="row">
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="assets/img/product-46.jpg" alt="cookies chocolate chips" class="img-responsive">
                <figcaption class="caption">
                    <h3>Pecan nuts</h3>
                    <p>Cooked by Penny !</p>
                    <a href="index.php?ajout=pecan" class="btn btn-primary">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                    </a>
                </figcaption>
            </figure>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="assets/img/product-36.jpg" alt="cookies chocolate chips" class="img-responsive">
                <figcaption class="caption">
                    <h3>Chocolate chips</h3>
                    <p>Cooked by Bernadette !</p>
                    <a href="index.php?ajout=chocolateChips" class="btn btn-primary">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                    </a>
                </figcaption>
            </figure>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="assets/img/product-58.jpg" alt="cookies chocolate chips" class="img-responsive">
                <figcaption class="caption">
                    <h3>Chocolate cookie</h3>
                    <p>Cooked by Bernadette !</p>
                    <a href="index.php?ajout=chocolateCookie" class="btn btn-primary">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                    </a>
                </figcaption>
            </figure>
        </div>

        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="assets/img/product-32.jpg" alt="cookies chocolate chips" class="img-responsive">
                <figcaption class="caption">
                    <h3>M&M's&copy; cookies</h3>
                    <p>Cooked by Penny !</p>
                    <a href="index.php?ajout=mCookies" class="btn btn-primary">
                        <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
                    </a>
                </figcaption>
            </figure>
        </div>
    </div>
</section>

<?php require 'inc/foot.php'; ?>
