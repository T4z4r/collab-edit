<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DocumentVersion extends Model
{
    protected $fillable = ['document_id','version_no','content_html','content_json','saved_at'];
    protected $casts = ['saved_at' => 'datetime'];
    public function document() { return $this->belongsTo(Document::class); }
}
