<?php
Class Admin extends Account {
    private $isSuper;
    
    function __construct($s) {
        $this->isSuper = $s;
    }
}
?>