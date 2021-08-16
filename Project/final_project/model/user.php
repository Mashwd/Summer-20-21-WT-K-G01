<?php
    class User {

        public $userId;
        public $username;
        public $password;
        public $userType;
        public $phone;
        public $email;
        public $active;


        public function turnObjectPropertiesToObjProperties($data) {
            foreach ($data AS $key => $value) {
                $this->{$key} = $value;
            }
        }


        public static function getUserArrayFromJsonArray($jsonArray){
            $decodedArray = json_decode($jsonArray, true);

            $returnable = array();

            foreach ($decodedArray AS $key => $value) {
                if (is_array($value)) {
                    $sub = new User;
                    $sub->turnObjectPropertiesToObjProperties($value);
                    $value = $sub;
                }
                array_push($returnable, $value);
            }

            return $returnable;
        }
    }
?>