<?php
class FunctionCommon {

    public function redirectPage($action){
        header("Location:$action");
    }

}
?>