#Default container nginx
FROM nginx

#Llave TLS 1.2
COPY ./certs/ /etc/nginx/ssl

#Elimina default conf file y carpeta
RUN rm /etc/nginx/conf.d/default.conf && rm -r /etc/nginx/conf.d

#Añade conf file
ADD nginx.conf /etc/nginx/nginx.conf

#Mantener en ejecución
RUN echo "daemon off;" >> /etc/nginx/nginx.conf
CMD service nginx start
