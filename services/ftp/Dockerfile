# https://hub.docker.com/r/stilliard/pure-ftpd/
# https://github.com/stilliard/docker-pure-ftpd

FROM stilliard/pure-ftpd:hardened

MAINTAINER Yongtae Kim <kimytsc@gmail.com>

# Set Environment Variables
ENV DEBIAN_FRONTEND noninteractive

###########################################################################
# Set Timezone
###########################################################################

ARG TZ=UTC
ENV TZ ${TZ}

RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

#
#--------------------------------------------------------------------------
# Final Touch
#--------------------------------------------------------------------------
#
