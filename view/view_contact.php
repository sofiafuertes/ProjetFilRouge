<link rel="stylesheet" href="./style/style_contact.css">
<script type="module" src="./javascript/forms.js"></script>
<main>
        <div id="formContact">
            <section id="thankYouPhoto">
                <img src="./photos/thank_you_contact.png" alt="Thank you message">
            </section>
            <section>

                <form>
                    <div>
                        <p>For questions related to ceramics bought online, personalize ceramics pieces or any comments,
                            please fill out this form:</p>
                        <div class="pinkLine"></div>
                    </div>
                    <input type="text" id="name" placeholder="Name *" autofocus required>
                    <input type="mail" id="mail" pattern="^[a-z0-9._-]+@[a-z0-9._-]+\.[a-z]{2,6}$" minlength="8" maxlength="30"
                        placeholder="Mail *" required>
                    <select name="sujets" id="subjets">
                        <option value="personalize">I want a personalize ceramic piece</option>
                        <option value="reviews">I love your work and i want you to know it!</option>
                        <option value="problem">I had a problem with an order</option>
                        <option value="question">Other question</option>
                    </select>
                    <textarea name="message" id="message" cols="40" rows="10" maxlength="600" placeholder="Your message *"
                        required></textarea>
                    <label>*Required</label>
                    <div id="divButton">
                        <input class="button" type="submit" value="SEND">
                    </div>
                </form>
            </section>
        </div>
        <section>
            <div id="networkingZone">
                <div>
                    <p>
                        You can also contact me by mail or follow me on my social media:
                    </p>
                    <div class="pinkLine"></div>
                </div>
                <div id="contactSocialMedia">
                    <a href="#">cecicoceramics@gmail.com</a>
                    <div class="networkingOptions"><a href="https://www.instagram.com/cecico.ceramics/?hl=fr"><img
                                src="./icons/icon_insta.png" alt="Logo instagram"> /cecico.ceramics</a></div>
                    <div class="networkingOptions"><a
                            href="https://www.facebook.com/people/Ceci-Co/100063812362345/"><img
                                src="./icons/icon_facebook.png" alt="Logo facebook"> Ceci Co</a></div>
                </div>
            </div>
        </section>

    </main>

