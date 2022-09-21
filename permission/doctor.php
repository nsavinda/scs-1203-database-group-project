<?php   

if(!(check_role() == 1 || check_role() == 2)){
    header('location:/index.php');
}

?>