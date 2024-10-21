<link rel="stylesheet" href="./style/style_account.css">
<main>
    <article>
        <section>
            <h1>MY ACCOUNT</h1>
            <h2>Welcome again!</h2>
        </section>
        <section id="personalInfo">
            <h3>Personal information</h3>
            <ul>
                <li>First name: <?php echo $account->getFirstName()?> </li>
                <li>Last name: <?php echo $account->getLastName() ?></li>
                <li>Mail: <?php echo  $account->getMail() ?> </li>

            </ul>
            <a href="#">Edit information</a>
        </section>
        <section id="whishlist">
            <h3>Wishlist</h3>
            <div id="whishlistPhoto">
                <img src="./photos/photoHome_Flowers.jpeg" alt="Item 1">
                <img src="./photos/photoHome_Flowers.jpeg" alt="Item 2">
                <img src="./photos/photoHome_Flowers.jpeg" alt="Item 3">
                <img src="./photos/photoHome_Flowers.jpeg" alt="Item 4">
            </div>
        </section>
    </article>
    <button id="logout">LOGOUT</button>
</main>