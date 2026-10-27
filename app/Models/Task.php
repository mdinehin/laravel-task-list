<?php

namespace App\Models;

use Database\Factories\TaskFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /** @use HasFactory<TaskFactory> */
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'title',
        'description',
        'long_description',
    ];

    /**
     * Toggle and save the attribute.
     */
    public function toggleComplete(): void
    {
        $this->completed = ! $this->completed;
        $this->save();
    }
}
