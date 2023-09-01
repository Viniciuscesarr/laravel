<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Empresa
 * 
 * @property int $id
 * @property string $cnpj
 * @property string $razao_social
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Cliente[] $clientes
 * @property Collection|Produto[] $produtos
 *
 * @package App\Models
 */
class Empresa extends Model
{
	protected $table = 'empresas';

	protected $fillable = [
		'cnpj',
		'razao_social'
	];

	public function clientes()
	{
		return $this->hasMany(Cliente::class);
	}

	public function produtos()
	{
		return $this->hasMany(Produto::class);
	}
}
