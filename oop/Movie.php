<?php

// The name of the class is not case-sensitive and can contain letters, numbers, or underscores.
// Whenever possible, we should declare class members as private if code outside the class does not need to access them
class Movie
{
//class members - properties (variables) and methods (functions)
    private $id; // private class members can only be accessed inside the class in which they are declared.
    public $title; // public class members can be assessed everywhere
    public $rentalPrice;
    const DISCOUNT = 10;
    protected $myVar; // protected members can be accessed inside the class in which they are declared and any subclass that inherits from that class

    // magic methods start with two underscores __, they have special functionalities
    public function __construct($pId, $pTitle,
                                $pRentalPrice)
    {
        // We use the $this keyword only when accessing class properties and methods.
        $this->id = $pId;
        $this->title = $pTitle;
        $this->rentalPrice = $pRentalPrice;
    }

    // access modifiers are mandatory for properties but optional for methods
    public function conversion($country): float
    {
        $rate = 1;
        switch ($country) {
            case 'UK':
                $rate = 0.76;
                break;
            case 'Japan':
                $rate = 110;
                break;
        }
        return round($rate * $this->rentalPrice, 2);
    }

    public function displayHeading($tag): string
    {
        if (substr($this->id, 0, 1) == 'N')
            return "<$tag>Movies</$tag>";
        else
            return "<$tag>Award Winning Movies</$tag>";
    }

    // get/set magic methods that provide limited and controlled access to private and protected properties.
    public function __get($propertyRequested)
    {
        if ($propertyRequested == 'id')
            return 'You do not have permission to access id.<BR>';
        else
            return $this->$propertyRequested;
    }

    public function __set($propertyToModify, $value)
    {
        if ($propertyToModify == 'rentalPrice' && $value > $this->rentalPrice)
            $this->rentalPrice = $value;
        else
            echo 'Failed to modify ' . $propertyToModify . '<BR>';
    }

    // returns a string containing information about the Movie class
    public function __toString()
    {
        return
            'Discount = ' . self::DISCOUNT . '%' . // self used to access the DISCOUNT constant defined in the class
            '<BR>Id = ' . $this->id .
            '<BR>Title = ' . $this->title .
            '<BR>Rental Price (USD) = ' . $this->rentalPrice;
    }
}

// creating an object
$mov1 = new Movie('N0001', 'Lusso', 4.99);
$mov2 = new Movie('P0002', 'Junior', 5.99);
// use the object name and the -> operator to access its properties and methods
echo $mov1->title . '<BR>';
echo $mov1->displayHeading('H1');
echo $mov1->conversion('Japan') . '<BR>';
// the __set() method prevented us from modifying the $id property
$mov1->id = 'A12387';
// the __get() method prevented us from accessing the $id property
echo $mov1->id;
$mov1->rentalPrice = 5.99;
echo $mov1->rentalPrice . '<BR><BR>';
echo $mov1 . '<BR><BR>';
// accessing constant with ::
// class constants are different from class properties; they are allocated once per class, not once for each object
echo Movie::DISCOUNT . '<BR>';
echo $mov1::DISCOUNT . '<BR>';
echo $mov2::DISCOUNT . '<BR>';
