
<{$start=0}>
<{$end=15}>

<{for $var=$start to $end step 3 max=5 }>
	<{$var}> <br>
<{forelse}>
	条件不成功，没有循环<br>
<{/for}>


----------------------<br>
<{$var=0}>
<{while $var lt 10}>
    <{if $var++%2==0}>
        <label style="color: red"><{$var}></label><br>
        <{else}>
         <label style="color: green"><{$var}></label><br>
    <{/if}>
<{/while}>


