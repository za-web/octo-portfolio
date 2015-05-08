<?php namespace ZaWeb\Octoportfolio\Components;

use Cms\Classes\ComponentBase;
use ZaWeb\Octoportfolio\Models\Jobs as JobsModel;

class Job extends ComponentBase
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
        return [
            'jobId' => [
                'title' => 'zaweb.octoportfolio::lang.components.job.jobId',
                'default' => '{{ :id }}',
                'type' => 'string'
            ]
        ];
    }

    public function job()
    {
        return JobsModel::find($this->getProperties('jobId'))->first();
    }
}