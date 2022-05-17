<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Facturation
 * 
 * @property int $id_facture
 * @property int $note_client
 * @property string $commentaire_client
 * @property int $reservation_logement_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property ReservationLogement $reservation_logement
 *
 * @package App\Models
 */
class Facturation extends Model
{
	protected $table = 'facturations';
	protected $primaryKey = 'id_facture';

	protected $casts = [
		'note_client' => 'int',
		'reservation_logement_id' => 'int'
	];

	protected $fillable = [
		'note_client',
		'commentaire_client',
		'reservation_logement_id'
	];

	public function reservation_logement()
	{
		return $this->belongsTo(ReservationLogement::class);
	}
}
