<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Sex
 * 
 * @property int $id_sexe
 * @property string $libelle_sexe
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Personne[] $personnes
 *
 * @package App\Models
 */
class Sex extends Model
{
	protected $table = 'sexes';
	protected $primaryKey = 'id_sexe';

	protected $fillable = [
		'libelle_sexe'
	];

	public function personnes()
	{
		return $this->hasMany(Personne::class, 'sexe_id');
	}
}
