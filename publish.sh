#! /usr/bin/env bash

rsync --exclude="publish.sh" --exclude=".git" -vzcrSLh ./ styde:/var/www/html/deploy_demo
