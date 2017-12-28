mkdir -p /backup

export OS_USERNAME=""
export OS_PASSWORD=""
export OS_TENANT_NAME=""
export OS_TENANT_ID=""
export OS_REGION_NAME="GRA3"

sudo mount -t svfs -o username=$OS_USERNAME,password=$OS_PASSWORD,tenant=$OS_TENANT_NAME,region=$OS_REGION_NAME pcs /backup
clear
echo "Mount Done"
sleep 3
