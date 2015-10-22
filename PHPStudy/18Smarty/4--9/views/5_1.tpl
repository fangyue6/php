<{$var}> <br>
--------------------------------------<br><br>
<{strtoupper($var)}> &nbsp调用php函数 <label style="color: red;">全变大写</label><br>
<{substr(ucwords($var), 20)}> <br>

--------------------------------------<br><br>
<{*
<{$var|函数名:参数2:参数3:参数4}> <br>

*}>
<{$var|upper}> &nbsp 就像标签一样调用smarty函数 <label style="color: green;">全变大写</label><br>
<{$var|upper|truncate:30}> <br>
