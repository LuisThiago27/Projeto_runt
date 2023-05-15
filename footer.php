<footer>
        <div class="center">
            <div class="col-footer">
                <h2>Suporte</h2>
                <a href="">Blog</a>
                <a href="">FAQs</a>
            </div>
            <div class="col-footer">
                <h2>Consultoria</h2>
                <a href="">Metodologia</a>
                <a href="">Casos</a>
            </div>
            <div class="col-footer">
                <h2>Empresa</h2>
                <a href="">Sobre</a>
                <a href="">Politica de Privacidade</a>
            </div>
            <div class="col-footer logo">
                <img src="<?php echo get_theme_root_uri(); ?>/DankiCode/home/logo-dummy.png" alt="">
            </div>
        </div>
    </footer>

    <?php wp_footer();?>
    
    <script src="<?php echo get_theme_root_uri(); ?>/DankiCode/js/jquery.js"></script>
    <script src="<?php echo get_theme_root_uri(); ?>/DankiCode/js/slick.min.js"></script>
    <script src="<?php echo get_theme_root_uri(); ?>/DankiCode/js/map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyA-beBRu18k6s1ySW7_CKU1rxVeofOzr1k"></script>
    <script src="https://kit.fontawesome.com/23e52faa1b.js" crossorigin="anonymous"></script>
    <script type="text/javascript">
        $('.slider-container').slick({
            dots: true,
            arrows: false,
            infinite: false,
            speed: 1000,
            slidesToShow: 4,
            autoplay: true,
            centerMode: false,
            autoplaySpeed: 3000,
            pauseOnHover: false,
            responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3
                }
            }
            ]
        });

        $('.depoimentos-box').slick({
            dots: true,
            arrows: false,
            infinite: true,
            speed: 1000,
            slidesToShow: 1,
            centerMode: false,
            autoplaySpeed: 3000,
            pauseOnHover: false,
           
        });
    </script>
    <script>
        //Menu responsivo
        $('.menu-mobile i').click(function() {
            $('.menu-mobile').find('ul').slideToggle();
        })
    </script>
</body>
</html>