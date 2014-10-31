SMTP
====

Send mail through SMTP. Made for WordPress.

### Setup
These settings can be used to setup e-mail through SMTP. They should be defined in `wp-config.php`.

`TP_SMTP`

If set to `true`, will try to use SMTP.

`TP_SMTP_FROM`

The 'from' e-mailaddress which will be sent from (will not always be recognized).

`TP_SMTP_FROM_NAME`

The 'from' name which the e-mail will be sent from.

`TP_SMTP_HOST`

The hostname of the SMTP server. Example: `smtp.gmail.com`.

`TP_SMTP_SECURE`

Type of security that will be used. Example: tls.

`TP_SMTP_PORT`

The port which will be sent through. Example: 587.

`TP_SMTP_AUTH`

Whether to use authentication or not. Can either be `true` or `false`.

`TP_SMTP_USERNAME`

The username to authenticate with.

`TP_SMTP_PASSWORD`

The password to authenticate with.
