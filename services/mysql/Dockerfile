FROM mysql:8.0.21

MAINTAINER Yongtae Kim <kimytsc@gmail.com>

###########################################################################
# Set Timezone
###########################################################################

ARG TZ=UTC
ENV TZ ${TZ}

RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && \
	echo $TZ > /etc/timezone

#
#--------------------------------------------------------------------------
# Final Touch
#--------------------------------------------------------------------------
#
# docker run --name mysql -p 53306:3306 -e MYSQL_ROOT_PASSWORD=admin20200911 -d mysql:8.0.21