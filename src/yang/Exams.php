<?php
    namespace Yang;
    /**
     * Exams class
     */
    class Exams{

        /**
         * BhTest function
         *
         * @param [type] $args
         * @return void
         */
        function BhTest($args)
        {
            $args1 = htmlspecialchars_decode($args);
            $args2 = preg_replace("/\s+/",'',$args1);
            $args3 = explode('</p>',$args2);
            $args6 = array();
            foreach($args3 as $key=>$value){
                if($value){
                    $args4 = str_replace("<p>", "", $value);
                    $args5 = explode(':',$args4);
                    $args6[] = array('key'=>$args5[0],'value'=>$args5[1]);
                }
            }
            return $args6;
        }


        /**
         * Undocumented function
         *
         * @param array $array
         * @return json
         */
        function Mgrows($array = '')
        {
            $json = json_decode($array,true);
            return $json;
        }

        /**
         * MgAnswerrows function
         *
         * @param string $string
         * @return void
         */
        function MgAnswerrows($string = '')
        {
            $string = explode(',',$string);
            $json = json_encode($string);
            return $json;
        }

    }
?>