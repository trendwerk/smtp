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
 * Version: 1.0.1
 */

class TP_SMTP
{
    function __construct()
    {
        if (defined('TP_SMTP') && true === TP_SMTP) {
            add_action('phpmailer_init', array( $this, 'smtp' ));
        }
    }

    /**
     * Send e-mail via SMTP
     */
    function smtp($mailer)
    {
        if (! is_email(TP_SMTP_FROM) || ! defined('TP_SMTP_HOST')) {
            return;
        }

        $mailer->Mailer = 'smtp';
        $mailer->From = TP_SMTP_FROM;
        $mailer->FromName = TP_SMTP_FROM_NAME;

        $mailer->Sender = $mailer->From;
        $mailer->AddReplyTo($mailer->From, $mailer->FromName);

        $mailer->Host = TP_SMTP_HOST;
        $mailer->SMTPSecure = TP_SMTP_SECURE;
        $mailer->Port = TP_SMTP_PORT;

        $mailer->SMTPAuth = TP_SMTP_AUTH;
        if ($mailer->SMTPAuth) {
            $mailer->Username = TP_SMTP_USERNAME;
            $mailer->Password = TP_SMTP_PASSWORD;
        }
    }
} new TP_SMTP;
