<?php


$arr = getimagesize('./test.png');
print_r($arr);
echo "这是".image_type_to_mime_type($arr[2])."类型的图片","<br />";

echo substr($arr['mime'],strpos($arr['mime'],'/')+1);

 ?>
