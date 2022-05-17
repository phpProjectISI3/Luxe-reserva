<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Personne
 * 
 * @property int $id_client
 * @property string $nom
 * @property string $prenom
 * @property bool $est_marie
 * @property int $nbr_Enfant_scolarise
 * @property int $nbr_Enfant_non_scolarise
 * @property Carbon $date_naissance
 * @property int $point_personne
 * @property int $sexe_id
 * @property int $grade_id
 * 
 * @property Grade $grade
 * @property Sex $sex
 * @property Collection|AuthRole[] $auth_roles
 * @property Collection|DemandeReservation[] $demande_reservations
 * @property Collection|MessageContact[] $message_contacts
 * @property Collection|RemarqueClient[] $remarque_clients
 * @property Collection|SauvegardeLogement[] $sauvegarde_logements
 *
 * @package App\Models
 */
class Personne extends Model
{
	protected $table = 'personnes';
	protected $primaryKey = 'id_client';
	public $timestamps = false;

	protected $casts = [
		'est_marie' => 'bool',
		'nbr_Enfant_scolarise' => 'int',
		'nbr_Enfant_non_scolarise' => 'int',
		'point_personne' => 'int',
		'sexe_id' => 'int',
		'grade_id' => 'int'
	];

	protected $dates = [
		'date_naissance'
	];

	protected $fillable = [
		'nom',
		'prenom',
		'est_marie',
		'nbr_Enfant_scolarise',
		'nbr_Enfant_non_scolarise',
		'date_naissance',
		'point_personne',
		'sexe_id',
		'grade_id'
	];

	public function grade()
	{
		return $this->belongsTo(Grade::class);
	}

	public function sex()
	{
		return $this->belongsTo(Sex::class, 'sexe_id');
	}

	public function auth_roles()
	{
		return $this->belongsToMany(AuthRole::class, 'auth_role_personnes', 'personne_role_', 'auth_role_')
					->withPivot('username_email', 'mot_de_passe')
					->withTimestamps();
	}

	public function demande_reservations()
	{
		return $this->hasMany(DemandeReservation::class);
	}

	public function message_contacts()
	{
		return $this->hasMany(MessageContact::class, 'recepteur_id');
	}

	public function remarque_clients()
	{
		return $this->hasMany(RemarqueClient::class);
	}

	public function sauvegarde_logements()
	{
		return $this->hasMany(SauvegardeLogement::class, 'client_id');
	}
}
