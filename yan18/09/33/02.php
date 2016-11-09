
<?php

if(isset($_POST)){
    // echo $_POST['old_url'] . '<br />';
// $key = '';

    $item = basename($_POST['old_url']);
    // echo $item . '<br />';

    $item = substr($item,0,strlen($item) - 5);
    // echo $item . '<br />';

    $url = 'http://api.tudou.com/v3/gw?method=item.info.get&appKey=96f8d32d8a62c061&format=xml&itemCodes=' . $item;
    // echo $url;
     echo "<hr />";

    // $source = file_get_contents($url);
    $dom = new DOMdocument('1.0','utf-8');
    $dom->load($url);
    $new_url =  $dom->getElementsByTagName('html5Url')->item(0)->nodeValue;

} else {
    $new_url = '';
}

 ?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title></title>
    </head>
    <body>
        <pre>

        </pre>
        <form class=""   method="post">
            视频地址<input type="text" name="old_url" value="">
            <input type="submit"  value="提交" onclick="on()">

        </form>
        <p>
            无广告地址在：<?php echo $new_url; ?>
        </p>
    </body>
    <script type="text/javascript">
        function on(){

        }
    </script>
</html>
