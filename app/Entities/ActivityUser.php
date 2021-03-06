<?php

namespace App\Entities;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class ActivityUser extends Model implements Transformable
{
    use TransformableTrait;

    protected $fillable = [ 'status',
                            'presenca',
                            'data_entrada',
                            'data_saida',
                            'id_users',
                            'id_activity',
                            'id_type_activity_user'
                        ];
    public function atividade(){
        return $this->belongsTo(Activity::class,'id_activity');
    }
    public function user(){
        return $this->belongsTo(User::class,'id_users');
    }
    public function atividadeUser(){
        return $this->belongsTo(TypeActivityUser::class,'id_type_activity_user');
    }
    public function valida(){

        $data[]=['id_users','=',$this->id_users];
        $data[]=['id_activity','=',$this->id_activity];
        $data[]=['id_type_activity_user','=',$this->id_type_activity_user];

        $retorno  = DB::table('activity_users')->where($data)->get();

        if($retorno->count()>0){
            return false;
        }
        return true;
    }

}
