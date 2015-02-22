<?php namespace ZaWeb\Octoportfolio\Models;

use Model;

/**
 * Category Model
 */
class Category extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'zaweb_octoportfolio_categories';

    /**
     * @var array Guarded fields
     */
    protected $guarded = ['*'];

    /**
     * @var array Fillable fields
     */
    protected $fillable = [];

    /**
     * @var array Relations
     */
    public $hasOne = [];
    public $hasMany = [];
    public $belongsTo = [];

    public $belongsToMany = [
        'jobs' => ['ZaWeb\Octoportfolio\Models\Jobs', 'table' => 'zaweb_octoportfolio_categories', 'order' => 'created_at desc']
    ];

    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}