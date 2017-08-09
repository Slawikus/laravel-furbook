<?php

namespace Furbook\Http\ViewComposers;

use Illuminate\View\View;
use Furbook\Breed;

class CatFormComposer {
    protected $breeds;

    public function __construct(Breed $breeds)
    {
        $this->breeds = $breeds;
    }

    public function compose(View $view) {
        $view->with('breeds', $this->breeds->pluck('name', 'id'));
    }
}