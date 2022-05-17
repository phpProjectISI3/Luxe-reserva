<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class TypeLogement
 * 
 * @property int $id_type_logement
 * @property string $libelle_type_logement
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|DetailLogement[] $detail_logements
 *
 * @package App\Models
 */
class TypeLogement extends Model
{
	protected $table = 'type_logements';
	protected $primaryKey = 'id_type_logement';

	protected $fillable = [
		'libelle_type_logement'
	];

	public function detail_logements()
	{
		return $this->hasMany(DetailLogement::class);
	}
}
