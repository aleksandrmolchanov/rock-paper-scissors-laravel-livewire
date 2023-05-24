<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Game extends Component
{
    public const ROCK = 'Rock';
    public const PAPER = 'Paper';
    public const SCISSORS = 'Scissors';

    private const BEATS = [
        self::ROCK => self::SCISSORS,
        self::PAPER => self::ROCK,
        self::SCISSORS => self::PAPER
    ];

    public const WIN = 'win';
    public const LOSS = 'loss';
    public const DRAW = 'draw';

    public ?string $userChoice;
    public ?string $opponentChoice;
    public ?string $userResult;
    public bool $gameEnded = false;

    public function mount()
    {

    }

    public function choose($choice)
    {
        $this->userChoice = $choice;
        $this->opponentChoice = $this->getRandomChoice();
        $this->userResult = $this->getUserResult();
        $this->gameEnded = true;
    }

    public function render()
    {
        return view('livewire.game');
    }

    private function getRandomChoice(): string
    {
        $indexRandom = random_int(0, 2);
        return [self::ROCK, self::PAPER, self::SCISSORS][$indexRandom];
    }

    private function getUserResult()
    {
        if($this->userChoice === $this->opponentChoice)
        {
            return self::DRAW;
        }
        return self::BEATS[$this->userChoice] === $this->opponentChoice ? self::WIN : self::LOSS;
    }
}
