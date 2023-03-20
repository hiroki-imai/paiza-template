#!/bin/bash

input=${3:-input.txt}

cat $1/$2/$input | docker exec -i app php $1/$2/answer.php
