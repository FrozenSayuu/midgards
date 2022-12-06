</div> <!-- closes <div class=container"> -->
<footer>
    <div class="site-footer">
        <div class="footer-midgard">
            <h5>Midgårds</h5>
            <span>Jugansbo 130</span>
            <span>733 91 Sala</span>
        </div>
        <div class="footer-halsocenter">
            <h5>Midgårds Hälsocenter, Vedicart</h5>
            <span>Ingrid Lindberg</span>
            <span>070-322 83 30</span>
            <span><a href="mailto:Midgardshalsocenter@gmail.com">Midgardshalsocenter@gmail.com</a></span>
            <div class="footer-social">
                <a href="https://www.facebook.com/reikipamidgard"><img src="/app/uploads/social-icons/facebook-icon.png" alt="facebook icon" width="36px" height="36px"></a>
                <a href="https://www.instagram.com/midgardshalsocenter/"><img src="/app/uploads/social-icons/instagram-icon.png" alt="instagram icon" width="36px" height="36px"></a>
            </div>
        </div>
        <div class="footer-byggteknik">
            <h5>Midgårds Byggteknik</h5>
            <span>Thomas Lindberg</span>
            <span>072-011 29 97</span>
            <span><a href="mailto:Midgardsbyggteknik@gmail.com">Midgardsbyggteknik@gmail.com</a></span>
            <div class="footer-social">
                <!-- <a href="#"><img src="/app/uploads/social-icons/facebook-icon.png" alt="facebook icon" width="36px" height="36px"></a>  -->
                <a href="https://www.instagram.com/midgards_byggteknik/"><img src="/app/uploads/social-icons/instagram-icon.png" alt="instagram icon" width="36px" height="36px"></a>
            </div>
        </div>
        <div class="footer-contact">
            <!-- <a href="#"><button><span>Kontakta oss</span></button></a> -->
            <button> <?php wp_nav_menu(['theme_location' => 'footer', 'container' => 'footer']); ?></button>
        </div>
    </div>
</footer>
<?php wp_footer() ?>
<script src="\app\themes\midgardstheme\js\hamburger-dropdown.js"></script>
</body>

</html>