<?php

include_once './components/session.inc.php';
if (!isset($_SESSION["username"])) {
    header("location: http://localhost/Investing%20app/index.php?");
    die();
}

$activelink1 = true;
$logoutbtn = './logout.inc.php';
$menu0 = '../index.php';
$menu1 = '#';
include_once './components/navbar.inc.php';
?>

<main class="container start my1">
    <section class="mx1">
        <h2>What Is a Stock?</h2>
        <p class="my05">A stock (also known as equity) is a security that represents the ownership of a fraction of a
            corporation.
            This entitles the owner of the stock to a proportion of the corporation's assets and profits equal to how
            much stock they own. Units of stock are called "shares."
        </p>
        <p class="my05">
            Stocks are bought and sold predominantly on stock exchanges (though there can be private sales as well) and
            are the foundation of many individual investors' portfolios. These transactions have to conform to
            government regulations that are meant to protect investors from fraudulent practices. Historically, they
            have outperformed most other investments over the long run. These investments can be purchased from most
            online stockbrokers.
        </p>
        <h2>Stockholders and Equity Ownership</h2>
        <p class="my05">
            What shareholders actually own are shares issued by the corporation, and the corporation owns the assets
            held by a firm. So if you own 33% of the shares of a company, it is incorrect to assert that you own
            one-third of that company; it is instead correct to state that you own 100% of one-third of the company’s
            shares. Shareholders cannot do as they please with a corporation or its assets. A shareholder can’t walk out
            with a chair because the corporation owns that chair, not the shareholder. This is known as the “separation
            of ownership and control.”
        </p>
    </section>
    <section class="mx1">
        <h2>Understanding Stocks </h2>
        <p class="my05">
            Corporations issue (sell) stock to raise funds to operate their businesses. The holder of stock (a
            shareholder) buys a piece of the corporation and, depending on the type of shares held, may have a claim to
            part of its assets and earnings. In other words, a shareholder is now an owner of the issuing company.
            Ownership is determined by the number of shares a person owns relative to the number of outstanding shares.
            For example, if a company has 1,000 shares of stock outstanding and one person owns 100 shares, that person
            would own and have a claim to 10% of the company's assets and earnings.
        </p>
        <p class="my05">
            Stockholders do not own corporations; they own shares issued by corporations. But corporations are a special
            type of organization because the law treats them as legal persons. In other words, corporations file taxes,
            can borrow, can own property, can be sued, etc. The idea that a corporation is a “person” means that the
            corporation owns its own assets. A corporate office full of chairs and tables belongs to the corporation,
            and not to the shareholders.
        </p>
        <p class="my05">
            This distinction is important because corporate property is legally separated from the property of
            shareholders, which limits the liability of both the corporation and the shareholder. If the corporation
            goes bankrupt, a judge may order all of its assets sold—but your personal assets are not at risk. The court
            cannot even force you to sell your shares, although the value of your shares will have fallen drastically.
            Likewise, if a major shareholder goes bankrupt, they cannot sell the company’s assets to pay off their
            creditors.
        </p>
    </section>
</main>
<?php include_once './components/footer-scripts.inc.php'; ?>