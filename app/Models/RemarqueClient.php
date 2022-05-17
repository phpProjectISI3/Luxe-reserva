<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class RemarqueClient
 * 
 * @property int $id_remarque
 * @property int $personne_id
 * @property string $description_remarque
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Personne $personne
 *
 * @package App\Models
 */
class RemarqueClient extends Model
{
	protected $table = 'remarque_clients';
	protected $primaryKey = 'id_remarque';

	protected $casts = [
		'personne_id' => 'int'
	];

	protected $fillable = [
		'personne_id',
		'description_remarque'
	];

	public function personne()
	{
		return $this->belongsTo(Personne::class);
	}
}
