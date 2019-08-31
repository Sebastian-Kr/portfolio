<?php defined('ABSPATH') or die();
/**
 * Template Name: Full Width Page
 * Description: Page template with a full width content container.
 * @author Nina Taberski-Besserdich (nina.taberski@besserdich.com)
 * @package WordPress 
 * @subpackage BIC Bootstrap Wordpress Theme
 */
?>
<?php get_header(); ?>


<div class="page-container page-dowodzik">
    
    <div class="content">
    
        <h1>A <span>dowodzik</span><br>jest?</h1>
    
        <a id="ok" href="<?php echo get_site_url(); ?>">Spoko, mam 18 lat (lub więcej)</a>
    
        <a id="fail" href="<?php echo get_site_url(); ?>/pij-mleko/">Kurcze, a bez dowodu nie da rady?</a>
    
        <p>Używamy plików <a href="http://wszystkoociasteczkach.pl/">cookies</a>, aby ułatwić Ci korzystanie z&nbsp;naszego serwisu. Jeśli nie blokujesz tych plików, to zgadzasz się na ich użycie oraz zapisanie w&nbsp;pamięci urządzenia. Pamiętaj, że możesz samodzielnie zarządzać cookies, zmieniając ustawienia przeglądarki.</p>
    
    </div>
    
</div>   


<script>

    $(document).ready(function()
    {
        $('#ok').click(function()
        {
            //localStorage.setItem("dowodzik", "true");
            
            function setCookie(cname,cvalue,exdays) {
    var d = new Date();
    d.setTime(d.getTime() + (exdays*24*60*60*1000));
    var expires = "expires=" + d.toGMTString();
    document.cookie = cname+"="+cvalue+"; "+expires;
}

setCookie("dowodzik", "true", 30);
            
            return true;
        });
    });

</script>
    
    
    
<?php get_footer(); ?>
