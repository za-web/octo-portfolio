<?php namespace ZaWeb\Octoportfolio\Components;

use Cms\Classes\ComponentBase;
use ZaWeb\Octoportfolio\Models\Jobs as JobsModel;

class Jobs extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'zaweb.octoportfolio::lang.components.job.name',
            'description' => 'zaweb.octoportfolio::lang.components.job.description'
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