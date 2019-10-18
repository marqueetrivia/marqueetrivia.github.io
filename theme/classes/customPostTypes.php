<?php
namespace Trivia;

class CustomPostType
{
  function register() {
    register_post_type($this->name, $this->post_type_args);
  }
  function build() {
    $this->post_type_args = array(
      'labels' => array(
        'name' => $this->names,
        'singular_name' => $this->name,
        'add_new' => 'Add ' . $this->name,
        'add_new_item' => 'Add New ' . $this->name,
        'edit_item' => 'Edit ' . $this->name,
        'new_item' => 'New ' . $this->name,
        'view_item' => 'View ' . $this->name,
        'search_items' => 'Search '  . $this->names,
        'not_found' => 'No ' . $this->names . ' found',
        'not_found_in_trash' => 'No ' . $this->names . ' in the trash',
        'all_items' => 'All ' . $this->names,
        'archives' => 'Archived ' . $this->names,
        'insert_into_item' => 'Insert into ' . $this->name,
        'uploaded_to_this_item' => 'Upload to ' . $this->name,
        'featured_image' => 'Featured Image',
        'set_featured_image' => 'Set Featured Image',
        'remove_featured_image' => 'Remove Featured Image',
        'use_featured_image' => 'Use as featured image'
      ),
      'description' =>  'An obje ct that includes all details about a ' . $this->name . ' type',
      'exclude_from_search' => false,
      'publicly_queryable' => $this->public,
      'show_ui' => true,
      'show_in_nav_menus' => false,
      'show_in_menu' => true,
      'show_in_admin_bar' => false,
      'show_in_rest' => $this->public,
      'menu_position' => $this->position,
      'menu_icon' => $this->icon,
      'taxonomies' => array(
        'category'
      ),
      'supports' => array('title')
    );
    if ($this->supports) {
      $this->add_supports();
    }
  }
  function add_supports() {
    foreach ($this->supports as $support) {
      $this->post_type_args['supports'][] = $support;
    }
  }
  function __construct($name, $names, $dashicon, $position, $public = true, $add_support = false) {
    $this->name = $name;
    $this->names = $names;
    $this->icon = $dashicon;
    $this->position = $position;
    $this->public = $public;
    $this->supports = $add_support;
    $this->post_type_args = [];
    $this->build();
    $this->register();
  }
}
