<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Grade
 * 
 * @property int $id_grade
 * @property string $libelle_grade
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Personne[] $personnes
 *
 * @package App\Models
 */
class Grade extends Model
{
	protected $table = 'grades';
	protected $primaryKey = 'id_grade';

	protected $fillable = [
		'libelle_grade'
	];

	public function personnes()
	{
		return $this->hasMany(Personne::class);
	}
}
