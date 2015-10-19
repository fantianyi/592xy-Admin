<?php

$stor_domain = "mysql";//Storage的存放域      
$file_path = "";//文件路径      
$file_name = "592xy-" . date('YmdHis').".sql.zip";//以当前的时间日期为文件名      
$stor_filename = $file_path .$file_name;//完整的文件名（含路径）      
$dbname = SAE_MYSQL_DB; //数据库名      
     
$dj = new SaeDeferredJob();      
$taskID = $dj->addTask("export", "mysql", $stor_domain, $stor_filename, $dbname, null, null);      
if($taskID===false){      
    var_dump($dj->errno(), $dj->errmsg());      
}else{      
    var_dump($taskID);      
} 

?>