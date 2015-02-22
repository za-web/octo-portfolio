<?php namespace ZaWeb\Octoportfolio\Models;

use Model;

/**
 * JobsCategories Model
 */
class JobsCategories extends Model
{

    /**
     * @var string The database table used by the model.
     */
    public $table = 'zaweb_octoportfolio_jobs_categories';

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
    public $belongsToMany = [];
    public $morphTo = [];
    public $morphOne = [];
    public $morphMany = [];
    public $attachOne = [];
    public $attachMany = [];

}