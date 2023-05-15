<?php 
    //Template Name: Contato

    get_header();
?>
</div>
    </section>
    <?php the_content(); ?>
    <section class="contato">
        <div class="center">
            <div class="w50 contato-info">
                <h2>A mais importante, <br/> primeira conversa.</h2>
                <br/>
                <?php 
                if(have_rows('nome_tipo_contato')){
                    the_row();

                    for($i = 1; $i <= 4; $i++){
                    
                    
                ?>
                <p><b><?php echo get_sub_field('categoria_'.$i); ?> :</b> <?php echo get_sub_field('valor_'.$i); ?></p>

                <?php }} ?>
                
            
                <div class="mapa-container">
                    <div id="mapa"></div>
                </div>
            </div>

            <div class="w50 contato-form">
                <form >
                    <input placeholder="Nome" type="text">
                    <input placeholder="E-mail" type="text">
                    <input placeholder="Telefone" type="text">
                    <select>
                        <option value="">--</option>
                        <option value="">Geral</option>
                        <option value="">Suporte</option>
                    </select>
                    <textarea placeholder="Mensagem"></textarea>
                    <input type="submit" value="ENVIAR FORMULÁRIO">
                </form>
            </div>
            <div class="clear"></div>
        </div>
    </section>

<?php 
    get_footer();
?>