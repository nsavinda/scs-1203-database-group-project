<?php   

if(!(check_role() == 1 || check_role() == 3)){
    header('location:/index.php');
}

?>