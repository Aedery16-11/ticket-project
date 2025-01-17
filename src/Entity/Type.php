<?php

namespace App\Entity;

enum Type: string
{
    case APPLICATION = "Application";
     case MESSAGING = "Messaging";
    case DATABASE = "Database";
    case NETWORK = "Network";
    case SERVER= "Server";
    case STORAGE = "Storage";
    case SECURITY = "Security";
    case OTHER = "Other";
}
