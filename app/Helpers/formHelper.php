<?php


function inputText($type, $name,$pHolder,$value ='')
{
    return "
    <input class=\"form-control\" type=\"$type\" name=\"$name\" placeholder =\"$pHolder\" value = \"$value\">
    ";
}
