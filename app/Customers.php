<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Customers extends Authenticatable
{
	use Notifiable;
	
	protected $guard ='customers';
	protected $table = 'customers';

	protected $fillable = [
		'nama_lengkap','no_telpon','email','password'
	];

	protected $hidden = [
		'password', 'remember_token',
	];
}