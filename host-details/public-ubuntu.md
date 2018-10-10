# Box Name
_When filling out this writeup, remember the ideal is to be able to post these
publicly following the competition as official writeups for each of the KoTH
boxes!  Also, the more we document here now, the less time we'll need to spend
answering questions later._

## Host Details
**Type** - Pubicly-facing  
**OS** - Ubuntu 16.04
**Services**
- Apache with Shell in a Box
- PHP

## Vulnerabilities
_Feel free to add/remove entries as needed._

### Apache Uses HTTP, not HTTPS
#### Details
Shell in a Box transmits all of your shell data through HTTP/HTTPS. This
includes login credetials. The Shell in a Box documentation specifically says
that it should only ever be run using HTTP; however, this server is set up to
serve Shell in a Box over HTTP only.

#### Exploitation
_Walk through how to exploit this vulnerability._

#### Post-Exploitation
_Once this vulnerability has been exploited, what can you do with it?  What
access do you have to the host?_

### Weak credentials
#### Details
There are two users that have public_html directories: james and david. James's
page makes it clear that he is a huge star wars fan, and his password is
`starwars`. David's page makes it clear that he has a cat named midnight, and
his password is `midnight`.

#### Exploitation
_Walk through how to exploit this vulnerability._

#### Post-Exploitation
_Once this vulnerability has been exploited, what can you do with it?  What
access do you have to the host?_

### Command Injection via Kittysay
#### Details
David has a Kittysay generator on his homepage. This generator page is a PHP
script that calls `cowsay -f kitty`.

#### Exploitation
When the PHP script calls `cowsay`, it does not sanitize the arguments that are
passed to it. Thus command injection is possible by passing it input like
`Hello; cat /etc/passwd`.

#### Post-Exploitation
This vulnerablilitiy allows for arbitrary remote code execution in the context
of the php user.

