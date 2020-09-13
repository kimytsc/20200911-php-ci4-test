FROM adminer:4.7.7-standalone

MAINTAINER Yongtae Kim <kimytsc@gmail.com>

###########################################################################
# Set Timezone
###########################################################################

USER root

ARG TZ=UTC
ENV TZ ${TZ}

RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && \
	echo $TZ > /etc/timezone

#
#--------------------------------------------------------------------------
# Final Touch
#--------------------------------------------------------------------------
#

USER adminer
