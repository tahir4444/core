{extends file="layout.tpl"} 


{block name="title" prepend}
	{l('title')}
{/block}

{block name="body"}

	{l('welcome', '"YourName"')} <br />
	<br />
	{$test} <br />
	<br />
	{l('elapsed_time')}: {$this->benchmark->elapsed_time()}

{/block}