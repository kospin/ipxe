<?php
/**
 * @package    
 *
 * @copyright  Copyright (C) 2005 - 2018 Open Source Matters, Inc. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

/**
 * 
 */

$filename = "./menu.lst";
$array = file($filename);
$array[4] = "set ns=$_GET[ns]\n";
//echo $array[4];
$content1 = implode('',$array);
//echo $content1;
$fd=fopen($filename,"w");
fwrite($fd,$content1);
fclose($fd);


echo "#!ipxe \n";
echo "chain http://$_GET[ns]/grldr";
//echo "echo $_GET['ns'] \n";
 
 ?>
  