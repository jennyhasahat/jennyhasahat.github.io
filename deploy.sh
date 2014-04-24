#!/bin/bash
DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"
cd $DIR

sftp -b /dev/stdin jenny-owen.co.uk@91.223.16.177 <<EOF
put -r * site/
bye
EOF
