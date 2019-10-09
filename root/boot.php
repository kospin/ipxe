<?php
/**
 * @package    
 *
 * @copyright 
 * @license   
 */

/**
 * 修改當前路徑./menu.lst 第5行改為設定next-server伺服ip
 * 
 */

$filename = "./menu.lst";
$array = file($filename);
$array[4] = "set ns=$_GET[ns]\n";
$content1 = implode('',$array);
$fd=fopen($filename,"w");
fwrite($fd,$content1);
fclose($fd);


echo "#!ipxe \n";
echo "chain http://$_GET[ns]/grldr";

 ?>
  