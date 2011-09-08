<!DOCTYPE html>
<html lang="pt-br">
<head>
<meta charset="utf-8">
<title>
	<?php bloginfo('name');
	if ( is_single() ) {
		_e('');
	}
	wp_title(); ?>
</title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php printf(__('%s RSS Feed'), get_bloginfo('name')); ?>" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php printf(__('%s Atom Feed'), get_bloginfo('name')); ?>" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="shortcut icon" href="<?php bloginfo('template_url') ?>/favicon.png" type="image/png" />
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
<?php if(is_home()) : ?>
    <script src="popcorn.min.js"></script>
    <script src="wmm/plugins/pause/popcorn.pause.js"></script>
    <script src="wmm/plugins/simpletimeline/popcorn.simpletimeline.js"></script>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
      var p = Popcorn( "#video-pesquisa" , { pauseOnLinkClicked : true } )
      .play()
      .simpletimeline({
        start: 0,
        end: 8,
        target: "timeline",
        innerHTML: "Nesse espa&ccedil;o ser&atilde;o apresentadas informa&ccedil;&otilde;es relativas ao conte&uacute;do que estiver tocando no exato momento no v&iacute;deo.<br><br><br>" ,
        direction: "up"
      } )
      .simpletimeline({
        start: 8,
        end: 19,
        target: "timeline",
        innerHTML: "Se voc&ecirc; clicar em qualquer link dessa p&aacute;gina, o v&iacute;deo ser&aacute; pausado. Ent&atilde;o fique &agrave; vontade para se aprofundar nos conte&uacute;dos apresentados.<br><br><br>" ,
        direction: "up"
      } )
      .simpletimeline({
        start: 19,
        end: 39,
        target: "timeline",
        innerHTML: "O coletivo <a href='http://mediasana.org' target='_blank'>Media Sana</a> faz colagens audiovisuais utilizando samples de televis&atilde;o, materiais pr&oacute;prios e conte&uacute;dos livres.<br><br><br>" ,
        direction: "up"
      } )
      .simpletimeline({
        start: 50,
        end: 58,
        target: "timeline",
        innerHTML: "<a href='http://direitorio.fgv.br/cts/' target='_blank'>CTS/FGV</a> = Centro de Tecnologia e Sociedade da Funda&ccedil;&atilde;o Get&uacute;lio Vargas.<br><br><br>" ,
        direction: "up"
      } )
      .simpletimeline({
        start: 58,
        end: 69,
        target: "timeline",
        innerHTML: "Trecho de 'A Cultura &eacute; Livre' do Media Sana. <a href='http://mediasana.org' target='_blank'>Veja</a> outros v&iacute;deos do coletivo.<br><br><br>" ,
        direction: "up"
      } )
      .simpletimeline({
        start: 87,
        end: 97,
        target: "timeline",
        innerHTML: "O software aqui &eacute; o <a href='http://kdenlive.org' target='_blank'>Kdenlive</a>, o v&iacute;deo &eacute; de Nemesis 78.<br><br><br>" ,
        direction: "up"
      } )
      .simpletimeline({
        start: 105,
        end: 120,
        target: "timeline",
        innerHTML: "A <a href='http://xiph.org' target='_blank'>Xiph Foundadion</a> &eacute; respons&aacute;vel pelos codecs Ogg: Theora (v&iacute;deo) e Vorbis (&aacute;udio).<br><br><br>" ,
        direction: "up"
      } )
      .simpletimeline({
        start: 123,
        end: 134,
        target: "timeline",
        innerHTML: "O <a href='http://debian.org' target='_blank'>Debian</a>, que completou 18 anos em 2011, &eacute; uma das distribui&ccedil;&otilde;es GNU/Linux ainda em desenvolvimento mais antigas.<br><br><br>" ,
        direction: "up"
      } )
      .simpletimeline({
        start: 134,
        end: 143,
        target: "timeline",
        innerHTML: "Trecho do 'Clip com imagens do encontro em Teresina', dispon&iacute;vel no <a href='http://estudiolivre.org' target='_blank'>Est&uacute;dio Livre</a><br><br><br>" ,
        direction: "up"
      } ) 
      .simpletimeline({
        start: 166,
        end: 177,
        target: "timeline",
        innerHTML: "<a href='http://rnp.br' target='_blank'>RNP</a> = Rede Nacional de Ensino e Pesquisa.<br><br><br>" ,
        direction: "up"
      } )
      .simpletimeline({
        start: 195,
        end: 206,
        target: "timeline",
        innerHTML: "<a href='http://cultura.gov.br'>MinC</a> = Minist&eacute;rio da Cultura<br><br><br>" ,
        direction: "up"
      } )
      .simpletimeline({
        start: 208,
        end: 217,
        target: "timeline",
        innerHTML: "Trecho do v&iacute;deo 'Flash Mob N&atilde;o Azeredo 2'.<br><br><br>" ,
        direction: "up"
      } )
      .simpletimeline({
        start: 251,
        end: 255,
        target: "timeline",
        innerHTML: "<a href='http://www.cultura.gov.br/site/categoria/politicas/audiovisual/' target='_blank'>SAV</a> = Secretaria do Audiovisual<br><br><br>" ,
        direction: "up"
      } )
      .simpletimeline({
        start: 260,
        end: 300,
        target: "timeline",
        innerHTML: "<a href='http://pesquisa.videolivre.org.br/capitulo/conclusao/' target='_blank'>Veja</a> aqui conclus&otilde;es da Pesquisa sobre V&iacute;deo Livre no Brasil.<br><br><br>" ,
        direction: "up"
      } )
      .simpletimeline({
        start: 306,
        end: 330,
        target: "timeline",
        innerHTML: "Esta interface din&acirc;mica foi desenvolvida com base na biblioteca <a href='http://popcornjs.org' target='_blank'>PopcornJS<a>, utilizando o plugin SimpleTimeline, criado para esse projeto.<br><br><br>" ,
        direction: "up"
      } )
      .simpletimeline({
        start: 330,
        end: 332,
        target: "timeline",
        innerHTML: "<a href='http://memelab.com.br' target='_blank'>memeLab</a> <br> <a href='http://icommons.org' target='_blank'>iCommons</a> <br> <a href='http://fordfoundation.org' target='_blank'>Ford Foundation</a>.<br><br><br>" ,
        direction: "up"
      } )
      .simpletimeline({
        start: 332,
        end: 340,
        target: "timeline",
        innerHTML: "Visite o site do <a href='http://memelab.com.br' target='_blank'>memeLab</a>.<br><br><br>" ,
        direction: "up"
      } ) 
    }, false); 

    </script>
