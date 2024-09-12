<?php

namespace App\Entity;

use Symfony\Bundle\MakerBundle\Str;

//l'enum est une classe qui permet de ne donner que ses 4 valeurs là
enum Status: String  //le type de l'enum
{
    case NEW = "New";
    case IN_PROGRESS = "In progress";
    case RESOLVED = "Resolved";
    case REJECTED = "Rejected";
}
