# PHP Package Skeleton

[![Tests](https://github.com/your-username/your-repo-name/actions/workflows/tests.yml/badge.svg)](https://github.com/relaxtortoise/php-package-skeleton/actions/workflows/tests.yml)
[![codecov](https://codecov.io/gh/relaxtortoise/php-package-skeleton/graph/badge.svg?token=eNH7RLki8I)](https://codecov.io/gh/relaxtortoise/php-package-skeleton)


This is a skeleton repository for PHP packages. Use this as a starting point for your new PHP package.

## Features

- PHPUnit setup for testing
- PHP CS Fixer for code style
- PHPStan for static analysis
- GitHub Actions for CI
- Composer scripts for common tasks
- EditorConfig for consistent coding style
- Git attributes and ignore files

## Usage

1. Create a new repository using this template.
2. Clone your new repository.
3. Run `composer install` to install dependencies.
4. Update `composer.json` with your package details.
5. Rename the namespace in `src` and `tests` directories.
6. Update this README with your package documentation.
7. Start coding!

## Checklist

After using this template, make sure to:

- [ ] Update package name in `composer.json`
- [ ] Update package description in `composer.json`
- [ ] Update author information in `composer.json`
- [ ] Update namespace in `composer.json`, `src/`, and `tests/`
- [ ] Update this README with your package documentation
- [ ] Update LICENSE file with your name and year
- [ ] Remove this checklist from README

## Testing

```bash
composer test
```

## Code Style

```bash
composer cs-fix
```

## Static Analysis

```bash
composer analyse
```


## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.