<?php
    $DEBUG = true;
    
    use GUHIUJI_Env\EnvReader;
    
    (new EnvReader(guhiuji_dir . '/env/config.env'))->load();
    
    

?>