#!/bin/bash

. mount.sh

rsync --partial --stats --progress --no-perms /kvm/images/$1.qcow2 /backup/*/$1.qcow2 --temp-dir=/tmp/
