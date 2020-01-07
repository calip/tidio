<?php
/**
 * Tidio - Main page view template. Lists both categories and items with parent_id = 0 and category_id = 0 
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
if (!defined('SCHLIX_VERSION')) die('No Access');
?>
<?php if ($public_key): ?>
    <!--Start of Tidio Script-->
    <script src="//code.tidio.co/<?= ___h($public_key) ?>.js" async></script>
    <!--End of Tidio Script-->
<?php else: ?>
    <!-- NOTE - Tidio Public Key was not set up correctly - please add Public Key -->
    <script>console.error("Public Key has not been set from configuration");</script>
<?php endif ?>