#!/bin/bash

git add *;
echo "Commit: "
read commit
git status
git commit -m commit
git push

