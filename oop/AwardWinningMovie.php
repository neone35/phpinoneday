<?php

include "Movie.php";
// extends keyword indicates that AwardWinningMovie is a child class of Movie
// inherits all the public and protected members of the parent class
class AwardWinningMovie extends Movie
{
    private $award;

    public function __construct($pId, $pTitle, $pRentalPrice, $pAward)
    {
        // parent keyword is used to call the parent class constructor
        // can only initialize private properties using the parent class constructor, which is a public method
        parent::__construct($pId, $pTitle, $pRentalPrice);
        $this->award = $pAward;
    }

    public function recommend($country): string
    {
        switch ($this->award) {
            case 'Best Picture':
                $others = 'The Rail';
                break;
            case 'Best Actor':
                $others = '1729';
                break;
            default:
                $others = 'And so it begins';
        }
        return
            'You might also like:<BR>' . '<BR>Movie Title = ' . $others . '<BR>Rental Price = '
            // inherited method from Movie.class
            . $this->conversion($country);
    }

    // overriding
    public function displayHeading($tag): string
    {
        $baseMsg = parent::displayHeading($tag);
        return $baseMsg . $this->award;
    }
}