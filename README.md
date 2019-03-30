# Chuck Norris Jokes

Create chuck norris jokes in your next PHP project.

## Installation

You can install the package via composer:

```bash
composer require pawelmysior/chuck-norris-jokes
```

## Usage

```php
use PawelMysior\ChuckNorrisJokes\JokeFactory;

$jokes = new JokeFactory();

$joke = $jokes->getRandomJoke();
```

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
