# Kirby Roles

**Version 0.2**

A checkboxes field for Kirby CMS which lets you select roles. All roles are shown by default. You can exclude roles from the options.

## Installation

1. Add `roles` field folder into `/site/roles/`

## Setup

### Blueprint

Below is the most basic example.

```md
fields:
  roles:
    label: Roles
    type: roles
```

### Default

If you want the selected role to be `admin` you can set a default value.

```md
fields:
  roles:
    label: Roles
    default: admin
    type: roles
```


### Exclude roles

If you want to hide a role you can simply exclude it.

```md
fields:
  roles:
    label: Roles
    type: roles
    exclude:
      admin
```

You also can exclude multiple roles.

```md
fields:
  roles:
    label: Roles
    type: roles
    exclude:
      admin
      clients
```

### Columns

Specifying the column option lets you change the number of option items that are displayed per row in the panel (1 till 5, default: 2).

```md
fields:
  roles:
    label: Roles
    type: roles
    columns: 3
```

# Changelog

## 0.2

- Removed excluding of the admin role.
- Added option for excluding roles.
- Added option for default selected user role.

## 0.1

- Initial release

## Authors

Author: Roy Lodder <http://roylodder.com>
