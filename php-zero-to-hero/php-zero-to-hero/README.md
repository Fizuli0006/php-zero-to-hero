# PHP Zero to Hero

A practical, bilingual (English/Azerbaijani) learning path for modern PHP development, from first principles to secure database-backed applications.

> **Status:** Learning resource in active development. The course targets PHP 8.4+ and PHP 8.5-compatible code. Examples use modern PHP features where appropriate and avoid framework-specific assumptions.

## What you'll learn

- PHP syntax, types, control flow, arrays, and functions
- Forms, request data, validation, sessions, and cookies
- File handling, exceptions, and object-oriented programming
- MySQL with PDO, prepared statements, and CRUD
- Authentication fundamentals and web security
- How to build and test a small PHP application

## Requirements

- PHP 8.4 or newer (PHP 8.5 compatible)
- A code editor
- A terminal
- For database chapters: MySQL 8+ or a compatible MariaDB version
- Composer is optional in the early chapters and introduced later

Check your installation:

```bash
php -v
php -m
```

Run a lesson:

```bash
php lessons/01-introduction/examples/hello.php
```

Run the local development server from the repository root:

```bash
php -S localhost:8000 -t projects/hello-web
```

Then open `http://localhost:8000`.

## Course map

| # | Module | Topics |
|---|---|---|
| 01 | Introduction | PHP, runtime, first script |
| 02 | Syntax | PHP tags, statements, comments |
| 03 | Variables and constants | Variables, scope, constants |
| 04 | Data types | Scalars, arrays, null, type declarations |
| 05 | Operators | Arithmetic, comparison, logical, null coalescing |
| 06 | Conditions | if, elseif, match |
| 07 | Loops | for, while, foreach |
| 08 | Arrays | Indexed, associative, multidimensional arrays |
| 09 | Functions | Parameters, return types, closures |
| 10 | Forms | GET, POST, validation, escaping |
| 11 | Superglobals | Request, server, environment |
| 12 | Sessions and cookies | Session lifecycle and cookie basics |
| 13 | File handling | Read, write, upload safety |
| 14 | OOP | Classes, objects, inheritance, interfaces |
| 15 | Error handling | Exceptions, errors, logging |
| 16 | MySQL fundamentals | Schema, connection concepts |
| 17 | PDO | Prepared statements and safe queries |
| 18 | CRUD | Create, read, update, delete |
| 19 | Authentication | Password hashing, login flow, sessions |
| 20 | Security | Output escaping, CSRF, SQL injection, configuration |

## Repository structure

```text
php-zero-to-hero/
├── README.md
├── README.az.md
├── LICENSE
├── CONTRIBUTING.md
├── CODE_OF_CONDUCT.md
├── CHANGELOG.md
├── SECURITY.md
├── docs/
│   ├── en/ROADMAP.md
│   └── az/ROADMAP.md
├── lessons/
│   ├── 01-introduction/
│   └── ... (20 modules)
├── exercises/
├── solutions/
├── projects/
│   ├── hello-web/
│   └── student-management/
├── .github/
│   ├── ISSUE_TEMPLATE/
│   └── workflows/php-lint.yml
└── .gitignore
```

## Learning method

1. Read the module notes.
2. Run every example yourself.
3. Complete the exercises without looking at the solutions.
4. Compare your approach with the sample solution.
5. Change the examples and explain what changed.
6. Build the projects at the end of the course.

## Language

- English: `README.md` and module `README.md` files.
- Azerbaijani: `README.az.md` and module `README.az.md` files.

The code is shared between both languages to avoid duplicated implementations.

## Contributing

See [CONTRIBUTING.md](CONTRIBUTING.md). Beginner-friendly corrections, translations, examples, and exercises are welcome.

## License

MIT. See [LICENSE](LICENSE).

## Disclaimer

This repository is educational. Security examples are starting points, not a substitute for a full security review before production deployment.
