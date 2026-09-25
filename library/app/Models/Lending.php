<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['user_id', 'copy_id', 'start'])]
class Lending extends Model
{
    /** @use HasFactory<\Database\Factories\LendingFactory> */
    use HasFactory;
}
