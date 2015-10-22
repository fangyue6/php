<{$var}> <br>

<{$var|capitalize:true}>  &nbsp<label style="color: red">capitalize首字母大写</label><br>

<{$var|upper}> &nbsp<label style="color: red">upper全部大写</label><br>

<{$var|cat:"PHPStudy PHPStudy!<br>"|cat:"hello world"}> &nbsp<label style="color: red">cat连接字符串</label><br>

<{$var|count_words}> &nbsp<label style="color: blue">count_words统计单词书</label><br>

<{$smarty.now}> &nbsp<label style="color: blue">日期  时间戳 now</label><br>

<{$smarty.now|date_format:"%Y-%m-%d %H:%M:%S"}>&nbsp<label style="color: blue">日期  时间戳now--->格式化date_format</label><br>

<{$var2|default:"数据库中没有数据!"}> &nbsp<label style="color: blue">默认值</label><br>

<{$var|regex_replace:"/\d/":"#"}> &nbsp<label style="color: blue">正则表达式regex_replace替换</label><br>

<{$var|spacify:"@"}> &nbsp<label style="color: blue">用字符隔开spacify</label><br>

<{$var|truncate:33:"...":true}><br>

<{$var3|truncate:10}><br>
