<?php

namespace App\Entity;

enum Priority:String //les priorités renvoient toujours une string
{
    case LOW = "Low";
    case MEDIUM = "Medium";
    case HIGH = "High";
    case CRITICAL = "Critical";
}
