<?php

Class Admin extends Account {
    private $is_super;

    function __construct($e, $pass, $first, $last, $super=false, $s=null) {
        Account::__construct($e, $pass, $first, $last, $s);
        $this->is_super = $super;
    }

    function get_is_super() {
        return $this->is_super;
    }

    function set_is_super($s) {
        $this->is_super = $s;
    }
}
?>
