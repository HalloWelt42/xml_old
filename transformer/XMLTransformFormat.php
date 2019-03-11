<?php
    /**
     * Created by PhpStorm.
     * User: alpha
     * Date: 11.03.19
     * Time: 20:45
     */

    namespace transformer;

    use SimpleXMLElement;

    class XMLTransformFormat
    {
        /**
         * @var string
         */
        private $xml;

        /**
         * @var SimpleXMLElement
         */
        private $sxml;


        /**
         * TransformFormat constructor.
         */
        public function __construct( $xml )
        {
            $this -> xml = $xml;
            $this -> sxml = new SimpleXMLElement( $xml );
        }


        /**
         * @return array
         */
        public function get_array()
        {
            return
                json_decode (
                     json_encode (
                         (array)$this -> sxml
                     )
                    , TRUE
                );
        }


        /**
         * @param int $options
         *
         * @return string
         */
        public function get_json( $options = JSON_PRETTY_PRINT )
        {
            return
                json_encode (
                    (array)$this -> sxml
                    , $options
                );
        }


    }