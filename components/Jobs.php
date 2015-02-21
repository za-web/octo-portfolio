<?php namespace Zaweb\Octoportfolio\Components;

use Cms\Classes\ComponentBase;
use Zaweb\Octoportfolio\Models\Jobs as JobsModel;

class Jobs extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'Jobs Component',
            'description' => 'No description provided yet...'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function jobs()
    {
        return JobsModel::orderBy('id', 'desc')->get();
    }

}