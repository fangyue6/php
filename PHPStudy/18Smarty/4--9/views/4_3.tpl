<{config_load file="4_2_sns.conf" section="three"}>


<{$smarty.get.username}> <br>

<{$smarty.session.hello}> <br>
<br>

<{date("Y-m-d",$smarty.now)}> <br>

<{$smarty.const.ROOT}> <br>

<{$smarty.const.__FILE__}> <br>

<br>
<{$smarty.template}>
<{$smarty.current_dir}> <br>

<{$smarty.version}>

<br>
<{*  this is demo  *}>
<body bgcolor="<{$smarty.config.bg}>" text="<{$smarty.config.color}>">
<table border="<{#border#}>" width="<{#width#}>">
    <tr bgcolor="<{#bgcolor#}>" >
        <td>dddddd</td>
        <td>dddddd</td>
        <td>dddddd</td>
        <td>dddddd</td>
        <td>dddddd</td>
    </tr>

    <tr bgcolor="" >
        <td>dddddd</td>
        <td>dddddd</td>
        <td>dddddd</td>
        <td>dddddd</td>
        <td>dddddd</td>
    </tr>

    <tr bgcolor="<{#bgcolor#}>" >
        <td>dddddd</td>
        <td>dddddd</td>
        <td>dddddd</td>
        <td>dddddd</td>
        <td>dddddd</td>
    </tr>

    <tr bgcolor="" >
        <td>dddddd</td>
        <td>dddddd</td>
        <td>dddddd</td>
        <td>dddddd</td>
        <td>dddddd</td>
    </tr>
</table>
</body>

<br>

<{#aa#}><br>
<{#bb#}><br>
<{#cc#}><br>
<{#dd#}><br>
<{#ee#}><br>
<{#ff#}><br>
