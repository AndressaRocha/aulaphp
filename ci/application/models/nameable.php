<?php
    require_once APPPATH."models/serianameable.php";
    interface Nameable extends Serianameable{
        function getClassName();
    }
?>