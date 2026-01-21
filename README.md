# Tag Bundle

This Contao module gives you a Tags content element for other modules to use

## Requirements

- Contao 5.0+
- PHP 8.1+

## Install

```BASH
$ composer require guave/tag-bundle
```

## Usage

Tell the Tags Bundle which modules to add it to in your `contao/config.php`

```PHP
$GLOBALS['TL_TAGS']['modules'] = ['tl_showcase', 'tl_team'];
```
