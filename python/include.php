<?php 



if(isset($sugar_config)) {
    die(json_encode($sugar_config));
} else {
    die('$sugar_config not found');
}

