<?php

// Zaczep pozwalający na dodanie pola użytkownika.
add_action( 'add_meta_boxes', 'boj_mbe_create' );
// funkcja dodająca puste pole
function boj_mbe_create() {

	// Utworzenie własnego pola użytkownika.
	add_meta_box(
		'boj-meta', // id boksa
		'Własne pole użytkownika', //Tytuł boxa
		'boj_mbe_function', // funkcja wyświetlająca elementy do wpisania
		'page', // miejsce gdzie będzie wyświetlało się pole
		'normal', // pozycja gdzie będzie wyświetlało się pole (środek, czy bok)
		'high' // priorytet
	);

}
// funkcja wyświetlająca elementy do wpisania
function boj_mbe_function( $post ) {

	// Pobranie wartości metadanych, o ile istnieją.
	$boj_mbe_name = get_post_meta( $post->ID, '_boj_mbe_name', true );
	$boj_mbe_costume = get_post_meta( $post->ID, '_boj_mbe_costume', true );

	echo 'Proszę wypełnić poniższe pola';
echo $post->ID;
$tem = get_post_meta( $post->ID, '_wp_page_template', true );
echo $tem;
if ($tem == 'page-akt.php') {echo 'dupa';}
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
