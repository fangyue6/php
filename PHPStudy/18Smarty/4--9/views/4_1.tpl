<{$var}> <br>

title:<{$title}> <br>
author:<{$author}><br>
content:<{$content}> <br>

<{$mz->name}><br>
<{$mz->sex}> <br>

<{$mz->say()->eat()}> <br>

<{$arr1['hello'][0]}> <br>
<{$arr1['hello'][1]}> <br>
<{$arr1['hello'][2]}> <br>

<{*  如果是使用数组中的关联数组， 可以和PHP的访问方式相同， 但建议使用Smarty中的格式 $arrname.key   *}>

<{$arr1.hello[0]}> <br>
<{$arr1.hello[1]}> <br>
<{$arr1.hello[2]}> <br>
