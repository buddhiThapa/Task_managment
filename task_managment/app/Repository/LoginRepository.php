<?php
namespace App\Repository;

use Prettus\Repository\Eloquent\BaseRepository;
use App\Models\User;

class LoginRepository extends BaseRepository {

    /**
     * Specify Model class name
     *
     * @return string
     */
    function model()
    {
        return User::class;
    }

    
}