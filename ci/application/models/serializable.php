<?php
    require_once APPPATH."models/serianameable.php";
    interface Serializablee extends Serianameable{
        function toArray();
    }
?>