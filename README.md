# Install - Local server
## Required
- docker
- docker-compose
## Commands
- docker-compose build
- docker-compose up -d
- docker run -d --name nginx nginx:1.19.2-alpine sh -c "tail -f /dev/null"
## Host
- www.local.host
- adminer.local.host

# Stop - Local server
## Commands
- docker-compose down
