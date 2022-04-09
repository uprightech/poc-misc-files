# Miscleanous Files and Instructions For The PoC 

This repository contains miscelleaneous files used for our PoC 
Currently, it contains the following files:

- `token.properties` and `request_id.properties`. These are custom 
   attribute translation property files which should be copied to the 
   Shibboleth IDP in the `/opt/shibboleth-idp/conf/attributes/custom` directory 
   and ownership set to `jetty` user and group.
   
- `idp_script.py`. This is the IDP custom script , which should be added in Gluu oxTrust
   in the section `Configuration > Other Custom Scripts` under the tab `Idp Extension`.
   Also, add a custom property to the script called `api_url` and give it the value of the 
   dummy API.
   
- `index.php`. This is a simple php app which needs to be hosted. It relies on simplesamlphp
   so , install that too (refer to their product page for instructions).
   
Note:
 The SAML IDP Initiated link in oxtrust (branch `4.3.1-poc`) can be changed in the file 
 `server/src/main/webapp/WEB-INF/incl/layout/leftmenu.xhtml`
