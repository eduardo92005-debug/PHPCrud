<?php 
    class Utils{
        
        public static function toObject( $array ){
            $object = json_decode(json_encode($array), false);
            return $object;
        }
        
        public static function showJSON( $array ){
            $toReturn = $array['statusCode'] ?? False;
            $json = json_encode($array);
            
            if($toReturn){
                http_response_code($toReturn);
            }
            header('Content-Type: application/json');
            echo $json;
            return $json;
        }

        public static function getQueryString( $key ){
            $value = $_GET[$key] ?? False; 
            return $value;
        }
    }
?>