<div class="footer">
    <nav class="footer-nav col-8">
        <ul>
            <li>
                <p>01</p>
                <a href="/">Accueil</a>
            </li>
            <li>
                <p>02</p>
                <a href="{{ url('/a-propos') }}">A propos</a>
            </li>
            <li>
                <p>03</p>
                <a href="{{ url('/contact') }}">Contact</a>
            </li>
            <li>
                <p>04</p>
                <a href="/ateliers">Atelier</a>
            </li>
            <li>
                <p>05</p>
                <a href="/mobilier-accueil">Mobilier</a>
            </li>
        </ul>
    </nav>
    <div class="footer-info col-4">
        <div class="social">
            <p>Nous suivre</p>
            <a href="https://www.facebook.com/Gl%C3%BCck-Design-101383345315020/?ref=page_internal">Facebook</a>
            <br/>
            <a href="https://www.instagram.com/gluckdesign.be/">Instagram</a>
        </div>
        <div class="contact">
            <p>Contact</p>
            <address>
                <a href="mailto:gluckdesign.contact@gmail.com">
                    gluckdesign.contact@gmail.com
                </a>
                <br/>
                <a href="tel:+32479459416">
                    +32 479 45 94 16
                </a>
            </address>
        </div>
        <div class="adresse">
            <p>Adresse</p>
            <address>
                <a href="https://goo.gl/maps/uXqaj33p7eq69ZSw5">
                    28 Rue des Hannetons
                    <br/>
                    1170 Boitsfort
                    <br/>
                    Belgium
                </a>
            </address>
        </div>
    </div>
    <nav class="mentions col-12">
        <ul>
            <li>
                <p>&copy; Glück Design <script type="text/javascript">var year = new Date();document.write(year.getFullYear());</script> | Made by
                    <strong><a href="mailto:clemremypro@gmail.com">Clem Remy</a></strong>
                </p>
            </li>
            <li>
                <a href="{{ url('/politique-de-confidentialite') }}">Politique de confidentialité</a>
            </li>
            <li>
                <a href="{{ url('/conditions-generales') }}">Conditions générales</a>
            </li>
        </ul>
    </nav>
</div>