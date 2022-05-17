<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class AuthRolePersonne
 * 
 * @property int $personne_role_
 * @property int $auth_role_
 * @property string $username_email
 * @property string $mot_de_passe
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property AuthRole $auth_role
 * @property Personne $personne
 *
 * @package App\Models
 */
class AuthRolePersonne extends Model
{
	protected $table = 'auth_role_personnes';
	public $incrementing = false;

	protected $casts = [
		'personne_role_' => 'int',
		'auth_role_' => 'int'
	];

	protected $fillable = [
		'username_email',
		'mot_de_passe'
	];

	public function auth_role()
	{
		return $this->belongsTo(AuthRole::class, 'auth_role_');
	}

	public function personne()
	{
		return $this->belongsTo(Personne::class, 'personne_role_');
	}
}
