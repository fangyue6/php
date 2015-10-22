<{include 'header.tpl'}>

	<table border="1" align="center" width="800">
		<{ loop $users $user }>
			<tr>	
				<{loop $user $u }>
					
						<{if $u == "nv" }>
							<td bgcolor="green">
						<{elseif $u=="nan"}>
							<td bgcolor="red">
						<{else}>
							<td>
						<{/if}>
						<{$u}>
					</td>

				<{/loop}>
			</tr>
		<{/loop}>
	</table>

<{include 'footer.tpl'}>
