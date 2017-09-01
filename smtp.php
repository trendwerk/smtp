<?php
/**
 * Plugin Name: SMTP
 * Description: Send mail through SMTP.
 *
 * Plugin URI: https://github.com/trendwerk/smtp
 *
 * Author: Trendwerk
 * Author URI: https://github.com/trendwerk
 *
 * Version: 1.0.2
 */

namespace Trendwerk\Smtp;

include_once('lib/autoload.php');

$smtp = new Smtp();
$smtp->init();
