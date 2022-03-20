<?php

session_start();
$activelink1 = true;
$logoutbtn = './logout.inc.php';
$menu0 = '../index.php';
$menu1 = './stocks.inc.php';
include_once '../includes/components/navbar.inc.php';


?>
<main>
    <div class="container">
        A stock (also known as equity) is a security that represents the ownership of a fraction of a corporation. This
        entitles the owner of the stock to a proportion of the corporation's assets and profits equal to how much stock
        they own. Units of stock are called "shares."

        Stocks are bought and sold predominantly on stock exchanges (though there can be private sales as well) and are
        the foundation of many individual investors' portfolios. These transactions have to conform to government
        regulations that are meant to protect investors from fraudulent practices. Historically, they have outperformed
        most other investments over the long run. These investments can be purchased from most online stockbrokers.
        Corporations issue (sell) stock to raise funds to operate their businesses. The holder of stock (a shareholder)
        buys a piece of the corporation and, depending on the type of shares held, may have a claim to part of its
        assets and earnings. In other words, a shareholder is now an owner of the issuing company. Ownership is
        determined by the number of shares a person owns relative to the number of outstanding shares. For example, if a
        company has 1,000 shares of stock outstanding and one person owns 100 shares, that person would own and have a
        claim to 10% of the company's assets and earnings.2

        Stockholders do not own corporations; they own shares issued by corporations. But corporations are a special
        type of organization because the law treats them as legal persons. In other words, corporations file taxes, can
        borrow, can own property, can be sued, etc. The idea that a corporation is a “person” means that the corporation
        owns its own assets. A corporate office full of chairs and tables belongs to the corporation, and not to the
        shareholders.3

        This distinction is important because corporate property is legally separated from the property of shareholders,
        which limits the liability of both the corporation and the shareholder. If the corporation goes bankrupt, a
        judge may order all of its assets sold—but your personal assets are not at risk. The court cannot even force you
        to sell your shares, although the value of your shares will have fallen drastically. Likewise, if a major
        shareholder goes bankrupt, they cannot sell the company’s assets to pay off their creditors.4
    </div>
</main>


<?php include_once '../includes/components/footer-scripts.inc.php'; ?>