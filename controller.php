<?php
require_once 'model.php';
$model = new Model();

//USE IT FOR INSERT
$result=$model->insert($param1,$param2,$param3,$param4);

//USE IT FOR SELECT
$result=$model->select_data($param1);

//USE IT FOR UPDATE
$result=$model->update_data($param1,$company,$address,$phone);

//USE IT FOR DELETE
$result=$model->delete($param1);

?>