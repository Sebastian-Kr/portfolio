<?php

// Zaczep pozwalający na dodanie pola użytkownika.
add_action( 'add_meta_boxes', 'prgrm_mbe_create' );
// funkcja dodająca puste pole
function prgrm_mbe_create() {

	// Utworzenie własnego pola użytkownika.
	add_meta_box(
		'prgrm-meta', // id boksa
		'Dodatkowe pola na stronie', //Tytuł boxa
		'prgrm_mbe_function', // funkcja wyświetlająca elementy do wpisania
		'page', // miejsce gdzie będzie wyświetlało się pole
		'normal', // pozycja gdzie będzie wyświetlało się pole (środek, czy bok)
		'high' // priorytet
	);

}
// funkcja wyświetlająca elementy do wpisania
function prgrm_mbe_function( $post ) {

	// Pobranie wartości metadanych, o ile istnieją.
	$prgrm_mbe_ft1 = get_post_meta( $post->ID, '_prgrm_mbe_ft1', true );
	$prgrm_mbe_ft2 = get_post_meta( $post->ID, '_prgrm_mbe_ft2', true );
	$prgrm_mbe_ft3 = get_post_meta( $post->ID, '_prgrm_mbe_ft3', true );
	$prgrm_mbe_ft4 = get_post_meta( $post->ID, '_prgrm_mbe_ft4', true );
	$prgrm_mbe_fb1 = get_post_meta( $post->ID, '_prgrm_mbe_fb1', true );
	$prgrm_mbe_fb2 = get_post_meta( $post->ID, '_prgrm_mbe_fb2', true );
	$prgrm_mbe_fb3 = get_post_meta( $post->ID, '_prgrm_mbe_fb3', true );
	$prgrm_mbe_fb4 = get_post_meta( $post->ID, '_prgrm_mbe_fb4', true );

	echo 'Wypełnij wszystskie, które chcesz pokazać stronie';
	?>
<h4>Wyróżniki firmy</h4>
<p>Nagłówek: <input type="text" name="prgrm_mbe_ft1" value="<?php echo esc_attr( $prgrm_mbe_ft1 ); ?>" /></p>
<p>Treść: <textarea row="4" col="50" name="prgrm_mbe_fb1"><?php echo esc_attr( $prgrm_mbe_fb1 ); ?></textarea></p>

<p>Nagłówek: <input type="text" name="prgrm_mbe_ft2" value="<?php echo esc_attr( $prgrm_mbe_ft2 ); ?>" /></p>
<p>Treść: <textarea row="4" col="50" name="prgrm_mbe_fb2"><?php echo esc_attr( $prgrm_mbe_fb2 ); ?></textarea></p>

<p>Nagłówek: <input type="text" name="prgrm_mbe_ft3" value="<?php echo esc_attr( $prgrm_mbe_ft3 ); ?>" /></p>
<p>Treść: <textarea row="4" col="50" name="prgrm_mbe_fb3" ><?php echo esc_attr( $prgrm_mbe_fb3 ); ?></textarea></p>

<p>Nagłówek: <input type="text" name="prgrm_mbe_ft4" value="<?php echo esc_attr( $prgrm_mbe_ft4 ); ?>" /></p>
<p>Treść: <textarea row="4" col="50" name="prgrm_mbe_fb4"><?php echo esc_attr( $prgrm_mbe_fb4 ); ?></textarea></p>


	<?php
}

// Zaczep pozwalający na zapis danych pola użytkownika.
add_action( 'save_post', 'prgrm_mbe_save_meta' );

function prgrm_mbe_save_meta( $post_id ) {

	// Sprawdzenie, czy metadane zostały podane.
	if ( isset( $_POST['prgrm_mbe_ft1'] ) ) {

		// Zapis metadanych.
		update_post_meta( $post_id, '_prgrm_mbe_ft1', strip_tags( $_POST['prgrm_mbe_ft1'] ) );
		update_post_meta( $post_id, '_prgrm_mbe_ft2', strip_tags( $_POST['prgrm_mbe_ft2'] ) );
		update_post_meta( $post_id, '_prgrm_mbe_ft3', strip_tags( $_POST['prgrm_mbe_ft3'] ) );
		update_post_meta( $post_id, '_prgrm_mbe_ft4', strip_tags( $_POST['prgrm_mbe_ft4'] ) );
		update_post_meta( $post_id, '_prgrm_mbe_fb1', strip_tags( $_POST['prgrm_mbe_fb1'] ) );
		update_post_meta( $post_id, '_prgrm_mbe_fb2', strip_tags( $_POST['prgrm_mbe_fb2'] ) );
		update_post_meta( $post_id, '_prgrm_mbe_fb3', strip_tags( $_POST['prgrm_mbe_fb3'] ) );
		update_post_meta( $post_id, '_prgrm_mbe_fb4', strip_tags( $_POST['prgrm_mbe_fb4'] ) );

	}

}

 ?>
