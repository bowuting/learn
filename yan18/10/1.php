<?php
    $str = implode($_POST,"\n");
    file_put_contents('./post.txt',$str);
    echo "ok write";
?>
