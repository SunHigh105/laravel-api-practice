<?php

namespace App\Models;

use Illuminate\Support\Facades\Date;
use OpenApi\Attributes as OA;

#[OA\Schema()]
class User
{
    private int $id;

    /** @var string $name */
    #[OA\Property(
        type: 'string',
        description: 'user name',
        example: 'ダミー 太郎'
    )]
    private string $name;

    private Date $birthday;

    private int $phoneNumber;

    public function __construct(
        int $id,
        string $name,
        Date $birthday,
        int $phoneNumber
    )
    {
        
    }
}
