<?php
/*  元字符： 不能在正则表达式中单独使用， 用来修饰原子的。 
 * 
 *   * 用来修饰其前面的原子可以出现0个1个或多个 (任意次)  {0,}
 *
 *   + 用来修饰其前面的原子可以出现1次或多次， 不能没有至少要出现在次 {1,}
 *
 *   ? 用来修饰其前面的原子可以出现0次或1次 {0,1}
 *
 *   {m}  m = 3 用来修饰其前面原子只能出现 m次， 多一次和少一次都不可以
 *   {n,m} {2.2,5} 用来修饰其前面的原子出现个数在n到m之间，包括n和m
 *   {n,} {2.2,} 用业修饰其前面的原子可以出现至少次
 *   {,m} {,5}   不行， 可以以0开始
 *
 *   | 是或的关系， 表示它两边的原子，只要有一个出现就可以, 但是， ｜优先级是最低的， 
 *
 *   ^ 或 \A 表示必须以什么开始, 这个必须写正则表达式的最前面
 *   $ 或 \Z 表示必须以什么结束， 这个必须写正则表达式的最后面
 *
 *
 *   \b 单词边界
 *   \B 不是单词边界
 *   	
 *
 *   . 
 *   []
 *
 */

$str = "this is island";

$reg = "/\Bis\b/";


if(preg_match_all($reg, $str, $arr)) {
    echo "正则 <b>{$reg}</b>, 和字符串<b>{$str}</b>匹配成功<br>";
    print_r($arr);
} else {
    echo "匹配失败!<br>";
}
