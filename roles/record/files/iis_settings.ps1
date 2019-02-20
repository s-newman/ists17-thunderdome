$ConfigSection = Get-IISConfigSection -SectionPath "system.webServer/fastCgi"
$cgiCollection = Get-IISConfigCollection -ConfigElement $ConfigSection
New-IISConfigCollectionElement -ConfigCollection $cgiCollection -ConfigAttribute @{"fullPath" = "C:\PHP\php-cgi.exe"}
$PoolSection = Get-IISConfigSection -SectionPath "system.applicationHost/applicationPools"
$Child = Get-IISConfigElement -ConfigElement $PoolSection -ChildElementName "applicationPoolDefaults"
$processModel = Get-IISConfigElement -ConfigElement $Child -ChildElementName "processModel"
Set-IISConfigAttributeValue -ConfigElement $processModel -AttributeName "identityType" -AttributeValue "LocalSystem"