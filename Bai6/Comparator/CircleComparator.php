<?php
    include('Circle.php');
    include('Comparator.php');

    class CircleComparator implements Comparator{
        public function compare($object1, $object2)
        {
           $radius1 = $object1->getRadius();
           $radius2 = $object2->getRadius();
           if($radius1 > $radius2){
               return 1;
           }elseif($radius1 < $radius2){
               return -1;
           }else{
               return 0;
           }
        }
    }
