<html>
<head>
    <title>{block name="title"} - markyy{/block}</title>
</head>
<body>

<nav>
	{foreach $this->config->item('supported_languages') as $code=>$langs}
		{if $this->lang->lang() != $code}<li>{anchor($this->lang->switch_uri($code), $langs.name)}</li>{/if}
	{/foreach}
</nav><br />
<br />
{block name="body"}{/block}
</body>
</html>