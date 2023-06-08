<?php
/*
* Creating a function to create our CPT
*/
  
/* Creación CPT eventos */
add_action( 'init', 'create_cpt_eventos_caninos', 0 );
function create_cpt_eventos_caninos() {
  
    $labels = array(
        'name'                => _x( 'Eventos Caninos', 'Eventos Caninos', 'wearecactus' ),
        'singular_name'       => _x( 'Evento Canino', 'Evento Canino', 'wearecactus' ),
        'menu_name'           => __( 'Eventos Caninos', 'wearecactus' ),
        'parent_item_colon'   => __( 'Parent Evento Canino', 'wearecactus' ),
        'all_items'           => __( 'Todos los Eventos', 'wearecactus' ),
        'view_item'           => __( 'Ver Evento Canino', 'wearecactus' ),
        'add_new_item'        => __( 'Añadir Nuevo Evento Canino', 'wearecactus' ),
        'add_new'             => __( 'Añadir Nuevo', 'wearecactus' ),
        'edit_item'           => __( 'Editar Evento Canino', 'wearecactus' ),
        'update_item'         => __( 'Actualizar Evento Canino', 'wearecactus' ),
        'search_items'        => __( 'Buscar Evento Canino', 'wearecactus' ),
        'not_found'           => __( 'No hay resultados', 'wearecactus' ),
        'not_found_in_trash'  => __( 'No hay resultados en la papelera', 'wearecactus' ),
    );
          
          
    $args = array(
        'label'               => __( 'Eventos Caninos', 'wearecactus' ),
        'description'         => __( 'Listado de nuestros Eventos Caninos', 'wearecactus' ),
        'labels'              => $labels,
        'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),

        'taxonomies'          => array( 'cat-eventos' ),

        'hierarchical'        => false,
        'public'              => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_nav_menus'   => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 7,
        'can_export'          => true,
        'has_archive'         => true,
        'exclude_from_search' => false,
        'publicly_queryable'  => true,
        'capability_type'     => 'post',
        'menu_icon'           => 'dashicons-clipboard',
        'show_in_rest' => true,
    
    );
        
    register_post_type( 'eventos-caninos', $args );
    
}     

/* Creación Categorización Tipo */
add_action( 'init', 'create_tax_eventos', 0 );  
function create_tax_eventos() {
    $labels = array(
        'name'             => _x( 'Tipo', 'eventos-caninos' ),
        'singular_name'    => _x( 'Tipo', 'eventos-caninos' ),
        'search_items'     =>  __( 'Buscar por Tipo' ),
        'all_items'        => __( 'Todas las Tipo' ),
        'parent_item'      => __( 'Tipo padre' ),
        'parent_item_colon'=> __( 'Tipo padre:' ),
        'edit_item'        => __( 'Editar Tipo' ),
        'update_item'      => __( 'Actualizar Tipo' ),
        'add_new_item'     => __( 'Añadir nueva Tipo' ),
        'new_item_name'    => __( 'Nombre de la nueva Tipo' ),
    );

    register_taxonomy( 'Tipo', array( 'eventos-caninos' ), array(
        'hierarchical'       => true,
        'labels'             => $labels,
        'show_ui'            => true,
        'query_var'          => true,
        'show_admin_column'  => true,
        'rewrite'            => array( 'slug' => 'tipo-evento' ),
    ));
}