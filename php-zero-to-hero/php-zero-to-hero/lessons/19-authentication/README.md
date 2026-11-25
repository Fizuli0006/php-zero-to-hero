# Authentication

Registration, password hashing, password verification, login/logout, and session rotation.

## Key concepts

Never store plaintext passwords. Use password_hash() and password_verify(). Regenerate the session ID after a successful login and implement CSRF protection for state-changing forms.

## Example

Run the example from the repository root:

```bash
php lessons/19-authentication/examples/example.php
```

## Practice

See [`../../exercises/README.md`](../../exercises/README.md) for the exercise set. Write your own solution before checking the sample solutions.

## Further study

- Read the official PHP manual for the functions and language features used here.
- Change the example and predict the output before running it.
- Explain the code in your own words.
