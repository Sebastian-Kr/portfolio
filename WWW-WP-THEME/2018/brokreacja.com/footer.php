<?php defined('ABSPATH') or die();
/**
 * Default Footer
 * @author Nina Taberski-Besserdich (nina.taberski@besserdich.com)
 * @package WordPress
 * @subpackage BIC Bootstrap Wordpress Theme
 */
?>


<?php if (!is_page(6)): ?>

  <footer class="main-footer">

      <p>Copyright 2016 Brokreacja <span>/</span> Design by <a href="http://wizualni.pl" target="_blank">Wizualni.pl</a> </p>

  </footer>

<?php endif; ?>
<script>

    $(document).ready(function()
    {
        $('#show-menu').click(function()
        {
            $('#mobile-menu').slideToggle('fast');

            return false;
        });

    });

</script>
<?php wp_footer(); ?>
</body>
</html>
