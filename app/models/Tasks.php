<?php
// le backslah permet de dire à la racine du name space et pas du dossier. 
class Tasks extends \Eloquent {
    //Ajout une règle de validation
    public static $rules = [
        'title' => 'required' 
        ];
    //rajouter pour laisser la possibilité d'écrire dedans. 
    protected $fillable = ['title'];
    protected $attributes = array(
            'done' => false
        );
}
?>