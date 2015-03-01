# Roles field for Kirby 2

A simple checkbox field for Kirby CMS which lets you select user roles. All the roles are shown except the admin role. You can use this for frontend authentication by role.

## Installation

### Download
[Download the files](https://github.com/roylodder/kirby-roles-field/archive/master.zip) and put them in a folder named `roles`, inside the`site/fields` folder. If the fields folder doesn't exist, create it.

### With Git
If you are familiar with Git, you can clone this repository from Github inside the `/site/fields` folder.

    git clone https://github.com/roylodder/kirby-roles-field.git roles

Or you can use it as a Git Submodule.

    git submodule add  https://github.com/roylodder/kirby-roles-field.git site/fields/roles

## How to use it

In your [blueprint](http://getkirby.com/docs/panel/blueprints) add the following field:

    fields:
      roles:
        label: Roles
        type: roles

## Authors

Author: Roy Lodder <http://roylodder.com>