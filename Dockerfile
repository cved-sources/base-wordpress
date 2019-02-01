FROM cved/base-lamp

LABEL author="cved (cved@protonmail.com)"
LABEL maintainer="cved (cved@protonmail.com)"

ENV LANG C.UTF-8
ENV LANGUAGE C.UTF-8
ENV LC_ALL C.UTF-8

COPY build/.htaccess /tmp/
COPY build/wordpress/wordpress-5.0.3.tar.gz /tmp/
COPY build/wordpress/wp-config.php /tmp/
COPY build/wordpress/wp-cli.phar /tmp/
COPY build/wordpress/db.sql /

RUN ln -s /etc/apache2/mods-available/rewrite.load /etc/apache2/mods-enabled/ \
    && rm -rf /var/www/html/* \
    && tar --strip-components=1 -zxf /tmp/wordpress-5.0.3.tar.gz -C /var/www/html \
    && mv -f /tmp/wp-config.php /var/www/html/ \
    && mv -f /tmp/.htaccess /var/www/html/ \
    && mv -f /tmp/wp-cli.phar /usr/bin/wp \
    && chown -R www-data:www-data /var/www/html/ \
    && rm -f /tmp/*

COPY build/main.sh /

EXPOSE 80

CMD ["/main.sh"]
