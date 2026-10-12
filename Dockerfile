FROM php:8.3-apache

RUN apt-get update && apt-get install -y --no-install-recommends msmtp msmtp-mta \
    && rm -rf /var/lib/apt/lists/* \
    && a2enmod rewrite \
    && sed -i 's#AllowOverride None#AllowOverride All#g' /etc/apache2/apache2.conf

# mail() de PHP passe par msmtp, qui envoie vers Mailpit
COPY msmtprc /etc/msmtprc
RUN chmod 644 /etc/msmtprc \
    && echo 'sendmail_path = "/usr/bin/msmtp -t"' > /usr/local/etc/php/conf.d/mail.ini

RUN cp "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini"