# Run Vagrant Box
1. Run <code>git clone https://github.com/robertke/lamp.git</code>
2. <code>cd lamp/</code>
3. <code>vagrant up</code>
4. <code>vagrant ssh</code>
5. <code>cd /var/www/html/lamp.dev</code>
6. <code>composer update</code>
7. Change document root from /var/www/html/lamp.dev to /var/www/html/lamp.dev/web)
8. Check lamp.dev/ on browser

Run tests with CLI

1. <code>cd /var/www/html/lamp.dev</code>
2. <code>phpunit</code>

Run tests with PhpStorm IDE

1. Open PhpStorm IDE
2. PhpStorm->Preferences->Languages & Frameworks->PHP and on the right "Add +"
3. Add new Iterpreter, choose Vagrant as Remote option
4. On Vagrant Instance Folder: write path to Vagrantfile location (f.g <code>/Application/Development/lamp</code>)
5. PhpStorm->Preferences->Languages & Frameworks->PHP->PHPUnit on the right "Add +"
6. PHPUnit Library "Use custom autoloader", write path to autoloader.php (f.g <code>/var/www/html/lamp.dev/vendor/autoload.php</code>)
7. Run phpunit.xml.dist file



