<?php
//echo file_get_contents('http://bowuting.com');
//readfile('http://bowuting.com');

//phpinfo();


//检测扩展是否已经开启
//var_dump(extension_loaded('curl'));

//检测函数是否存在
//var_dump(function_exists('curl_version'));

//查看已经定义的函数
///print_r(get_defined_functions());
/*
[237] => curl_init
            [238] => curl_copy_handle
            [239] => curl_version
            [240] => curl_setopt
            [241] => curl_setopt_array
            [242] => curl_exec
            [243] => curl_getinfo
            [244] => curl_error
            [245] => curl_errno
            [246] => curl_close
            [247] => curl_multi_init
            [248] => curl_multi_add_handle
            [249] => curl_multi_remove_handle
            [250] => curl_multi_select
            [251] => curl_multi_exec
            [252] => curl_multi_getcontent
            [253] => curl_multi_info_read
            [254] => curl_multi_close
*/

//获取curl的版本信息
print_r(curl_version());


 ?>
