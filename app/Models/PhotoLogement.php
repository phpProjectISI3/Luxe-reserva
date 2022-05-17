<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class PhotoLogement
 * 
 * @property int $id_photo
 * @property string $chemin_photo
 * @property int $logement_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Logement $logement
 *
 * @package App\Models
 */
class PhotoLogement extends Model
{
	protected $table = 'photo_logements';
	protected $primaryKey = 'id_photo';

	protected $casts = [
		'logement_id' => 'int'
	];

	protected $fillable = [
		'chemin_photo',
		'logement_id'
	];

	public function logement()
	{
		return $this->belongsTo(Logement::class);
	}
}
