<?php
    class WarrantyProgram {

        public $warrantyId;
        public $productId;
        public $warrantyDuration;
        public $warrantyCostPercentage;
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
                    $sub = new WarrantyProgram;
                    $sub->turnObjectPropertiesToObjProperties($value);
                    $value = $sub;
                }
                array_push($returnable, $value);
            }

            return $returnable;
        }
    }
?>