<?php
namespace Trivia;

class CustomTaxonomy
{
  function normalize_name() {
    return strtolower(str_replace(' ', '_', $this->name));
  }

  function register() {
    register_taxonomy($this->normalize_name(), $this->obj_assoc, $this->taxonomy);
  }

  function build() {
    $this->taxonomy = array(
      'labels' => array(
        'name' => $this->names,
        'singular_name' => $this->name,
        'all_items' => 'All ' . strtolower($this->names),
        'edit_item' => 'Edit ' . strtolower($this->name),
        'view_item' => 'View ' . strtolower($this->name),
        'add_new_item' => 'Add new ' . strtolower($this->name),
        'new_item_name' => 'New ' . strtolower($this->name),
        'search_items' => 'Search ' . strtolower($this->names),
        'popular_items' => 'Popular ' . strtolower($this->names),
        'not_found' => 'No ' . strtolower($this->names) . ' found'
      ),
      'public' => $this->public,
      'hierarchical' => $this->has_kids,
      'show_admin_column' => true
    );
    if ($this->has_kids) {
      $this->taxonomy['labels']['parent_item'] = 'Parent ' . strtolower($this->name);
    } else {
      array_merge($this->taxonomy['labels'], array(
        'separate_items_with_commas' => 'Separate ' . strtolower($this->names) . ' with commas',
        'add_or_remove_items' => 'Add or remove ' . strtolower($this->names),
        'choose_from_most_used' => 'Choose from most used ' . strtolower($this->names)
      ));
    }
  }

  function __construct($name, $names, $desc, $obj_assoc = 'post', $public = true, $has_kids = false) {
    $this->name = $name;
    $this->names = $names;
    $this->desc = $desc;
    $this->obj_assoc = $obj_assoc;
    $this->public = $public;
    $this->has_kids = $has_kids;
    $this->build();
    $this->register();
  }
}