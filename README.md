# Chuck Norris Jokes

[![Build Status](https://travis-ci.org/pawelmysior/chuck-norris-jokes.svg?branch=master)](https://travis-ci.org/pawelmysior/chuck-norris-jokes)
[![StyleCI](https://github.styleci.io/repos/178536075/shield?branch=master)](https://github.styleci.io/repos/178536075)

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
