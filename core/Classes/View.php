<?php

class View {
    public $data;

    function render($name) {
        echo "render( $name ) |";

        require_once VIEWS . $name . ".php";
    }
}
