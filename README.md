![WordPress Theme Boilerplate](teaser.png)

# WordPress Theme

- [About](#about)
- [Features](#features)
- [How to use](#how-to-use)

<br>

---

[![Quality Gate Status](https://sonarcloud.io/api/project_badges/measure?project=Codeconut-Ltd_WordPress-Theme-Boilerplate&metric=alert_status)](https://sonarcloud.io/dashboard?id=Codeconut-Ltd_WordPress-Theme-Boilerplate)
![Maintenance](https://img.shields.io/static/v1?label=maintained&message=unregular&color=inactive)

<br><br>

## About

Generic and theme-independent child theme. It's a development-focused boilerplate with minimalist and modern code style. Does not contain any actual content or styling.

**Intended for developers – Not end users**

<br><br>

## Features

- Load child theme CSS styles
- Support loading debugging code for DEV environments (placeholder)
- Clean and modern OOP style

<br><br>

## How to use

Copy the folder content in your WordPress installation.

### Config

1. Set parent theme name and replace 'XXX' placeholders:
   - `/wp-content/themes/codeconut-generic/style.css`
2. Adjust the constant definitions as needed:
   - `/wp-content/themes/codeconut-generic/functions.php`
3. Optional: Implement custom development-mode solution (e.g. debugging tools):
   - `/wp-content/themes/codeconut-generic/init-dev.php`
