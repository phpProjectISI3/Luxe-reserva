<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SauvegardeLogement
 * 
 * @property int $id_sauvegarde
 * @property int $client_id
 * @property int $logement_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Personne $personne
 * @property Logement $logement
 *
 * @package App\Models
 */
class SauvegardeLogement extends Model
{
	protected $table = 'sauvegarde_logements';
	protected $primaryKey = 'id_sauvegarde';

	protected $casts = [
		'client_id' => 'int',
		'logement_id' => 'int'
	];

	protected $fillable = [
		'client_id',
		'logement_id'
	];

	public function personne()
	{
		return $this->belongsTo(Personne::class, 'client_id');
	}

	public function logement()
	{
		return $this->belongsTo(Logement::class);
	}
}
