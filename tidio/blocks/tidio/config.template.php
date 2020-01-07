<?php
/**
 * Tidio - Config
 * 
 * Tidio Live Chat is a live chat service which allows you to communicate with your customers easily, also with the help of chatbots. It is designed specifically for the schlix CMS. Once you install the extension, you will be ready to take full advantage of the benefits our service provides
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
if (!defined('SCHLIX_VERSION'))
    die('No Access');
?>
<h4><?= ___('Tidio Settings') ?></h4>
<p><?= ___('Get your Tidio Public Key here: <a href="https://www.tidio.com/panel/settings/developer" target="_blank">Tidio Panel</a>.') ?></p>
<schlix-config:textbox config-key='str_public_key' label='<?= ___('Public Key') ?>' class='form-control' required='required'/>