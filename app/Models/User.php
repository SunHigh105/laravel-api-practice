<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Date;
use OpenApi\Attributes as OA;

#[OA\Schema()]
class User extends Model
{
    use HasFactory;

    protected $table = 'users';

    // private int $id;

    // /** @var string $name */
    // private string $name;

    // private Date $birthday;

    // private int $phoneNumber;

    // public function __construct(
    //     int $id,
    //     string $name,
    //     Date $birthday,
    //     int $phoneNumber
    // )
    // {
        
    // }
}
