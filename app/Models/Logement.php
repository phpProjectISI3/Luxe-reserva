<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Logement
 * 
 * @property int $id_logement
 * @property string $nom_logement
 * @property int $detail_logement_id
 * @property string $adress_logement
 * @property string $localisation_logement
 * 
 * @property DetailLogement $detail_logement
 * @property Collection|DemandeReservation[] $demande_reservations
 * @property Collection|PhotoLogement[] $photo_logements
 * @property Collection|PlanningLogement[] $planning_logements
 * @property Collection|SauvegardeLogement[] $sauvegarde_logements
 *
 * @package App\Models
 */
class Logement extends Model
{
	protected $table = 'logements';
	protected $primaryKey = 'id_logement';
	public $timestamps = false;

	protected $casts = [
		'detail_logement_id' => 'int'
	];

	protected $fillable = [
		'nom_logement',
		'detail_logement_id',
		'adress_logement',
		'localisation_logement'
	];

	public function detail_logement()
	{
		return $this->belongsTo(DetailLogement::class);
	}

	public function demande_reservations()
	{
		return $this->hasMany(DemandeReservation::class);
	}

	public function photo_logements()
	{
		return $this->hasMany(PhotoLogement::class);
	}

	public function planning_logements()
	{
		return $this->hasMany(PlanningLogement::class);
	}

	public function sauvegarde_logements()
	{
		return $this->hasMany(SauvegardeLogement::class);
	}
}
