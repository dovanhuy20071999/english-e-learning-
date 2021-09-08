<?php

namespace App\Repository\Result;

use App\Models\Result;
use App\Repository\BaseRepository;
use Carbon\Carbon;

class ResultRepository extends BaseRepository implements ResultRepositoryInterface
{
    public function __construct(Result $result)
    {
        parent::__construct($result);
    }

}
