FROM nginx:1.19.2-alpine

MAINTAINER Yongtae Kim <kimytsc@gmail.com>

###########################################################################
# Set Timezone
###########################################################################

ARG TZ=UTC
ENV TZ ${TZ}

RUN apk add --no-cache tzdata && \
	ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && \
	echo $TZ > /etc/timezone

#
#--------------------------------------------------------------------------
# Final Touch
#--------------------------------------------------------------------------
#

RUN ln -sf /dev/stdout /var/log/nginx/access.log && \
	ln -sf /dev/stderr /var/log/nginx/error.log
