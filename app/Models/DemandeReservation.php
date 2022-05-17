<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DemandeReservation
 * 
 * @property int $id_demande
 * @property Carbon $date_demande
 * @property Carbon $date_debut
 * @property Carbon $date_fin
 * @property bool $refuse_par_admin
 * @property Carbon $date_refus
 * @property bool $annuler_par_client
 * @property Carbon $date_annulation
 * @property int $personne_id
 * @property int $logement_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Logement $logement
 * @property Personne $personne
 * @property Collection|ReservationLogement[] $reservation_logements
 *
 * @package App\Models
 */
class DemandeReservation extends Model
{
	protected $table = 'demande_reservations';
	protected $primaryKey = 'id_demande';

	protected $casts = [
		'refuse_par_admin' => 'bool',
		'annuler_par_client' => 'bool',
		'personne_id' => 'int',
		'logement_id' => 'int'
	];

	protected $dates = [
		'date_demande',
		'date_debut',
		'date_fin',
		'date_refus',
		'date_annulation'
	];

	protected $fillable = [
		'date_demande',
		'date_debut',
		'date_fin',
		'refuse_par_admin',
		'date_refus',
		'annuler_par_client',
		'date_annulation',
		'personne_id',
		'logement_id'
	];

	public function logement()
	{
		return $this->belongsTo(Logement::class);
	}

	public function personne()
	{
		return $this->belongsTo(Personne::class);
	}

	public function reservation_logements()
	{
		return $this->hasMany(ReservationLogement::class, 'demande_id');
	}
}
