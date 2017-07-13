# Rotadilav
Just an validator, made for fun.

Example of use:

```php
        $login = 'Username';

        $validator = new Rotadilav([
            $login => new Rules(
                new Required(),
                new MaxLength(18)
            )
        ]);

        $validator->validate();
```