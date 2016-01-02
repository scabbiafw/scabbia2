# Scabbia2 Standard Package

**Scabbia2** is an open source PHP framework project which is currently on planning stage. Keep visiting [project homepage](https://github.com/eserozvataf/scabbia2) and [repositories](https://github.com/eserozvataf/) for further updates.

[This repository](https://github.com/eserozvataf/scabbia2) contains the standard package for the framework and its dependencies. It is designed to helps you to jump-start developing projects with the Scabbia2 without setting up a configuration from scratch.

[![Build Status](https://travis-ci.org/eserozvataf/scabbia2.png?branch=master)](https://travis-ci.org/eserozvataf/scabbia2)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/eserozvataf/scabbia2/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/eserozvataf/scabbia2/?branch=master)
[![Total Downloads](https://poser.pugx.org/eserozvataf/scabbia2/downloads.png)](https://packagist.org/packages/eserozvataf/scabbia2)
[![Latest Stable Version](https://poser.pugx.org/eserozvataf/scabbia2/v/stable)](https://packagist.org/packages/eserozvataf/scabbia2)
[![Latest Unstable Version](https://poser.pugx.org/eserozvataf/scabbia2/v/unstable)](https://packagist.org/packages/eserozvataf/scabbia2)
[![Documentation Status](https://readthedocs.org/projects/scabbia2-documentation/badge/?version=latest)](https://readthedocs.org/projects/scabbia2-documentation)


## Installation
Please make sure that you can access php command line tool via `php` command. Further commands will be executed on Terminal or Command Prompt:

**Step 1:**
Download and install composer dependency manager.

``` bash
php -r "readfile('https://getcomposer.org/installer');" | php
```

**Step 2:**
Create a new scabbia2 project under the directory named `project`.

``` bash
php composer.phar create-project eserozvataf/scabbia2:dev-master project
```

**Step 3:**
Make `project/var` directory writable.

``` bash
cd project
chmod 0777 -R var
```


## Requirements
* PHP 5.6.0+ (http://www.php.net/)
* Composer Dependency Manager (http://getcomposer.org/)


## Links
- [Documentation](https://readthedocs.org/projects/scabbia2-documentation)
- [Twitter](https://twitter.com/eserozvataf)
- [Contributor List](contributors.md)
- [License Information](LICENSE)


## Contributing
It is publicly open for any contribution. Bugfixes, new features and extra modules are welcome. All contributions should be filed on the [eserozvataf/scabbia2](https://github.com/eserozvataf/scabbia2) repository.

* To contribute to code: Fork the repo, push your changes to your fork, and submit a pull request.
* To report a bug: If something does not work, please report it using GitHub issues.
* To support: [![Donate](https://www.paypalobjects.com/en_US/i/btn/btn_donate_LG.gif)](https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=BXNMWG56V6LYS)
