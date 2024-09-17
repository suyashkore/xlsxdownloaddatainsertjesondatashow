<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Demo extends Model
{
    // Specify the table name if it's not the plural form of the model name
    protected $table = 'demos';

    // Define the fillable attributes to protect against mass assignment vulnerabilities
    protected $fillable = [
        'FirstName',
        'LastName',
        'ExecutionTime',
    ];

    // Optionally, you can define the primary key if it's not the default 'id'
    protected $primaryKey = 'id';

    // If you are using timestamps (created_at and updated_at), leave this as true.
    public $timestamps = true;
}
