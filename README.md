# Simple Factory Pattern Demo

This project was written as a demo application for an Envato Tuts+ Series on using [Design Patterns in WordPress](http://wp.tutsplus.com/tutorials/creative-coding/design-patterns-in-wordpress-an-introduction/).

This project is *not* an official WordPress plugin, theme, or application and is not meant to be run within the context of the WordPress application.

It's meant to provide a working example of the Simple Factory design pattern.

## File Contents

* `demo.php` is the driver that is meant to be the entry-point of the application. It sets everything into motion.
* `images` contains a sketch of the Simple Factory Pattern diagram for this demo
* `lib` contains the core files for the application
* `lib/plugin.php` represents the core plugin file or, more specifically, how you would incorporate the Simple Factory into a WordPress plugin.
* `lib/simple-factory.php` is the Simple Factory class itself that relies on a base class, its subclasses, and input to return the proper element
* `lib/users/user.php` the abstract base class representing all users
* `lib/users/admin.php` the subclass representing an Administrator with `read-write` privileges
* `lib/users/reader.php` the subclass representing a Reader with `read` privileges
* `lib/users/volunteer.php` the subclass representing a Volunteer with `help` privileges* 

## Installation

1. Download a copy of the [latest tag](https://github.com/tommcfarlin/simple-factory-example/archive/master.zip) from GitHub
2. Extract the contents to a directory of your choice
3. Run the `demo.php` script from the command-line to see the script in action

## Author and License

* [Tom McFarlin](http://tommcfarlin.com)
* [MIT License](http://opensource.org/licenses/MIT)

## Changelog

### 1.0.0 (11 May 2013)

* Initial release