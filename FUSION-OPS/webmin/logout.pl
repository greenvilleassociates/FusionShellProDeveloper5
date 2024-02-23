#!/usr/bin/perl
open(CONF, "</gweb/webmin/miniserv.conf") || die "Failed to open /gweb/webmin/miniserv.conf : $!";
while(<CONF>) {
        $root = $1 if (/^root=(.*)/);
        }
close(CONF);
$root || die "No root= line found in /gweb/webmin/miniserv.conf";
$ENV{'PERLLIB'} = "$root";
$ENV{'WEBMIN_CONFIG'} = "/gweb/webmin";
$ENV{'WEBMIN_VAR'} = "/var/webmin";
delete($ENV{'MINISERV_CONFIG'});
chdir("$root");
exec("$root/record-logout.pl", @ARGV) || die "Failed to run $root/record-logout.pl : $!";
