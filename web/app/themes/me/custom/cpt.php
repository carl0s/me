<?php
add_action( 'init', 'cptui_register_my_cpts' );
function cptui_register_my_cpts() {
	$labels = array(
		"name" => "Progetti",
		"singular_name" => "Progetto",
		"menu_name" => "I progetti",
		"all_items" => "Tutti i progetti",
		"add_new" => "Nuovo progetto",
		"add_new_item" => "Aggiungi nuovo progetto",
		"edit" => "Modifica progetto",
		"edit_item" => "Modifica progetto",
		"new_item" => "Nuovo progetto",
		"view" => "Vedi progetto",
		"view_item" => "Vedi progetto",
		"search_items" => "Cerca progetto",
		"not_found" => "Nessun progetto trovato",
		"not_found_in_trash" => "Nessun progetto trovato nel cestino",
		"parent" => "Progetto padre",
		);

	$args = array(
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"show_ui" => true,
		"has_archive" => true,
		"show_in_menu" => true,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => array( "slug" => "progetti", "with_front" => true ),
		"query_var" => true,

		"supports" => array( "title", "editor", "excerpt", "custom-fields", "thumbnail" ),
		"taxonomies" => array( "category" )
	);
	register_post_type( "progetti", $args );

// End of cptui_register_my_cpts()
}

?>
