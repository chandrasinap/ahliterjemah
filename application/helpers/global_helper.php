<?php

if(!function_exists('echopre'))
{
    function echopre($dt)
    {
        echo'<pre>';print_r($dt);echo'</pre>';
    }
}

?>