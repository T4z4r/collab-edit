<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = ['owner_id','title','type','original_file_path'];

    public function content() { return $this->hasOne(DocumentContent::class); }
    public function shares()  { return $this->hasMany(DocumentShare::class); }
    public function versions(){ return $this->hasMany(DocumentVersion::class); }
}
