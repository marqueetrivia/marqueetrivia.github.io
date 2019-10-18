<?php
namespace Trivia;

class CustomEndpoint
{
  function register() {
    $path = $this->callback_arg_is_int ? "/$this->route_name(?:/(?P<$this->callback_arg>\d+))?" : "/$this->route_name(?:/(?P<$this->callback_arg>\w+))?";
    register_rest_route('trivia/v1', $path, array(
      'methods' => $this->methods,
      'callback' => $this->callback
    ));
  }

  function __construct($name, $methods, $callback, $callback_arg, $arg_is_int = false) {
    $this->route_name = $name;
    $this->methods = $methods;
    $this->callback = $callback;
    $this->callback_arg = $callback_arg;
    $this->callback_arg_is_int = $arg_is_int;
    $this->register();
  }
}
