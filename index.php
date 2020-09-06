<?php
$string = 'C0620G1{';
$pattern = '/^C|A|P+[^\]/';
if (preg_match($pattern, $string)){
    echo 'Done!';
} else {
    echo 'Fail!';
}