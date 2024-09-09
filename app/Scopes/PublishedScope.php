<?php

namespace App\Scopes;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

class PublishedScope implements \Illuminate\Database\Eloquent\Scope
{

    public function apply(Builder $builder, Model $model): void
    {
        $builder->where('is_published', true);
    }
}
