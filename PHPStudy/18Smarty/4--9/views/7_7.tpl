<table border="1" width="800" align="center">
    <{foreach $users as $user}>
        <{if $user@first}>
        <tr bgcolor="red">
            <{elseif $user@last}>
        <tr bgcolor="blue">
            <{elseif $user@index is even}>
        <tr bgcolor="green">
            <{else}>
        <tr>
        <{/if}>

        <{foreach $user as $col}>
        <td><{$col}></td>
        <{/foreach}>
        </tr>
        <{foreachelse}>
        没有用户查询出来!

    <{/foreach}>
</table>
