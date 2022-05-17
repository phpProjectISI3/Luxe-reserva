<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PlanningLogement
 * 
 * @property int $id_planing
 * @property bool $est_disponible
 * @property Carbon $date_debut
 * @property Carbon $date_fin
 * @property int $logement_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Logement $logement
 *
 * @package App\Models
 */
class PlanningLogement extends Model
{
	protected $table = 'planning_logements';
	protected $primaryKey = 'id_planing';

	protected $casts = [
		'est_disponible' => 'bool',
		'logement_id' => 'int'
	];

	protected $dates = [
		'date_debut',
		'date_fin'
	];

	protected $fillable = [
		'est_disponible',
		'date_debut',
		'date_fin',
		'logement_id'
	];

	public function logement()
	{
		return $this->belongsTo(Logement::class);
	}
}
