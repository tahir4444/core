<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');


/**
 * Inserted (copied and modified) by Markus Lippert - lang function without the $id parameter for faster access
 */

function l($line)
{
	$CI =& get_instance();
	$line = $CI->lang->line($line);
	
	$args = func_get_args();
	
	if(is_array($args))
	{
		array_shift($args); // remove first argument (the line)
	}
	
	if(is_array($args) && count($args))
	{
		foreach($args as $arg)
		{
			$line = preg_replace('/\{(.*)\}/', '%s', $line); // allowes to use variables like: {foo}
			$line = str_replace_first('%s', $arg, $line);
		}
	}
	
	return $line;
} 

function lang($line, $id = '')
{
	$CI =& get_instance();
	$line = $CI->lang->line($line);
	
	$args = func_get_args();
	
	if(is_array($args))
	{
		if(count($args) > 1)
		{
			for($i = 0; $i < 2; $i++)
			{
				array_shift($args);
			}
		}
		else
		{
			array_shift($args);
		}
	}
	
	if(is_array($args) && count($args))
	{
		foreach($args as $arg)
		{
			$line = preg_replace('/\{(.*)\}/', '%s', $line); // added by Markus Lippert - allowes to use variables like: {foo}
			$line = str_replace_first('%s', $arg, $line);
		}
	}

	if (!empty($id))
	{
		$line = '<label for="'.$id.'">'.$line."</label>";
	}
	
	return $line;
}

function str_replace_first($search_for, $replace_with, $in)
{
	$pos = strpos($in, $search_for);
	if($pos === false)
	{
		return $in;
	}
	else
	{
		return substr($in, 0, $pos) . $replace_with . substr($in, $pos + strlen($search_for), strlen($in));
	}
}

function get_lang()
{
	$CI =& get_instance();
	return $CI->lang->lang();
}

/* End of file MY_language_helper.php */
/* Location: ./application/helpers/MY_language_helper */ 