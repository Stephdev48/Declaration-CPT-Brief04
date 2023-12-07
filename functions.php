<?php

//Reproduction du CPT Apprenants

function apprenantsbis() {

  $labels = array(
    'name' => 'ApprenantsBis',
    'all_items' => 'Tous les apprenants',
    'singular_name' => 'Apprenant',
    'add_new_item' => 'Ajouter un apprenant',
    'add_new' => 'Ajouter un apprenant',
    'edit_item' => 'Modifier un apprenant',
    'menu_name' => 'ApprenantsBis',

  );

  $args = array(
    'labels' => $labels,
    'public' => true,
    'show_in_rest' => true,
    'has_archive' => true,
    'supports' => array( 'title', 'editor', 'thumbnail'),
    'menu_position' => 30,
    'menu_icon' => 'dashicons-welcome-learn-more',
  );


  register_post_type('apprenantsbis', $args);

  
  $labels = array(      // (Taxonomie de ApprenantsBis)
    'name' => 'Année promo',
    'new_item_name' => 'Année promo',
  );

  $args = array(
    'labels'=> $labels,
    'public' => true,
    'show_in_rest' => true,
  );

  register_taxonomy('annee_promo', 'apprenantsbis', $args);

  
  $labels = array(
    'name' => 'Compétences',
    'new_item_name' => 'Compétences',
  );

  $args = array(
    'labels'=> $labels,
    'public' => true,
    'show_in_rest' => true,
  );

  register_taxonomy('competences', 'apprenantsbis', $args);

  $labels = array(
    'name' => 'Formation suivie',
    'new_item_name' => 'Formation suivie',
  );

  $args = array(
    'labels'=> $labels,
    'public' => true,
    'show_in_rest' => true,
  );

  register_taxonomy('formation_suivie', 'apprenantsbis', $args);

}
add_action('init', 'apprenantsbis');

  ?>