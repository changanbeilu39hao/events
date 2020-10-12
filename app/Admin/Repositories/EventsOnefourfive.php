<?php

namespace App\Admin\Repositories;

use App\Models\EventsOnefourfive as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class EventsOnefourfive extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
