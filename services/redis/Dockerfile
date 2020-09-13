FROM redis:6.0.8-alpine3.12

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
