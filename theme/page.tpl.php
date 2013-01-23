	<div class="rs-main">

		<header class="rs-main">
			<h1>R<span class="blue">einhard</span> S<span class="blue">chmidt</span></h1>
			<h2>Ingenieurdienstleistungen <br /> Qualitätsmanagement</h2>
		</header>
		
		<?php if ($main_menu): ?>
			<nav class="rs-top">
					<div class="rs-language"> <?php print render($page['language']); ?> </div>
					<?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('links', 'inline', 'clearfix')), 'heading' => t('Main menu'))); ?>
			</nav>
		<?php endif; ?>
		
		<div class="rs-content">

			<?php if ($page['sidebar_first']): ?>
				<aside class="rs">
				<?php print render($page['sidebar_first']); ?>
				</aside>
			<?php endif; ?>
			<?php if ($page['content']): ?>
				<article class="rs">
					<?php print render($page['content']); ?>
				</article>
			<?php endif; ?>
		</div>
		<div class="rs-footer">
		
			<?php if ($secondary_menu): ?>
				<nav class="rs-bottom">
					<?php print theme('links__system_secondary_menu', array('links' => $secondary_menu, 'attributes' => array('id' => 'secondary-menu', 'class' => array('links', 'inline', 'clearfix')), 'heading' => t('Secondary menu'))); ?>
				</nav>
			<?php endif; ?>
			
			<?php if ($page['footer']): ?>
				<footer class="rs">
					<?php print render($page['footer']); ?>
				</footer>
			<?php endif; ?>
			
		</div>
	</div>