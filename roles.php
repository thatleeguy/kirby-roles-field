<?php

class RolesField extends CheckboxesField {

  public function __construct() {
    $this->type    = 'checkboxes';
    $this->options = array();

    foreach(site()->roles() as $role) {
      if($role !='admin') {
        $this->options[$role->id()] = $role->name();
      }
    }

  }

}