# Rotadilav
Just an validator, made for fun.

    composer require hakim/rotadilav

Requires PHP 7.1 or higher.

Example of use:

```php
    $login = 'Username';
    $password = '321password123';
        
    $validator = new Rotadilav([
        $login => new Rules(
            new Required(),
            new MaxLength(18)
        ),
        $password => new Rules(
            new Required(),
            new MaxLength(32)
        )
    ]);

    $validator->validate();
```