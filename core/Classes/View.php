<?php

class View {
    public $data;

    function render($name) {
        echo "render( $name ) | ";
        echo "data = ";
        echo "<pre>";
        print_r($this->data);
        echo "</pre>";

        require_once VIEWS . $name . ".php";
    }
}
