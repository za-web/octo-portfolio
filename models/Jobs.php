<?php namespace Zaweb\Octoportfolio\Models;

use Model;

/**
 * Work Model
 */
class Jobs extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'zaweb_octoportfolio_jobs';

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
        'categories' => ['Zaweb\Octoportfolio\Models\Category', 'table' => 'zaweb_octoportfolio_jobs_categories']
    ];

    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];

    public $attachMany = [
        'attachments' => ['System\Models\File']
    ];

}