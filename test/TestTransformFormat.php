<?php
    /**
     * Created by PhpStorm.
     * User: alpha
     * Date: 11.03.19
     * Time: 20:59
     */

    namespace test;
    use transformer\XMLTransformFormat;

    /**
     * Class TestTransformFormat
     * @package test
     */
    class TestTransformFormat
    {
        public function __construct( $arguments ){

            /**
             * overwrite option
             */
            //$arguments[1] = 'xml2array';
            //$arguments[1] = 'xml2json';
            //$arguments[2] = 'openweathermap';
            //$arguments[2] = 'localdata';


            /**
             * Sources
             */
            $url = 'https://samples.openweathermap.org/data/2.5/weather?q=London&mode=xml&appid=b6907d289e10d714a6e88b30761fae22';
            $file = dirname (__FILE__) . '/content/weather.xml';


            /**
             * php optional argument 2
             */
            switch ( $arguments[2] ){
                case 'openweathermap' : $source = $url; break;
                case 'localdata' : $source = $file; break;
                default : $source = $file;
            }


            $xml = file_get_contents ( $source );
            $tf = new XMLTransformFormat( $xml );


            /**
             * php optional argument 1
             */
            switch ( $arguments[1] ){
                case 'xml2array' : print_r ( $tf -> get_array () );break;
                case 'xml2json' : print_r ( $tf -> get_json () );break;
                default : print_r ( $tf -> get_json () );
            }


        }

    }