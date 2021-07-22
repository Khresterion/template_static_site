<?php

function callFooter()
{

?>
    <!-- Wavy SVG applied to footer-bg -->
    <div class="footer-bg"></div>
    <footer>
        <div class="one">
            <ul>
                <a href="mentions-legales.php">
                    <li>Mentions légales</li>
                </a>
                <a href="remerciements.php">
                    <li>Remerciements</li>
                </a>
                <a href="sitemap.php">
                    <li>SiteMap</li>
                </a>

            </ul>
        </div>
        <div class="logo">
            <img src="assets/images/LGNCLogoWhite.png" alt="logo">
            <small>
                <p class="p-3">© Copyright 2020 - 2021 | LogOn Company | Tous droits réservés</p>
            </small>
        </div>
        <div class="button_about mt-3">
            <a href="https://www.linkedin.com/company/logon-company/" target="blank"><i class="fab fa-linkedin fa-3x"></i></a>
            <a href="https://discord.gg/Tqn9G2f5" target="blank"><i class="fab fa-github-square fa-3x"></i></a>
            <a href="https://www.instagram.com/logoncompany35/" target="blank"><i class="fab fa-instagram fa-3x"></i></a>
            <a href="https://www.facebook.com/logoncompany35/" target="blank"><i class="fab fa-facebook fa-3x"></i></a>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/EasePack.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.7.1/ScrollTrigger.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/dixonandmoe/rellax@master/rellax.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <!-- <script src="https://code.jquery.com/jquery-3.1.0.js"></script> -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script src="assets/js/script.js"></script>
    <script>
window.axeptioSettings = {
  clientId: "60f956f3146cc553c8e189a8",
  cookiesVersion: "logon-base",
};
 
(function(d, s) {
  var t = d.getElementsByTagName(s)[0], e = d.createElement(s);
  e.async = true; e.src = "//static.axept.io/sdk.js";
  t.parentNode.insertBefore(e, t);
})(document, "script");
void 0 === window._axcb && (window._axcb = []);
window._axcb.push(function(axeptio) {
  axeptio.on("cookies:complete", function(choices) {
    
  })
})
</script>


    </body>

    </html>

<?php } ?>