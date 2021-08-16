<?php
    class Message {

        public $messageId;
        public $fromUserId;
        public $fromUserName;
        public $toUserId;
        public $toUserName;
        public $message;
        public $timeCreated;


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
                    $sub = new Message;
                    $sub->turnObjectPropertiesToObjProperties($value);
                    $value = $sub;
                }
                array_push($returnable, $value);
            }

            return $returnable;
        }
    }
?>