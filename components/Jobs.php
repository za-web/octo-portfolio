<?php namespace Zaweb\Octoportfolio\Components;

use Cms\Classes\ComponentBase;
use Zaweb\Octoportfolio\Models\Jobs as JobsModel;

class Jobs extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'zaweb.octoportfolio::lang.components.jobs.name',
            'description' => 'zaweb.octoportfolio::lang.components.jobs.description'
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