<?php
namespace Block;
/**
 * Tidio - Main Class
 * 
 * Tidio Live Chat is a live chat service which allows you to communicate with your customers easily, also with the help of chatbots. It is designed specifically for the schlix CMS. Once you install the extension, you will be ready to take full advantage of the benefits our service provides
 * 
 * @copyright 2019 calip
 *
 * @license MIT
 *
 * @package tidio
 * @version 1.0
 * @author  Alip <asalip.putra@gmail.com>
 * @link    https://github.com/calip/tidio
 */
class Tidio extends \SCHLIX\cmsBlock
{
	public function Run()
	{
    global $__tidio_loaded;
		if ($__tidio_loaded !== 'loaded') // prevent the built-in duplicate blocks feature 
		{
      $public_key = $this->config['str_public_key'];
      
			$__tidio_loaded = 'loaded';
			$this->loadTemplateFile('view.block',compact(array_keys(get_defined_vars())));
		}
  }
}
