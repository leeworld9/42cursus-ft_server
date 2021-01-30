FROM debian:buster

RUN apt-get -y update && apt-get -y install net-tools \
					vim \
					mariadb-server \
					nginx \
					php7.3 \
					php7.3-cli \
					php7.3-cgi \
					php7.3-mbstring \
					php7.3-fpm \
					php7.3-mysql \
					libnss3-tools

COPY ./srcs /root/

WORKDIR /root

EXPOSE 80 443

ENTRYPOINT ["bash", "entrypoint_command.sh"]
