<?php

namespace PawelMysior\ChuckNorrisJokes\Tests;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Psr7\Response;
use PHPUnit\Framework\TestCase;
use PawelMysior\ChuckNorrisJokes\JokeFactory;

class JokeFactoryTest extends TestCase
{
    /** @test */
    public function it_returns_a_random_joke()
    {
        $client = $this->getTestClient('{ "type": "success", "value": { "id": 201, "joke": "Chuck Norris was what Willis was talkin\' about.", "categories": [] } }');

        $jokes = new JokeFactory($client);

        $joke = $jokes->getRandomJoke();

        $this->assertSame('Chuck Norris was what Willis was talkin\' about.', $joke);
    }

    protected function getTestClient(string $responseBody)
    {
        return new Client([
            'handler' => HandlerStack::create(new MockHandler([
                new Response(200, [], $responseBody),
            ]))
        ]);
    }
}
