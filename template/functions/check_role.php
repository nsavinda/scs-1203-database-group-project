<?php

function check_role(){
    if($_SESSION['username'] ==="admin"){
        return 1;

    }else if($_SESSION['username'] ==="doctor"){ 
        return 2;
}else if(['username']   === "nurse"){  
    return 3;  
}else if(['username'] === "nirmal"){
    return 4;
}else return 0;
}

?>