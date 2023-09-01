<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Produto
 * 
 * @property int $id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * @property string $nome
 * @property float $valor
 * @property int $empresa_id
 * 
 * @property Empresa $empresa
 * @property Collection|ContaCliente[] $conta_clientes
 * @property Collection|Estoque[] $estoques
 *
 * @package App\Models
 */
class Produto extends Model
{
	protected $table = 'produtos';

	protected $casts = [
		'valor' => 'float',
		'empresa_id' => 'int'
	];

	protected $fillable = [
		'nome',
		'valor',
		'empresa_id'
	];

	public function empresa()
	{
		return $this->belongsTo(Empresa::class);
	}

	public function conta_clientes()
	{
		return $this->hasMany(ContaCliente::class);
	}

	public function estoques()
	{
		return $this->hasMany(Estoque::class);
	}
}
