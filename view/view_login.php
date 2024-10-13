<link rel="stylesheet" href="./style/style_login.css">

<main>
        <article>
            <section>
                <div id="loginForm">
                    <div id="titleLogin">
                        <h2>LOGIN</h2>
                        <div class="pinkLine"></div>
                    </div>
                    <p>Please enter your mail and password:</p>
                    <form>
                        <input type="mail" id="mail" pattern="^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$" minlength="8"
                            maxlength="30" placeholder="Mail" autofocus required>
                        <input type="text" id="password" placeholder="Password" required>
                        <div class="forgotpsw">
                            <a href="#">forgot password?</a>
                        </div>
                        <div class="divButton">
                            <input class="button" type="submit" value="LOGIN">
                        </div>
                    </form>
                </div>
            </section>
            <section>
                <div id="registerForm">
                    <div id="titleRegister">
                        <h2>REGISTER</h2>
                        <div class="pinkLine"></div>
                    </div>
                    <p>Please fill in the information below:</p>
                    <form>
                        <input type="text" id="firtsName" placeholder="First name" required>
                        <input type="text" id="lastName" placeholder="Last name" required>
                        <input type="mail" id="mail" pattern="^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$" minlength="8"
                            maxlength="30" placeholder="Mail" autofocus required>
                        <input type="text" id="password" placeholder="Password" required>
                        <input type="text" id="confirmPassword" placeholder="Confirm password" required>
                        <div class="divButton">
                            <input class="button" type="submit" value="Create my account">
                        </div>
                    </form>
                </div>
            </section>
        </article>
    </main>