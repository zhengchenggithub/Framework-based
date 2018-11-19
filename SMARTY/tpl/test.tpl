{* {$articletitle|capitalize}<br />*}
{* {$articletitle|cat:" is good":" yes"}<br />*}
{*  *}{*$arr.title*}
{*  *}{*$arr.author*}
{* {$arr['articlecontent']['title']|nl2br}*}
{* {$arr['articlecontent']['author']|nl2br}*}
{* {$time|date_format:"%H:%M:%S"}<br />*}
 {*{"Y-m-d"|date:$time}<br />*}
{* {$articletitle1|default:"没有"}<br />*}
{* {$url|escape:"url"}<br />*}
{* {$zhengcheng|nl2br}*}
{*{if $score gt 90}*}
{*优秀*}
{*{else if $score gt 60}*}
{*及格*}
{*{else}*}
{*不及格*}
{*{/if}*}
{*{section name = article loop=$articlelist}*}
        {*{$articlelist[article].title}*}
        {*{$articlelist[article].author}*}
        {*{$articlelist[article].content}*}
    {*<br />*}
{*{/section}*}
{*{foreach item=article from=$articlelist}*}
{*{foreach $articlelist as $article}*}
        {*{$article.title}*}
        {*{$article.author}*}
        {*{$article.content}*}
    {*<br />*}
    {*{foreachelse} *}{*当数组中没有数据时用foreachelse来表示没有内容*}
    {*当前没有文章*}
{*{/foreach}*}
{*{include file="hello.tpl"}*}
{*{$myobj -> methl(array("苹果","熟了"))}*}
{*{$str}*}
{*{'d'|str_replace:'c':$str}*}
{f_test p1='zheng' p2='cheng' name='zhengcheng'}