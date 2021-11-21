#!/bin/bash
git add .
git commit -m 'sss'
git push origin main
echo "BACKUP DATE:" $(date +"%Y-%m-%d %H:%M:%S")
echo "git add . && git commit -m 'sss' && git push origin main"
