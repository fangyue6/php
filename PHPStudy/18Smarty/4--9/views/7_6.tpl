
<{$arr['os']}> <br>

<{foreach name="one" from=$arr item="value" key="k"}>

    <{if $smarty.foreach.one.first}>
    这是第一次:

    <{/if}>


    <{if $smarty.foreach.one.last}>
    这是最后一次:

    <{/if}>


    <{$smarty.foreach.one.iteration}>==><{$k}>=><{$value}> <br>


    <{foreachelse}>
    数组为空或数组不存在!
    <{/foreach}>


循环总数:<{$smarty.foreach.one.total}> <br>

