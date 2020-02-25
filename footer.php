</main>

<!--Component newsletter-->
<?php
    echo '<div class="px-3 newsletter-box" id="newsletter">';
    get_template_part('partials/newsletter');
    echo '</div>';
?>

<!--Maps-->
<iframe class="maps" frameborder="0"  allowfullscreen=""
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3969.439594142947!2d-35.205379084602214!3d-5.79341465877853!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7b30011dd485915%3A0xfff09a22f0510323!2sAv.%20Prudente%20de%20Morais%2C%201195%20-%20Tirol%2C%20Natal%20-%20RN%2C%2059020-145!5e0!3m2!1spt-BR!2sbr!4v1579032959353!5m2!1spt-BR!2sbr">
</iframe>

<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h4>Gostou do nosso trabalho?</h4>
                <h2>Solicite seu orçamento.</h2>
                <a href="<?php bloginfo('template'); ?>/contato" class="btn btn-primary">Clique aqui</a>
            </div>

            <div class="col-md-4">
                <ul class="footer-adress pr-md-5 pr-0">
                    <li>
                        <i class="fas fa-map-marker"></i>
                        <p>Endereço, Natal/RN - CEP: 59000-000</p>
                    </li>
                    <li>
                        <i class="fas fa-envelope"></i>
                        <p>contato@contato.com.br</p>
                    </li>
                    <li>
                        <a href="<?php echo get_theme_mod('facebook_username') ?>" target="_blank" class="nav-icon">
                            <i class="fab fa-facebook-square"></i>
                        </a>
                        <a href="<?php echo get_theme_mod('instagram_username') ?>" target="_blank" class="nav-icon">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="<?php echo get_theme_mod('linkedin_username') ?>" target="_blank" class="nav-icon">
                            <i class="fab fa-linkedin"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul>
                    <li>
                        <h6>Comercial:</h6>
                        <p><?php echo get_theme_mod('phone_number') ?></p>
                        <p><?php echo get_theme_mod('whatsapp_number') ?></p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>

<section class="brand-footer">
    <div class="container">
        <div class="d-flex justify-content-end">
            <span class="m-auto">
                Desenvolvido por <a href="" target="_blank">Allan Cruz</a>
            </span>
        </div>
    </div>
</section>

<?php wp_footer(); ?>
</body>
</html>