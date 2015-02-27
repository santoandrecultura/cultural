<?php
/**
 * Custom functions that act independently of the theme templates
 *
 * Eventually, some of the functionality here could be replaced by core features
 *
 * @package cultural
 */

/**
 * Shortcode to display an event
 *
 */
function cultural_shortcode_event( $atts ) {
    ob_start();

    extract( shortcode_atts( array (
        'type' => 'post',
        'order' => 'date',
        'orderby' => 'title',
        'posts' => -1,
        'color' => '',
        'fabric' => '',
        'category' => '',
    ), $atts ) );

    ?>

    <div class="event-container">
        <figure class="event__image">
            <img src="http://spcultura.prefeitura.sp.gov.br//files/event/13336/file/13654/irene_tanabe_2-1ce17e06cfa675e53a04217c87df3226.jpg" alt="Histórias Contadas com Origamis" />
        </figure>
        <div class="event-data">
            <h1 class="event__title">Histórias Contadas com Origamis <span class="event__subtitle">Com Irene Tanabe</span></h1>
            <div class="event__occurrences">
                <div class="event__venue">Biblioteca Pública Marcos Rey</div>
                <div class="event__time">13 de Outubro de 2014 às 14:00</div>
                <a href="#" class="js-more-occurrences"><i class="fa fa-plus-circle"></i></a>
            </div>
            <span class="event__classification">Livre</span>
            <div class="event__price">
                <span class="fa-stack">
                    <i class="fa fa-circle fa-stack-2x"></i>
                    <i class="fa fa-usd fa-stack-1x fa-inverse"></i>
                </span>
                Grátis
            </div>
            <a href="#" class="event__info">Mais informações</a>
        </div>
    </div>

    <?php $myvariable = ob_get_clean();
        return $myvariable;

}
add_shortcode( 'event', 'cultural_shortcode_event' );
