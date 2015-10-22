

<{function name="demo" a=11 b=22 c=33}>

    <{$four=400}>
    <{$one}>###################<{$a}><br>
    <{$two}>###################<{$b}><br>
    <{$three}>###################<{$c}><br>
    <{$four}>###################<br>


    <{if $a eq 11111}>
    @@@@@@@@@@@@@@@@@@
    <{/if}>
    <{/function}>

<{demo one=100 two=200 three=300 a=11111 b=2222}>

<br>
<{demo one="aaa" two="bb" three="cccc"}>


