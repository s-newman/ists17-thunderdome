# Box Name
_When filling out this writeup, remember the ideal is to be able to post these
publicly following the competition as official writeups for each of the KoTH
boxes!  Also, the more we document here now, the less time we'll need to spend
answering questions later._

## Host Details
**Type** - Cloud  
**OS** - Ubuntu 14.04
**Services**
- Wordpress
- Apache
- MySQL

## Vulnerabilities
_Feel free to add/remove entries as needed._

### Vulnerable C Program
#### Details
There is a C program that is SUID to a somewhat privileged user. The source
code is included for this program. The program can be exploited to gain code
execution.

The somewhat privileged user has read access to the sudoers file. Upon reading
the sudoers file, it is revelaed that he can also run ed as root. He can the
escelate his privileges through ed.

#### Exploitation
_Walk through how to exploit this vulnerability._

#### Post-Exploitation
_Once this vulnerability has been exploited, what can you do with it?  What
access do you have to the host?_

### CVE-2018-17087 on File Containing Root Credentials
#### Details
_What is the vulnerability?  Does it have a CVE or other related vulnerability
number?   Has it been patched?  What software versions does it apply to?_

#### Exploitation
_Walk through how to exploit this vulnerability._

#### Post-Exploitation
_Once this vulnerability has been exploited, what can you do with it?  What
access do you have to the host?_

## Attack Chains

### Robots.txt to wp-admin
1. The robots.txt file has a disallowed URL. That page has the Wordpress
credentials.
2. Log into the Wordpress admin panel.
3. Have fun (i.e. upload a shell theme)!

### CVE-2018-1000382
1. Exploit CVE-2018-1000382 to get the MySQL credentials for the wordpress user.
2. Log into MySQL (remote login is enabled) and obtain shell.

