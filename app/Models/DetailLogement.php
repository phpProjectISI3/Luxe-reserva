<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class DetailLogement
 * 
 * @property int $id_detail
 * @property bool $est_categorie
 * @property int $type_logement_id
 * @property float $superficier
 * @property int $nbr_piece
 * @property int $capacite_personne_max
 * @property float $tarif_par_nuit_HS
 * @property float $tarif_par_nuit_BS
 * @property string $description_logement
 * @property int $max_reserv
 * @property float $tarif_annulation
 * @property int $marge_annulation
 * @property bool $piscine_disponible
 * @property bool $parking_disponible
 * @property bool $jardin_cours
 * @property bool $massage_disponible
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property TypeLogement $type_logement
 * @property Collection|Logement[] $logements
 *
 * @package App\Models
 */
class DetailLogement extends Model
{
	protected $table = 'detail_logements';
	protected $primaryKey = 'id_detail';

	protected $casts = [
		'est_categorie' => 'bool',
		'type_logement_id' => 'int',
		'superficier' => 'float',
		'nbr_piece' => 'int',
		'capacite_personne_max' => 'int',
		'tarif_par_nuit_HS' => 'float',
		'tarif_par_nuit_BS' => 'float',
		'max_reserv' => 'int',
		'tarif_annulation' => 'float',
		'marge_annulation' => 'int',
		'piscine_disponible' => 'bool',
		'parking_disponible' => 'bool',
		'jardin_cours' => 'bool',
		'massage_disponible' => 'bool'
	];

	protected $fillable = [
		'est_categorie',
		'type_logement_id',
		'superficier',
		'nbr_piece',
		'capacite_personne_max',
		'tarif_par_nuit_HS',
		'tarif_par_nuit_BS',
		'description_logement',
		'max_reserv',
		'tarif_annulation',
		'marge_annulation',
		'piscine_disponible',
		'parking_disponible',
		'jardin_cours',
		'massage_disponible'
	];

	public function type_logement()
	{
		return $this->belongsTo(TypeLogement::class);
	}

	public function logements()
	{
		return $this->hasMany(Logement::class);
	}
}
