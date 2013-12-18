
<div id="page">

 	<div id="header">
    			
					
      <a href="http://www.stonybrook.edu" title="Stonybrook University" rel="home" id="logo"><img src="/sites/all/themes/minsbu/css/images/sbu_logo.png" alt="Stony Brook University Logo" /></a>
     <?php if ($logo): ?><a href="<?php print $front_page; ?>"><img title="<?php print t('Home'); ?>" src="<?php print $logo; ?>" /></a><?php endif; ?> 
    
	</div><!--#header-->
	

	
	<?php if ($main_menu): ?>
	
      <div id="main-menu" class="navigation">
      <ul id="main-menu-links" class="links clearfix"><li class="menu-876 first active"><a href="/" title="Home" class="active">Home</a></li>
<li class="menu-527"><a href="/services/all" title="">Services</a></li>
<li class="menu-2225"><a href="/projects" title="">Projects</a></li>
<li class="menu-560 last"><a href="/help" title="">Help</a></li>
</ul>
      </div> <!-- /#main-menu -->
	
    <?php endif; ?>
	
	
		<?php if ($page['main_prefix']): ?>
				<div id="main-prefix"><?php print render($page['main_prefix']); ?></div>
			<?php endif; ?>
		
		<?php if ($page['content']): ?>	
		<div id="main-wrap">
		dfs
		
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
				  </div>
		</div>
				 
		 <?php endif; ?>
		 
		 	<?php if ($page['main_postfix']): ?>
				<div id="main-postfix"><?php print render($page['main_postfix']); ?></div>
			<?php endif; ?>
	
	
	<div id="footer">
	<div id="left-menu-footer" class="sub-footer first odd">
		
		<?php if ($page['left_menu_footer']): ?>	

				  <?php print render($page['left_menu_footer']); ?>

				 
		 <?php endif; ?>

	</div>
	
	<div id="middle-menu-footer" class="sub-footer even">
		
		<?php if ($page['middle_menu_footer']): ?>	

				  <?php print render($page['middle_menu_footer']); ?>

				 
		 <?php endif; ?>

	</div>
	
	<div id="right-menu-footer" class="sub-footer last odd">
		
		<?php if ($page['right_menu_footer']): ?>	

				  <?php print render($page['right_menu_footer']); ?>

				 
		 <?php endif; ?>

	</div>
	
		<div id="social-footer" class="social-footer">
		
		<?php if ($page['social_footer']): ?>	

				  <?php print render($page['social_footer']); ?>

				 
		 <?php endif; ?>

	</div>
	
	</div>
	
</div>