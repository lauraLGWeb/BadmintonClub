<?php

namespace App\Enum;

enum UserRole: string
{
    //visitor : no role 
    
    case MEMBER = 'ROLE_MEMBER';
    /*
     * View club information and schedules
     * Access the club shop
     * Purchase shuttlecocks and t-shirts
     * Online payment or in-person payment
     * View training schedules
     */

    case TRAINER = 'ROLE_TRAINER';
    /*
     * All ROLE_MEMBER privileges
     * Access training session schedules
     * View registered participants for each session
     * Send emails to participants
     */

    case ADMIN = 'ROLE_ADMIN';
    /*
     * All previous privileges
     * Member management
     * Training session management
     * Registration management
     * Product and stock management
     * News management
     * Full CRUD access to all entities
     */
}
