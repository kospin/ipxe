<?php
/**
 * @package    
 *
 * @copyright 
 * @license   
 */

/**
 * �ק��e���|./menu.lst ��5��אּ�]�wnext-server���Aip
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
  