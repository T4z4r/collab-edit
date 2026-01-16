<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DocumentShare extends Model
{
    protected $fillable = ['document_id','token','permission','expires_at','password_hash'];
    protected $casts = ['expires_at' => 'datetime'];

    public function document() { return $this->belongsTo(Document::class); }
    public function isExpired(): bool { return $this->expires_at && $this->expires_at->isPast(); }
}
