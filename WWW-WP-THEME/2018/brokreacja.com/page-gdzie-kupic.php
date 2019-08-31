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

<div class="page-container page-gdzie-kupic">
	<div class="box-top-gdzie-kupic">
		<h2>Gdzie <span>kupić?</span></h2>
		<p><?= apply_filters('post_content', get_post_field('post_content', 579)); ?></p>
	</div>
	<div id="map2">
<iframe src="https://www.google.com/maps/d/embed?mid=1_T5ZSyj-k2gTBo9n2VUSAIvGp6A&z=6" width="100%" height="100%"></iframe>
	</div>
	<?php $gpsGreen = get_cfc_meta('gps_zielona', 579); ?>
	<?php $iconGreen = get_cfc_meta('ikona_pierwsza', 579); ?>

	<?php $gpsRed = get_cfc_meta('gps_drugie', 579); ?>
	<?php $iconRed = get_cfc_meta('ikona_druga', 579); ?>

	<?php $gpsYellow = get_cfc_meta('gps_trzecie', 579); ?>
	<?php $iconYellow = get_cfc_meta('ikona_trzecia', 579); ?>

	<?php $gpsBlue = get_cfc_meta('gps_czwarty', 579); ?>
	<?php $iconBlue = get_cfc_meta('ikona_czwarta', 579); ?>

	<div class="under-map">
		<div class="under-map-box">
			<div class="icon-map"></div>
      <?php $link = get_cfc_meta('link_mapa', 579); ?>
			<p>Jeżeli mapa się nie wczytała, skorzystaj z <a href="<?= $link[0]['link-mapa'] ?>" target="_blank">bezpośredniego linku</a></p>
		</div>
	</div>
</div>

<?php get_footer(); ?>

<script src="http://maps.google.com/maps/api/js?key=AIzaSyDU1T9Z3_00BrilXBWGOeSC9mZUMM7us4A&sensor=false"></script>

	<script>
		function myMap() {
		var mapProp = {
		    center:new google.maps.LatLng(52.2735176,20.1436721,6.5),
		    zoom:6,
		};
		var map = new google.maps.Map(document.getElementById("map"),mapProp);


  		var icons = {
	      info: {
	        icon: '<?= wp_get_attachment_url($iconGreen[0]["ikona-pierwsza"]) ?>'
	      },
	      red: {
	      	icon: '<?= wp_get_attachment_url($iconRed[0]["ikona-druga"]) ?>'
	      },
	      yellow: {
	      	icon: '<?= wp_get_attachment_url($iconYellow[0]["ikona-trzecia"]) ?>'
	      },
	      blue: {
	      	icon: '<?= wp_get_attachment_url($iconBlue[0]["ikona-czwarta"]) ?>'
	      }
	    };

	    var featuresFirst = [
	    <?php foreach($gpsGreen as $gpsGren) : ?>
	    	 {
            position: new google.maps.LatLng(<?= $gpsGren['gps-zielona'] ?>),
            type: 'info'
          },
        <?php endforeach; ?>

        ];

        var featuresSecond = [
	    <?php foreach($gpsRed as $gpsRe) : ?>
	    	 {
            position: new google.maps.LatLng(<?= $gpsRe['gps-drugie'] ?>),
            type: 'red'
          },
        <?php endforeach; ?>

        ];

        var featuresThird = [
	    <?php foreach($gpsYellow as $gpsYell) : ?>
	    	 {
            position: new google.maps.LatLng(<?= $gpsYell['gps-trzecie'] ?>),
            type: 'yellow'
          },
        <?php endforeach; ?>

        ];

         var featuresFourth = [
	    <?php foreach($gpsBlue as $gpsBlu) : ?>
	    	 {
            position: new google.maps.LatLng(<?= $gpsBlu['gps-czwarty'] ?>),
            type: 'blue'
          },
        <?php endforeach; ?>

        ];

        featuresFirst.forEach(function(feature) {
          var marker = new google.maps.Marker({
            position: feature.position,
            icon: icons[feature.type].icon,
            map: map
          });
        });

         featuresSecond.forEach(function(feature) {
          var marker = new google.maps.Marker({
            position: feature.position,
            icon: icons[feature.type].icon,
            map: map
          });
        });

     	featuresThird.forEach(function(feature) {
          var marker = new google.maps.Marker({
            position: feature.position,
            icon: icons[feature.type].icon,
            map: map
          });
        });

        featuresFourth.forEach(function(feature) {
          var marker = new google.maps.Marker({
            position: feature.position,
            icon: icons[feature.type].icon,
            map: map
          });
        });
	}

    myMap();

	</script>
