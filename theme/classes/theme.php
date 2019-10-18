<?php
namespace Trivia;
use Trivia\CustomPostType as CPT;
use Trivia\CustomTaxonomy as CTX;
use Trivia\CustomEndpoint as CEP;

class TriviaAdminTheme
{
  function __construct() {
    add_action('after_setup_theme', [$this, 'theme_supports']);
    add_action('init', [$this, 'custom_post_types']);
    add_action('init', [$this, 'custom_taxonomies']);
    add_action('rest_api_init', [$this, 'custom_endpoints']);
  }

  function theme_supports() {
    add_theme_support('html5');
    add_theme_support('menus');
  }
  
  function get_populated_terms($term) {
    return get_terms($term, array( 'hide_empty' => true ));
  }

  function get_all_menus() {
    return $this->get_populated_terms('nav_menu');
  }

  function cep_menu_handler($request) {
    if ($request['menu_name']) {
      return wp_get_nav_menu_items($request['menu_name']);
    } else {
      $menus = $this->get_all_menus();
      foreach ($menus as &$menu) {
        $menu->menu_items = wp_get_nav_menu_items($menu->slug);
      }
      return $menus;
    }
  }

  function custom_endpoints() {
    new CEP('menu', 'GET', [$this, 'cep_menu_handler'], 'menu_name', false);
  }

  function custom_post_types() {
    // new CPT('Distributor', 'Distributors', 'dashicons-admin-site-alt3', 20);
  }

  function custom_taxonomies() {
    // new CTX('Brand', 'Brands', 'Bio X Cell brands this product is a part of.', 'product', true, true);
  }
}