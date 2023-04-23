<?php
namespace App\Models;  /* indicates that the class belongs to the App\Models namespace. This means that the class can be referred to using its fully qualified
namespace (\App\Models\ClassName)
This is a convention used in Laravel to group related model classes together
and avoid naming conflicts with other classes that may be defined in other namespaces. */

class Listing {

    public static function all()

    {

       return [
        [
            'id' => 1,
            'title' => 'Listing One',
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit
            . Aliquam quidem animi, sed delectus eligendi
            temporibus et, fuga error possimus saepe rerum nemo,
            voluptates perspiciatis distinctio! Voluptas
            porro accusantium harum. Dignissimos!'
        ],
        [
            'id' => 2,
            'title' => 'Listing Two',
            'description' => 'Lorem ipsum dolor sit amet consectetur, adipisicing elit
            . Aliquam quidem animi, sed delectus eligendi
            temporibus et, fuga error possimus saepe rerum nemo,
            voluptates perspiciatis distinctio! Voluptas
            porro accusantium harum. Dignissimos!'
        ]
        ];
    }


    public static function find($id)
    {
        $listings = self::all(); //self is often used to access static properties and methods of the current class

        foreach($listings as $listing)
        {
            if ($listing['id'] == $id)  {
                return $listing;
            }
        }
    }
}





?>
