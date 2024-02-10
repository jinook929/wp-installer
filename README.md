# How to Install WP with This Installer
- add your local domain url to `/private/etc/hosts` file
```
127.0.0.1	your.local.domain
```
- add your virtual host info to `/Applications/MAMP/conf/apache/extra/httpd-vhosts.conf` file
```conf
<VirtualHost *:80>
  DocumentRoot "/path/to/your/index.file"
  ServerName your.local.domain
  ErrorLog "logs/your-error_log"
  CustomLog "logs/your-access_log" common
</VirtualHost>
```
- edit `wp-config.php`:
```php
// Edit these 3 lines
//...
define( 'DB_NAME', 'wp_db' ); // <== your actual db name
//...
define('WP_HOME', 'http://your.local.domain/'); // <= your actual local server route
define('WP_SITEURL', 'http://your.local.domain/wp'); // <= don't forget the /wp!!!
//...
```
- run `composer update`
- add your theme and activate it (no theme included in this installer)
- activate the plugins you want to use

[ Optional ]
- create `Homepage`
- set `Reading Settings` to "A static page"
- set `Permalink Settings` to "Post name"
