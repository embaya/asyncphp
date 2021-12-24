#!/usr/bin/env bash

docker build ./ -t asyncphp
docker run -p 8080:8080  -t asyncphp
