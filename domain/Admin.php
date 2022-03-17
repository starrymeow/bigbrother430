<?php
Class Admin extends Account {
    private $is_super;
    
    function __construct($first, $last, $e, $pass, $s) {
        Account::construct($first, $last, $e, $pass);
        $this->is_super = $s;
    }
    
    function get_is_super() {
        return $this->is_super;
    }
    
    function set_is_super($s) {
        $this->is_super = $s;
    }
}
?>