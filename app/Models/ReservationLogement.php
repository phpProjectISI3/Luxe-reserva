<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class ReservationLogement
 * 
 * @property int $id_reservation
 * @property int $demande_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property DemandeReservation $demande_reservation
 * @property Collection|Facturation[] $facturations
 *
 * @package App\Models
 */
class ReservationLogement extends Model
{
	protected $table = 'reservation_logements';
	protected $primaryKey = 'id_reservation';

	protected $casts = [
		'demande_id' => 'int'
	];

	protected $fillable = [
		'demande_id'
	];

	public function demande_reservation()
	{
		return $this->belongsTo(DemandeReservation::class, 'demande_id');
	}

	public function facturations()
	{
		return $this->hasMany(Facturation::class);
	}
}
