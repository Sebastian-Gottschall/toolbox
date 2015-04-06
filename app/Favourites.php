<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class favourites extends Model {

    //info: http://laravel.com/docs/5.0/eloquent

    protected $table = 'favourites';
    protected $maxPerPage = 10;
    protected $fillable = ['name', 'username', 'email'];
    protected $guarded = ['id', 'password', 'remember_token', 'created_at', 'updated_at'];

    public function getUsers(){
        $users = User::all();
        return $users;
    }

    public function getUserById($id){
        $user = User::find($id);
        return $user;
    }

    public function getUserByFilter($filter){
        $users = User::where('votes', '>', 100)->take($this->maxPerPage)->get();
        //$users = User::whereRaw('age > ? and votes = 100', [25])->get();
        return $users;
    }

    public function getUserAmount(){
        $count = User::where('votes', '>', 100)->count();
    }

}
