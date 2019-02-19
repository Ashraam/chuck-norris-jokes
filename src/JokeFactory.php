<?php

namespace Ashraam\ChuckNorrisJokes;

class JokeFactory
{
    protected $jokes = [
        "Chuck Norris peut faire des ronds avec une equerre",
        "Chuck Norris peut écrire un traitement de texte avec la souris.",
        "Peter Parker a été mordu par une araignée, Clark Kent a été mordu par Chuck Norris",
        "Chuck Norris peut dire Schwarzkopf en verlan.",
        "Chuck Norris a déjà tabassé l homme invisible parce qu il lui gâchait la vue"
    ];

    public function __construct(array $jokes = null)
    {
        if ($jokes) {
            $this->jokes = $jokes;
        }
    }

    public function getRandomJoke()
    {
        return $this->jokes[array_rand($this->jokes)];
    }

    public function allJokes()
    {
        return $this->jokes;
    }
}
