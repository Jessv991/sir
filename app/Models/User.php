<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    // Nombre de la tabla real
    protected $table = 'EMPLTABLE';

    // Clave primaria
    protected $primaryKey = 'EMPLID';

    // Si no usas timestamps (created_at / updated_at)
    public $timestamps = false;

    // Si necesitas una conexión específica
    protected $connection = 'sqlsrv_AXDB30';

    // Campos asignables
    protected $fillable = [
        'EMAIL',
        'SIR_PASSWORD',
        'SIR_ACTIVE',
        'PBAUSERPROFILE',
        'name',
        'last_name',
    ];

    // Campos ocultos al exportar a array/JSON
    protected $hidden = [
        'SIR_PASSWORD',
        'remember_token',
    ];

    // Ejemplo de accessor para nombre completo
    public function getFullNameAttribute()
    {
        if (is_null($this->last_name)) {
            return "{$this->name}";
        }
        return "{$this->name} {$this->last_name}";
    }

    // Mutator para encriptar la contraseña al guardarla
    public function setSirPasswordAttribute($value)
    {
        $this->attributes['SIR_PASSWORD'] = bcrypt($value);
    }

    // Laravel usará esta columna como "username" para login
    public function getAuthIdentifierName()
    {
        return 'EMPLID';
    }

    // Sobrescribimos para decirle a Laravel cuál es la columna de contraseña
    public function getAuthPassword()
    {
        return $this->SIR_PASSWORD;
    }
}
