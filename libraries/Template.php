<?php
include "Html_generator.php";
class Template extends Html_generator
{


	public function Load($file)
	{
		if(!file_exists($file))
		{
			echo $file . " does not exist";
			return false;
		}

		include $file;
	}



}