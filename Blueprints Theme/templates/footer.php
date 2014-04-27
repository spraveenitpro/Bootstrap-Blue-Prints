<footer class="content-info" role="contentinfo">
  <div class="container">
  	<p><a href="<?php echo home_url(); ?>/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/logo.png" width="80" alt="Bootstrappin'"></a></p>
    <?php dynamic_sidebar('sidebar-footer'); ?>
    
  </div>
</footer>

<?php wp_footer(); ?>
