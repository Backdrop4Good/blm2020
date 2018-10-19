BLM 2020
--------
Black Lives Matter Memphis is building a Memphis where Black people thrive and live full lives. We are
working together to make our BLM 2020 Vision a reality. We will build Black
political power by organizing around transformative policies; creating and
implementing programs that heal and restore our community; and dismantling
anti-Black institutions, systems, and societal norms. We affirm and celebrate
all Black lives, all of the ways in which we exist, and all of our various
identities.

Dev Setup
---------

Clone this repository:

```bash
git clone git@github.com:Backdrop4Good/blm2020.git
cd blm2020
```
Add in a settings.php to the web directory. The file that points to the config (which is outside of the web directory).

```
wget https://github.com/backdrop/backdrop/raw/1.x/settings.php
```

Replace the config pointer lines with these:

```
$config_directories['active'] = '../config/active';
$config_directories['staging'] = '../config/staging';
```

Starting the BLM 2020 App
-------------------------

BLM 2020 uses [Lando](https://docs.devwithlando.io) to manage the dev stack and dependencies. If you don't have Lando installed click the link to install it on your computer. Once you have Lando start the app:

```bash
lando start
```

Once the the app has been started, install Backdrop using the installer at http://blm2020.lndo.site. Then import the Backdrop Configuration:

```bash
lando drush bcim
```

You may need to flush the caches.

Theming
-------

BLM 2020 uses gulp and sass to manage the css.

Compile CSS files from SCSS files:

```bash
lando gulp
```

Watch the files for changes:

```bash
lando gulp watch
```

Tooling
-------

Lando includes drush to help you work with Backdrop. To use drush you will want to be in the `BACKDROP_ROOT` which is `web` for this project.

Using drush:

```bash
cd web
lando drush cc all
```

Configuration Management Workflow
---------------------------------

BLM 2020 is using the versioned staging approach to Configuration Management. The `config/staging` directory is versioned and committed to the `git` repository. The `config/active` directory is `.gitignore`d.

Workflow:  
* All config changes are made on your local dev environment  
* IMPORTANT: make sure to import configuration before you start to do any work.  If you do not, you could wipe out other's confguration work when you export config.  You can import configuraton here:  /admin/config/development/configuration  or use this command:

```bash
lando drush bcim
```

* Once you are satisfied with your changes export them

```bash
lando drush bcex
```

* Commit the changes and push up

```bash
git push github ISSUENUMBER-feature-branch
```

* File a Pull Request (PR) against the `test` branch on GitHub
