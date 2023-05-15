<?php
//Template Name: Home
?>

<?php get_header();?>

                <div class="clear"></div>
                <br />
                <br />
                <div class="w50 time-descricao">
                    <h2><?php the_field('chamada_topo') ?></h2>
                    <p>Consultoria especializada em startups, empresas, principalmente pessoas</p>
                    <a target="_blank" href="https://dankicode.com">Ver demostração</a>
                </div>
                <div class="w50 time-imagem">
                    <img src="<?php echo get_theme_root_uri(); ?>/DankiCode/home/ilustracao.png" alt="">
                </div>
                <div class="clear"></div>
            </header>
        </div>
    </section>

    <div class="circle"><i class="fas fa-angle-down"></i></div>
    <section class="conteudo_da_pagina">
        <?php the_content();?>
    </section>
    
    <section class="clientes-slider">
        <div class="center">
            <div class="slider-container">
                <img src="<?php echo get_theme_root_uri(); ?>/DankiCode/home/amazon.png" alt="">
                <img src="<?php echo get_theme_root_uri(); ?>/DankiCode/home/costco.png" alt="">
                <img src="<?php echo get_theme_root_uri(); ?>/DankiCode/home/dominos.png" alt="">
                <img src="<?php echo get_theme_root_uri(); ?>/DankiCode/home/uber.png" alt="">
                <img src="<?php echo get_theme_root_uri(); ?>/DankiCode/home/walmart.png" alt="">
            </div>
        </div>
    </section>

    <section class="diferenciais">
        <div class="center">
            <h2>Contribuimos de ponta a ponta</h2>
            <div class="icons-diferenciais">
                <div class="box-single-diferenciais">
                    <img src="<?php echo get_theme_root_uri(); ?>/DankiCode/home/ilustracao-01.png" alt="">
                    <h3>Ambiente Mobile</h3>
                    <p>Garanta que toda sua comunicação esteja alinhada com seu proposito, cada palavra conta.</p>
                </div>

                <div class="box-single-diferenciais">
                    <img src="<?php echo get_theme_root_uri(); ?>/DankiCode/home/ilustracao-02.png" alt="">
                    <h3>Site e Intranets</h3>
                    <p>Garanta que toda sua comunicação esteja alinhada com seu proposito, cada palavra conta.</p>
                </div>

                <div class="box-single-diferenciais">
                    <img src="<?php echo get_theme_root_uri(); ?>/DankiCode/home/ilustracao-03.png" alt="">
                    <h3>Comunicação one-to-one</h3>
                    <p>Garanta que toda sua comunicação esteja alinhada com seu proposito, cada palavra conta.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="sobre-time">
        <div class="center">
            <div class="w50 time-descricao-2">
                <h2>Um time experiente,<br/> comunicador e coeso.</h2>
                <p>A Product Runt acredita que marcas fortes são construidas a partir de transformações importantes e positivas na 
                    vida dos consumidores. Exatamente como uma conversa que ganha forma, a ideia vira formula.
                    <br /><br />
                    Comunicar bem, de forma coerente e clara não é algo facil e estamos aqui para ajudar vc e seu time. Você escolhe,
                    remoto ou presencial, para seu cliente ou seu publico interno, vc determina como vamos te ajudar.
                </p>
            </div>
            <div class="w50 img-time">
                <img src="<?php echo get_theme_root_uri(); ?>/DankiCode/home/ilustracao-04.png" alt="">
            </div>
            <div class="clear"></div>
        </div>
    </section>

    <section class="depoimentos">
        <div class="center">
        <h2>Depoimentos</h2>
            <div class="depoimentos-box">
                <div class="depoimentos-single">
                    <p>"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English."</p>
                    <p>Luis Thiago</p>
                    <img src="<?php echo get_theme_root_uri(); ?>/DankiCode/home/oval-2.png" alt="">
                </div>

                <div class="depoimentos-single">
                    <p>"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English."</p>
                    <p>Fabio</p>
                    <img src="<?php echo get_theme_root_uri(); ?>/DankiCode/home/oval-2.png" alt="">
                </div>

                <div class="depoimentos-single">
                    <p>"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English."</p>
                    <p>Willian</p>
                    <img src="<?php echo get_theme_root_uri(); ?>/DankiCode/home/oval-2.png" alt="">
                </div>
            </div>
        </div>
    </section>

    <section class="metodologia">
        <div class="center">
            <h2>Conheça nossa Metodologia</h2>
            <p>O que acha de fazermos o que mais gostamos de fazer <br/> Entre em contato por e-mail ou telefone.</p>
            <a href="/wordpress/contato">Entrar Contato</a>
        </div>
    </section>

<?php get_footer();?>