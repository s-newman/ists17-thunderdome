# Box Name
_When filling out this writeup, remember the ideal is to be able to post these
publicly following the competition as official writeups for each of the KoTH
boxes!  Also, the more we document here now, the less time we'll need to spend
answering questions later._

## Host Details
**Type** - Pubicly-facing  
**OS** - Centos 7
**Services**
- rlogin

## Vulnerabilities
_Feel free to add/remove entries as needed._

### Rlogin Allows Passwordless Logins from Anywhere
#### Details
The /etc/hosts.equiv file is configured to allow rsh/rlogin login from any host
without a password.

#### Exploitation
Run the command `rlogin -l <user> <IP>`, substituting any valid remote user
name (including root) in for `<user>` and the target machine's IP address in
for `<IP>`.

#### Post-Exploitation
This vulnerability allows for anyone to log in as any user on the system and
obtain a shell.

### Vuln B
#### Details
_What is the vulnerability?  Does it have a CVE or other related vulnerability
number?   Has it been patched?  What software versions does it apply to?_

#### Exploitation
_Walk through how to exploit this vulnerability._

#### Post-Exploitation
_Once this vulnerability has been exploited, what can you do with it?  What
access do you have to the host?_
