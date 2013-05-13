# Web Development Basics workshop

## Big Lessons

* Protect yourself from disasters; protect yourself from yourself
* Make everything undo-able
* If it's not tracked in History (version control, Issues, email, etc.), *it didn't happen*

![Automate all the things](http://cdn.memegenerator.net/instances/400x/34643410.jpg)

## Pre-work

* Install editor
	* recommended: [Sublime Text](http://www.sublimetext.com/)
    * others: [TextMate](http://macromates.com/), [Coda](http://www.panic.com/coda/), [TextWrangler](http://www.barebones.com/products/textwrangler/), [BBEdit](http://www.barebones.com/products/bbedit/), ...
* Install [MAMP](http://www.mamp.info/) (you don't need "Pro")
* Install [Cyberduck](http://cyberduck.ch/) (use download link on right)

### Git

* Go through [Try Git](http://try.github.io/)
* Sign up for [Github](https://github.com/)
	* one per person
    * team account ([Account settings](https://github.com/settings/profile) -> [Organizations](https://github.com/settings/organizations) -> [Create new organization](https://github.com/account/organizations/new)), and add individuals ([help](https://help.github.com/categories/2/articles))
* Install GitHub app ([Mac](http://mac.github.com/) or [Windows](http://windows.github.com/))

## Local Development

* Why?
* [Aidan's GoDaddy->local setup guide](https://gist.github.com/afeld/5003570)
* [disable modifying Wordpress & plugins on live site](https://codex.wordpress.org/Editing_wp-config.php#Disable_Plugin_and_Theme_Update_and_Installation)
* [starter `wp-config.php`](https://github.com/afeld/web_dev_basics/blob/master/wp-config.php)

## Wordpress Backups

* Why?
* [Wordpress Codex guide](http://codex.wordpress.org/WordPress_Backups)
* [Services](http://www.stateofsearch.com/top-6-wordpress-backup-plugin-recommendations-for-2013/)

## Exercise

* Local Wordpress setup
    * MAMP
    * [Download Wordpress](http://wordpress.org/download/)
    * [Installing WordPress Locally on Your Mac With MAMP](http://codex.wordpress.org/Installing_WordPress_Locally_on_Your_Mac_With_MAMP)
* Git setup
    * "Add Local Repository", and select the Wordpress folder
    * "Initial commit"
    * Push up to Github
* Change the template
    * Inspect via Chrome or Firefox
    * Change template
    * Commit changes
* Create post
    * Check for the diff
    * Look in phpMyAdmin
* Fire drill
    * Make sure all changes are committed and pushed
    * Dump database to SQL file
    * Delete database
    * Delete Wordpress folder
    * Restore!
* Deployment via FTP

## Resources

### Learning

* [Code School](http://www.codeschool.com/) (particularly [Git](http://www.codeschool.com/courses/git-real) and [DevTools](http://www.codeschool.com/courses/discover-devtools))
* [Head First](http://headfirstlabs.com/) book series
* [How the Heck Do I Use GitHub?](http://lifehacker.com/5983680/how-the-heck-do-i-use-github)
* [Teach Yourself to Code](http://teachyourselftocode.com/)
* [Thoughtbot's Trail Maps](https://learn.thoughtbot.com/trails)

### Tools

* [git-ftp](https://github.com/git-ftp/git-ftp#readme)
* [Go2Shell](https://itunes.apple.com/us/app/go2shell/id445770608?mt=12)

## License

<a rel="license" href="http://creativecommons.org/licenses/by/3.0/deed.en_US"><img alt="Creative Commons License" style="border-width:0" src="http://i.creativecommons.org/l/by/3.0/88x31.png" /></a><br /><span xmlns:dct="http://purl.org/dc/terms/" href="http://purl.org/dc/dcmitype/Text" property="dct:title" rel="dct:type">Web Development Basics Workshop</span> by <a xmlns:cc="http://creativecommons.org/ns#" href="https://github.com/afeld/web_dev_basics" property="cc:attributionName" rel="cc:attributionURL">Aidan Feldman</a> is licensed under a <a rel="license" href="http://creativecommons.org/licenses/by/3.0/deed.en_US">Creative Commons Attribution 3.0 Unported License</a>.
