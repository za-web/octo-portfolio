<?php namespace ZaWeb\Octoportfolio\Components;

use Cms\Classes\ComponentBase;
use ZaWeb\Octoportfolio\Models\Category;

class Categories extends ComponentBase
{

    public function componentDetails()
    {
        return [
            'name'        => 'zaweb.octoportfolio::lang.components.categories.name',
            'description' => 'zaweb.octoportfolio::lang.components.categories.description'
        ];
    }

    public function defineProperties()
    {
        return [];
    }

    public function categories()
    {
        return Category::orderBy('id', 'desc')->get();
    }

}