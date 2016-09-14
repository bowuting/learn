#!/bin/zsh
while :; do git add * >> push.log;git commit -m "同步">> push.log;git push >> push.log;sleep 3;done
