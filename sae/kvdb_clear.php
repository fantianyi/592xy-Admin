<?php
$kv = new SaeKV();  //创建SaeKV对象
$ret = $kv->init(); //初始化
$ret = $kv->pkrget('', 100);    //获取缓存内容(帮助文档注明了上限为100条)
echo('<h3>当前KVDB缓存内容</h3>');
var_dump($ret);
//遍历并删除
foreach ($ret as $key => $value) {
    $ret = $kv->delete($key);
}
echo('<hr>');
echo('<h3>清空KVDB缓存后的内容</h3>');
$ret = $kv->pkrget('', 100);  
var_dump($ret);
if (!$ret){
    echo('<hr>');
    echo('KVDB清空成功');
};
?>