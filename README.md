# Minteck's Space
> Not compatible with Nginx!
## Getting `/admin` to work
* `/admin` works only on Ubuntu or Ubuntu-based systems. Ubuntu Core systems *may* work but hasn't been tested
### `sudo` file
Edit the sudoers file:
```text
$ sudo visudo
```

And add the following lines:
```text
www-data ALL=(ALL:ALL) NOPASSWD: /usr/bin/mtsp-apt-get-1
www-data ALL=(ALL:ALL) NOPASSWD: /usr/bin/mtsp-apt-get-2
www-data ALL=(ALL:ALL) NOPASSWD: /usr/bin/mtsp-do-release-upgrade
www-data ALL=(ALL:ALL) NOPASSWD: /usr/bin/lshw
```

(replacing `www-data` by the name of the user that runs your Web server)

You will need to :
* create a `/usr/bin/mtsp-apt-get-1` file that does `apt-get update`
* create a `/usr/bin/mtsp-apt-get-2` file that does `apt-get upgrade -s`
* create a `/usr/bin/mtsp-do-release-upgrade` file that does `do-release-upgrade -c`

And make sure to have the `x` permission bit so we can run these files!

### Groups
Add your server user (usually `www-data`) to the following groups:
* `syslog` (required to write /var/log)
* `adm` (required to read /var/log)

### Dependencies
Install the following packages:
* `lm-sensors`

To install them all at once, do:
```text
$ pkcon install lm-sensors
```