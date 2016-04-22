<?php

class RolesField extends CheckboxesField {

  public function options() {
    foreach(kirby()->site()->roles() as $role) {
      if (is_array($this->exclude) && in_array($role, $this->exclude)) continue;
        $options[$role->id()] =  $role->name();
    }
    return $options;
  }

}
