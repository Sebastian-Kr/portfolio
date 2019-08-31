<?php

// Zaczep pozwalający na dodanie pola użytkownika.
add_action( 'add_meta_boxes', 'boj_mbe_create' );

function boj_mbe_create() {

	// Utworzenie własnego pola użytkownika.
	add_meta_box( 'boj-meta', 'Własne pole użytkownika', 'boj_mbe_function', 'page', 'normal', 'high' );

}

function boj_mbe_function( $post ) {

	// Pobranie wartości metadanych, o ile istnieją.
	$boj_mbe_name = get_post_meta( $post->ID, '_boj_mbe_name', true );
	$boj_mbe_costume = get_post_meta( $post->ID, '_boj_mbe_costume', true );

	echo 'Proszę wypełnić poniższe pola';
	?>
	<p>Imię: <input type="text" name="boj_mbe_name" value="<?php echo esc_attr( $boj_mbe_name ); ?>" /></p>
    <p>Kostium:
    <select name="boj_mbe_costume">
        <option value="vampire" <?php selected( $boj_mbe_costume, 'vampire' ); ?>>Wampir</option>
        <option value="zombie" <?php selected( $boj_mbe_costume, 'zombie' ); ?>>Zombie</option>
        <option value="smurf" <?php selected( $boj_mbe_costume, 'smurf' ); ?>>Smerf</option>
    </select>
    </p>
	<?php

	echo 'wlazłem';
}

// Zaczep pozwalający na zapis danych pola użytkownika.
add_action( 'save_post', 'boj_mbe_save_meta' );

function boj_mbe_save_meta( $post_id ) {

	// Sprawdzenie, czy metadane zostały podane.
	if ( isset( $_POST['boj_mbe_name'] ) ) {

		// Zapis metadanych.
		update_post_meta( $post_id, '_boj_mbe_name', strip_tags( $_POST['boj_mbe_name'] ) );
		update_post_meta( $post_id, '_boj_mbe_costume', strip_tags( $_POST['boj_mbe_costume'] ) );

	}

}
?>
