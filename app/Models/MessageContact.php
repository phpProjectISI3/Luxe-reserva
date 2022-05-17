<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MessageContact
 * 
 * @property int $id_message
 * @property int $emetteur_id
 * @property int $recepteur_id
 * @property string $Message_ecrit
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Personne $personne
 *
 * @package App\Models
 */
class MessageContact extends Model
{
	protected $table = 'message_contacts';
	protected $primaryKey = 'id_message';

	protected $casts = [
		'emetteur_id' => 'int',
		'recepteur_id' => 'int'
	];

	protected $fillable = [
		'emetteur_id',
		'recepteur_id',
		'Message_ecrit'
	];

	public function personne()
	{
		return $this->belongsTo(Personne::class, 'recepteur_id');
	}
}
