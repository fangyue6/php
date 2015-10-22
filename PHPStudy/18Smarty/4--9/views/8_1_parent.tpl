<html>
	<head>
		<title><{block name="one"}>this is a title<{/block}></title>
	</head>

	<body>
		<{block name="two"}>this is a content ....<{/block}> 

		<br>

		<{block name="three"}> test <{/block}> <br>

		<{block name="four"}> hello <{/block}> <br>

		<{block name="five"}>  demo123 <{/block}> <br>

		<{block name="six"}> abc <{$smarty.block.child}>  xyz <{/block}>
	</body>
</html>
