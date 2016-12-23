<?php
namespace Trendwerk\Smtp;

final class Smtp
{
    public function init()
    {
        if (defined('TP_SMTP') && true === TP_SMTP) {
            add_action('phpmailer_init', array($this, 'setMailer'));
        }
    }

    /**
     * Send e-mail via SMTP
     */
    public function setMailer($mailer)
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
}