<script type="text/javascript">
$(document).ready(
	function() {
		$('a.baixar span.dl').css({'opacity' : 0 });
		$('a.baixar').hover(
			function() {
				$(this).find('span.dl').animate({
					opacity: 1,
					top: '45px'
				}, 400);
			},
			function() {
				$(this).find('span.dl').animate({
					opacity: 0,
					top: '30px'
				}, 400);
			}
		);
	}
);
</script>
<?php endif; ?>
<script type="text/javascript">
$(document).ready(
	function() {
		$('nav ul').css({ 'display' : 'none' });
		$('nav').addClass('inativo');
		$('a.abreSum').toggle(
			function() {
				$('nav ul').toggle();
				$('nav').removeClass('inativo');
				return false;
			},
			function() {
				$('nav ul').toggle();
				$('nav').addClass('inativo');
				return false;
			}
		);
	}
);
</script>
<?php wp_head(); ?>
</head>
<body <?php if(!is_home()) : ?>class="in"<?php endif; ?>>
<div class="wrapper <?php if(!is_home()) : ?>in<?php endif; ?>">
	<div class="light"></div>
	<?php if(is_home()) : ?>
		<div class="marca"></div>
		<header>
			<h1><?php bloginfo('name'); ?></h1>
			<p><?php bloginfo('description'); ?></p>
		</header>
	<?php else : ?>
		<div class="marca_in_esq"></div>
		<div class="marca_in_dir"></div>
		<header class="in">
			<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
			<h2><?php the_title(); ?></h2>
			<nav>
				<a href="#" class="abreSum">Sumário</a>
				<ul>
					<?php query_posts('post_type=capitulo&orderby=menu_order&order=ASC'); ?>
					<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
						<li>
							<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
						</li>
					<?php endwhile; endif; ?>
					<?php wp_reset_query(); ?>
						<li>
							<a href="<?php bloginfo('url'); ?>/comentarios" title="<?php the_title(); ?>">Comentários</a>
						</li>
				</ul>
			</nav>
		</header>
	<?php endif; ?>
