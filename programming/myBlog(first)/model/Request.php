<?php

    class Request
    {
        public function __construct()
        {

        }

        public function request($id) {
            return $_GET[$id];
        }
    }
