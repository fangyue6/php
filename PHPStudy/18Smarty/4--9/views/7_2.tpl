<{$var}> <br>

<{assign var="one" value="hello world"}> <br>



<{$one}> <br>
<{$one}> <br>
<{$one}> <br>
<{$one}> <br>


<{assign "two" "this is a demo"}>

<{$two}> <br>

<{$three="aaaaaaaaaaaa"}>

<{$three}> <br>

<{$four[]=1}>
<{$four[]=2}>

<{$four[0]}> <br>
<{$four[1]}> <br>

<{$four.aa.bb=10}>
<{$four.aa.bb}> <br>

<{append var="four" value="55555555" index="cc"}> <br>

<{$four.cc}> <br>

<{$five=$four[1]+10}><br>
<{$five}> <br>

<{++$five}><br>
<{$five++}><br>
<{$five++}><br>
<{$five++}><br>
<{$five++}><br>

