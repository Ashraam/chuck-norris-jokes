<?php

namespace Ashraam\ChuckNorrisJokes\Tests;

use PHPUnit\Framework\TestCase;
use Ashraam\ChuckNorrisJokes\JokeFactory;

class JokeFactoryTest extends TestCase
{
    /** @test */
    public function it_can_overwrite_jokes()
    {
        $jokes = new JokeFactory([
            'This is a joke'
        ]);
        $joke = $jokes->getRandomJoke();

        $this->assertSame('This is a joke', $joke);
    }

    /** @test */
    public function it_returns_a_predefined_joke()
    {
        $jokes = new JokeFactory;
        $joke = $jokes->getRandomJoke();

        $this->assertContains($joke, $jokes->allJokes());
    }
}
