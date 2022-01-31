<?php
namespace App\Repositories;

use App\Models\Link;

class LinkRepository extends AppRepository
{
    public function __construct(Link $model)
    {
        parent::__construct($model);
    }
}
