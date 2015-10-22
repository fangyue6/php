<{$var}> <br>
<{$var|capitalize:true}><br>
<{$var|upper}> <br>
<{$var|cat:"PHPStudy PHPStudy!<br>"|cat:"hello world"}> <br>
<{$var|count_words}> <br>

<{$smarty.now}> <br>
<{$smarty.now|date_format:"%Y-%m-%d %H:%M:%S"}><br>

<{$var2|default:"数据库中没有数据!"}> <br>
<{$var|regex_replace:"/\d/":"#"}> <br>
<{$var|spacify:"@"}><br>
<{$var|truncate:33:"...":true}><br>
<{$var3|truncate:10}><br>

<{$var|mystyle:7}> <br>
<{$var|mystyle:7:"blue"}> <br>
<{$var|myucword|mystyle:7:"red"}> <br>
<{$var|zzreplace:'/\d/':"#"}> <br>
