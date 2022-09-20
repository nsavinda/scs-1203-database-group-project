<?php   

if(!(check_role() == 1 || check_role() == 4)){
    header('location:/index.php');
}

?>