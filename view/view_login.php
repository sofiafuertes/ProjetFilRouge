<link rel="stylesheet" href="./style/style_login.css">

<main>
    <article>
        <!-- LOGIN FORM -->
        <section>
            <div id="loginForm">
                <div id="titleLogin">
                    <h2>LOGIN</h2>
                    <div class="pinkLine"></div>
                </div>
                <p>Please enter your mail and password:</p>
                <form action="" method="POST">
                    <input type="mail" name="mailCo" class="mail" pattern="^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$" minlength="8"
                        maxlength="30" placeholder="Mail" autofocus required>
                    <input type="password" name="passwordCo" class="password" placeholder="Password" required>
                    <div class="forgotpsw">
                        <a href="#">forgot password?</a>
                    </div>
                    <p><?php echo $connexion->getMessageCo() ?></p>
                    <div class="divButton">
                    
                        <input class="button" type="submit" name="connexionSubmit" value="LOGIN">
                    </div>
                </form>
            </div>
        </section>

        <!-- REGISTER FORM -->
        <section>
            <div id="registerForm">
                <div id="titleRegister">
                    <h2>REGISTER</h2>
                    <div class="pinkLine"></div>
                </div>
                <p>Please fill in the information below:</p>
                <form action="" method="POST">
                    <input type="text" name="firstName" id="firstName" placeholder="First name" required>
                    <input type="text" name="lastName" id="lastName" placeholder="Last name" required>
                    <input type="mail" name="mail" class="mail" pattern="^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$"
                        minlength="8" maxlength="30" placeholder="Mail" autofocus required>
                    <input type="password" name="passwordIns" class="password" placeholder="Password" required>
                    <input type="password" name="passwordConfirm" id="confirmPassword" placeholder="Confirm password"
                        required>
                    <p><?php echo $inscription->getMessageIns() ?></p>
                    <div class="divButton">
                        <input class="button" type="submit" name="registerSubmit" value="Create my account">
                    </div>
                </form>
            </div>
        </section>
    </article>
</main>