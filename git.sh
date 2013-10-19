#!/bin/bash

git add *;
clear
git status
echo "Commit: "
read commit
git commit -m "$commit"
git push

