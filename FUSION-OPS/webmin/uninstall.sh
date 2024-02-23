#!/bin/sh
printf "Are you sure you want to uninstall Webmin? (y/n) : "
read answer
printf "\n"
if [ "$answer" = "y" ]; then
	/gweb/webmin/stop
	echo "Running uninstall scripts .."
	(cd "/opt/webmin/webmin-1.981" ; WEBMIN_CONFIG=/gweb/webmin WEBMIN_VAR=/var/webmin LANG= "/opt/webmin/webmin-1.981/run-uninstalls.pl")
	echo "Deleting /opt/webmin/webmin-1.981 .."
	rm -rf "/opt/webmin/webmin-1.981"
	echo "Deleting /gweb/webmin .."
	rm -rf "/gweb/webmin"
	echo "Done!"
fi
