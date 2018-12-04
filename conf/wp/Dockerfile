FROM wordpress:latest

RUN apt-get update && \
        apt-get install -y  --no-install-recommends ssl-cert libapache2-mod-security2 libapache2-mod-qos git && \
        rm -r /var/lib/apt/lists/* && \
        a2enmod ssl && \
        a2ensite default-ssl

COPY ./modsecurity.conf /etc/modsecurity/modsecurity.conf
COPY ./security2.conf /etc/apache2/mods-enabled/security2.conf
#COPY ./seg.conf /etc/apache2/mods-enabled/security2.conf
COPY ./owasp-modsecurity-crs/crs-setup.conf /usr/share/modsecurity-crs/crs-setup.conf
COPY ./owasp-modsecurity-crs /usr/share/modsecurity-crs

RUN apt-get autoremove git -y
RUN /etc/init.d/apache2 restart

EXPOSE 80
EXPOSE 443
