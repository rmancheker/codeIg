<?php
if ( ! function_exists('script_tag'))
{
	function script_tag($path)
	{

		$fpath = base_url().$path;
		return "<script src='".$fpath."' ></script>";
	}
}

if ( ! function_exists('pre'))
{
	function pre($path)
	{
		echo "<pre>";
		print_r($path);
		echo "</pre>";
	}
}

if ( ! function_exists('css'))
{
	function css()
	{

		$result = directory_map("./assets/css/");

		// pre($result);
		if(is_array($result)):
			foreach($result as $val):
				echo link_tag("assets/css/".$val);
			endforeach;	
		endif;	
	}
}

if ( ! function_exists('js'))
{
	function js()
	{

		$result = directory_map("./assets/js/");

		// pre($result);
		if(is_array($result)):
			foreach($result as $val):
				echo "<script src=".base_url()."assets/js/".$val."></script>";
			endforeach;	
		endif;	
	}
}

?>