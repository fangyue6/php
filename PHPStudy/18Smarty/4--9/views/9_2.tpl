<html>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<table border="1" width="800" align="center">
	<caption><h1>用户表(<{nocache}><{$time}><{/nocache}>)</h1></caption>

	<tr>
		<th>index</th>
		<th>iteration</th>
		<th>ID</th> 
		<th>NAME</th> 
		<th>AGE</th> 
		<th>SEX</th> 
		<th>EMAIL</th> 
	</tr>

	<{section name="u" loop=$users}>
	
		<{if $smarty.section.u.first}>
			<tr bgcolor="red">
		<{elseif $smarty.section.u.last}>
			<tr bgcolor="blue">
		<{elseif $smarty.section.u.iteration is even}>
			<tr bgcolor="green">
		<{else}>
			<tr>
		<{/if}>
	
			<td><{$smarty.section.u.index}></td>
			<td><{$smarty.section.u.iteration}></td>
			<td><{$users[u].id}></td>
			<td><{$users[u].name}></td>
			<td><{$users[u].age}></td>
			<td><{$users[u].sex}></td>
			<td><{$users[u].email}></td>
		</tr>
	<{sectionelse}>
		数组为空或不存在
	<{/section}>

	<tr>
		<td colspan="7" align="right"><{$fpage}></td>
	</tr>
</table>
</html>
