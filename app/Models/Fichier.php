<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Fichier
 *
 * @property int $id
 * @property string $path
 * @property string|null $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Fichier newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Fichier newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Fichier query()
 * @method static \Illuminate\Database\Eloquent\Builder|Fichier whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fichier whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fichier whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fichier wherePath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Fichier whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Fichier extends Model
{
    use HasFactory;
    protected $fillable = ['path', 'name'];
}