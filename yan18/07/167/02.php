<?php


//print_r($_POST);
print_r($_FILES);


sleep(5);

if (move_uploaded_file($_FILES['pic']['tmp_name'],'./file/'.$_FILES['pic']['name'])) {
  echo "移动成功";
} else {
  echo "移动失败";
}


 ?>
