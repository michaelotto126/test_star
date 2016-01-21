<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model as Eloquent;

class Domain extends Eloquent {
    protected $table = 'domains';
    
    public function language() {
        
        return $this->belongsTo('\App\Models\Language', 'language_id');
    }
    
    public function template() {
        
        return $this->belongsTo('\App\Models\Template', 'template_id');
    }    
        
}
