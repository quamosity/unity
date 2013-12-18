
<div id="parent">

 	<div id="header">
    			
					
      <a href="http://www.stonybrook.edu" title="Stonybrook University" rel="home" id="logo"><img src="/sites/all/themes/minsbu/css/images/sbu_logo.png" alt="Stony Brook University Logo" /></a>
     <?php if ($logo): ?><a href="<?php print $front_page; ?>"><img title="<?php print t('Home'); ?>" src="<?php print $logo; ?>" /></a><?php endif; ?> 
    
	</div><!--#header-->
	

	
	<?php if ($main_menu): ?>
	
      <div id="main-menu" class="navigation">
        <?php print theme('links__system_main_menu', array(
          'links' => $main_menu,
          'attributes' => array(
            'id' => 'main-menu-links',
            'class' => array('links', 'clearfix'),
          ),
          'heading' => array(
            'text' => t('Main menu'),
            'level' => 'h2',
            'class' => array('element-invisible'),
          ),
        )); ?>
      </div> <!-- /#main-menu -->
	
    <?php endif; ?>
	

		<?php if ($page['main_prefix']): ?>
				<div id="main-prefix"><?php print render($page['main_prefix']); ?></div>
			<?php endif; ?>
			
		<?php if ($page['content']): ?>	
			<div id="content-wrap">
	
				  <a id="main-content"></a>
				  <?php print render($title_prefix); ?>
				  <?php if ($title): ?>
					<h1 class="title" id="page-title">
					  <?php print $title; ?>
					</h1>
				  <?php endif; ?>
				  <?php print render($title_suffix); ?>
				  <?php if ($tabs && !$is_front): ?>
					<div class="tabs">
					  <?php print render($tabs); ?>
					</div>
				  <?php endif; ?>
               
                  
                  <div id="content">
				  <?php print render($page['content']); ?>
                  </div><!--#solar-content'-->
				 
			</div>
		<?php endif; ?>
	
		<?php if ($page['main_postfix']): ?>
				<div id="main-postfix"><?php print render($page['main_postfix']); ?></div>
			<?php endif; ?>
	

	
	
	
	
		<div id="footer">
		

	</div>
</div>