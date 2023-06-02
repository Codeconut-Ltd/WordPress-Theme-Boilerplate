![WordPress Theme Boilerplate](teaser.png)

# WordPress Theme Boilerplate

- [About](#about)
- [Features](#features)
- [How to use](#how-to-use)

<br>

---

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
