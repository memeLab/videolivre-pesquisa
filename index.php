<?php get_header(); ?>
	<script type="text/javascript">
		jQuery(document).ready(
			function() {
				var video_ptbr = '<video width="480" height="360" controls><source src="http://pesquisa.videolivre.org.br/videolivre-pesquisa.ogg"  type="video/ogg" /></video>';
				var video_en = '<video width="480" height="360" controls><source src="http://pesquisa.videolivre.org.br/videolivre-pesquisa-en.ogg"  type="video/ogg" /><source src="http://pesquisa.videolivre.org.br/videolivre-pesquisa-en.mp4" type="video/mp4" /></video>';
				var video_label_ptbr = 'Melhor visualizado no <a href="http://www.mozilla.com/firefox/" target="_blank">Firefox 3.6</a>';
				var video_label_en = 'Best viewed in <a href="http://www.mozilla.com/firefox/" target="_blank">Firefox 3.6</a>';
				jQuery('ul.videolang li.pt-br').addClass('selected');
				jQuery('ul.videolang li.pt-br').click(
					function ptbr() {
						jQuery('div.video').empty().delay(2000).append(video_ptbr);
						jQuery(this).addClass('selected');
						jQuery('ul.videolang li.en').removeClass('selected');
						jQuery('section#video p').empty().append(video_label_ptbr);
						setTimeOut(ptbr, 800);
					}
				);
				jQuery('ul.videolang li.en').click(
					function en() {
						jQuery('div.video').empty().delay(2000).append(video_en);
						jQuery(this).addClass('selected');
						jQuery('ul.videolang li.pt-br').removeClass('selected');
						jQuery('section#video p').empty().append(video_label_en);
						setTimeOut(en, 800);
					}
				);
			}
		);
	</script>
	<div id="conteudo">
		<section id="video">
			<div class="video">
				<video id="video-pesquisa" width="480" height="360" controls><source src="http://pesquisa.videolivre.org.br/videolivre-pesquisa.ogg"  type="video/ogg" /></video>
			</div>
			<p>Melhor visualizado no <a href="http://www.mozilla.com/firefox/" target="_blank">Firefox 3.6</a></p>
			<ul class="videolang">
				<li class="pt-br">Português (Brasil)</li>
				<li class="en">English</li>
			</ul>
		</section>
		<section id="meta">
			<a class="acessar" href="http://pesquisa.videolivre.org.br/capitulo/preambulo/"><img src="<?php bloginfo('template_directory'); ?>/img/acessa.png" /></a>
			<a class="baixar" href="http://pesquisa.videolivre.org.br/wp-content/uploads/2011/01/pesquisa.pdf"><span class="dl"></span><img src="<?php bloginfo('template_directory'); ?>/img/baixa.jpg" /></a>
			<div id="timeline"></div>
		</section>
	</div>
<?php get_footer(); ?>
