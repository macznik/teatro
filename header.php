<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Teatro Cubano</title>
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"> 


<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>



<style>
    body {
        color:<?php the_field('font_color','options');?> !important;
    }
    div.main {
        background: url('<?php the_field('background_image', 'options');?>');
        background-size: 100% auto;
        background-repeat: repeat-y;
        margin-top:0px;
    }
</style>

<link href="<?php echo get_template_directory_uri(); ?>/style.css" rel="stylesheet">
<nav class="navbar navbar-default">
    <!-- <div class="container"> -->
    <div class="my-menu-top">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Menu</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'>
                <img class="main-logo" src="http://tcubano.lavidadanza.pl/wp-content/uploads/2018/09/logo.png" />
            </a>
            
        </div>
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <?php 

            function setInnerHTML($element, $html)
            {
                $fragment = $element->ownerDocument->createDocumentFragment();
                $fragment->appendXML($html);
                while ($element->hasChildNodes())
                    $element->removeChild($element->firstChild);
                $element->appendChild($fragment);
            }


            $navMenu = wp_nav_menu(array(
            'theme_location' => 'primary',
            'menu_class' => 'nav navbar-nav navbar-right',
            'walker' => new intermedia_walker_nav_menu,
            'fallback_cb' => false,
            'depth' => 2,
            'echo' => 0
            ));  

            $dom = new DOMDocument;
            $dom->loadHTML($navMenu);
            $urls = $dom->getElementsByTagName('a');

            foreach ($urls as $url) {
                    if($url->nodeValue == 'Prywatne REZERWACJE' ){ 
                        setInnerHTML($url, '<span class="red small">Prywatne </span><span class="blue">REZERWACJE</span>'); 
                    } elseif($url->nodeValue == 'IMPREZY firmowe' ){ 
                        setInnerHTML($url, '<span class="blue">IMPREZY </span><span class="red small">firmowe</span>');  
                    } elseif($url->nodeValue == 'COMPANY Parties' ){ 
                        setInnerHTML($url, '<span class="red">COMPANY </span><span class="blue small">Parties</span>');  
                    } elseif($url->nodeValue == 'PRIVATE Reservations' ){ 
                        setInnerHTML($url, '<span class="blue">PRIVATE </span><span class="red small">Reservations</span>');  
                    }
            }
            $navMenu = $dom->saveHTML();

            echo $navMenu;


            ?>
            <div class="col-md-12 show_top">
                <?php if(get_locale() == 'en_GB') { ?>
                    <div class="menu-bottom-left">
                        <ul class="navbar-bottom-left">
                            <?php if(have_rows('menu_bottom_left_gb','options')):while(have_rows('menu_bottom_left_gb','options')):the_row();?>
                                <li id="menu-bottom-li-left"><a href="<?php the_sub_field('link_gb','options');?>"><?php the_sub_field('title_link_gb','options');?></a></li>
                            <?php endwhile; endif; ?>
                        </ul>
                    </div>
                    <div class="menu-bottom-right">
                        <ul class="navbar-bottom-right">
                            <?php if(have_rows('menu_bottom_right_gb','options')):while(have_rows('menu_bottom_right_gb','options')):the_row();?>
                                <li id="menu-bottom-li-right"><a href="<?php the_sub_field('link_gb','options');?>"><?php the_sub_field('title_link_gb','options');?></a></li>
                            <?php endwhile; endif; ?>
                        </ul>
                    </div>
                <?php } elseif(get_locale() == 'pl_PL') { ?>
                    <div class="menu-bottom-left">
                        <ul class="navbar-bottom-left">
                            <?php if(have_rows('menu_bottom_left_pl','options')):while(have_rows('menu_bottom_left_pl','options')):the_row();?>
                                <li id="menu-bottom-li-left"><a href="<?php the_sub_field('link_pl','options');?>"><?php the_sub_field('title_link_pl','options');?></a></li>
                            <?php endwhile; endif; ?>
                        </ul>
                    </div>
                    <div class="menu-bottom-right">
                        <ul class="navbar-bottom-right">
                            <?php if(have_rows('menu_bottom_right_pl','options')):while(have_rows('menu_bottom_right_pl','options')):the_row();?>
                                <li id="menu-bottom-li-right"><a href="<?php the_sub_field('link','options');?>"><?php the_sub_field('title_link_pl','options');?></a></li>
                            <?php endwhile; endif; ?>
                        </ul>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</nav>

<?php 
    if(get_locale() == 'en_GB') { ?>
        <div class="languageSoft"><a href="http://tcubano.lavidadanza.pl/" >PL</a></div>
<?php 
    } else { ?>
        <div class="languageSoft"><a href="http://tcubano.lavidadanza.pl/en/" >EN</a></div>
<?php
    } ?>
    


<script type="text/javascript">
(function($) {          
    $(document).ready(function(){                    
        $(window).scroll(function(){                          
            if ($(this).scrollTop() > 200) {
                $('.navbar.navbar-default').fadeIn(500);
            } else {
                $('.navbar.navbar-default').fadeOut(500);
            }
        });
    });
})(jQuery);
</script>
