<?php

$stor_domain = "mysql";//Storage�Ĵ����      
$file_path = "";//�ļ�·��      
$file_name = "592xy-" . date('YmdHis').".sql.zip";//�Ե�ǰ��ʱ������Ϊ�ļ���      
$stor_filename = $file_path .$file_name;//�������ļ�������·����      
$dbname = SAE_MYSQL_DB; //���ݿ���      
     
$dj = new SaeDeferredJob();      
$taskID = $dj->addTask("export", "mysql", $stor_domain, $stor_filename, $dbname, null, null);      
if($taskID===false){      
    var_dump($dj->errno(), $dj->errmsg());      
}else{      
    var_dump($taskID);      
} 

?>