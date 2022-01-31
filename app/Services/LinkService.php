<?php
namespace App\Services;

use App\Http\Resources\LinkResource;
use App\Repositories\LinkRepository;

class LinkService extends AppService
{
    public function __construct(LinkRepository $repository)
    {
        parent::__construct($repository, LinkResource::class);
    }
}
