$ConfigSection = Get-IISConfigSection -SectionPath "system.webServer/fastCgi"
$cgiCollection = Get-IISConfigCollection -ConfigElement $ConfigSection
New-IISConfigCollectionElement -ConfigCollection $cgiCollection -ConfigAttribute @{"fullPath" = "C:\PHP\php-cgi.exe"}