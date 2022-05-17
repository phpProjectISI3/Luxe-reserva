<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AuthRole
 * 
 * @property int $id_role
 * @property string $description_role
 * @property string $libelle_role
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Personne[] $personnes
 *
 * @package App\Models
 */
class AuthRole extends Model
{
	protected $table = 'auth_roles';
	protected $primaryKey = 'id_role';

	protected $fillable = [
		'description_role',
		'libelle_role'
	];

	public function personnes()
	{
		return $this->belongsToMany(Personne::class, 'auth_role_personnes', 'auth_role_', 'personne_role_')
					->withPivot('username_email', 'mot_de_passe')
					->withTimestamps();
	}
}
