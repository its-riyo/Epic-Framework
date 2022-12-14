<?php

    namespace Core\Resources;

    /**
     * This class is responsable to gather informations about the current request
     * and serve them to classses that needs it :)
     */

    class Request
    {

        public static $uri;
        public static $requestMethod;

        public static function dispatch() {
            // Get the  current uri
            self::$uri = $_SERVER["REQUEST_URI"];

            // Get the current request method
            self::$requestMethod = $_SERVER["REQUEST_METHOD"];
        }


    }