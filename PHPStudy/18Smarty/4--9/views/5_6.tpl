<{$var}> <br>
<{$var|mystyle}><br>
<{$var|mystyle:7:"red"}> <br>


<{html_select_date start_year="1980" end_year="2020"}>

<br>
<pre>
<{textformat wrap="80" indent="4"}>
 is a block function used to format text. It basically cleans up
spaces and special characters, and formats paragraphs by wrapping
at a boundary and indenting lines.
You can set the parameters explicitly, or use a preset
style. Currently “email” is the only available style.
<{/textformat}>

</pre>

<{html_table loop=$data}>

<{html_table loop=$data cols=4 table_attr='border="0"'}>

<br>

<{html_table loop=$data cols="first,second,third,fourth" tr_attr=$tr}>


