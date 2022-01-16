<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\RoleInteration;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    // /**
    //  * Seed the application's database.
    //  *
    //  * @return void
    //  */
    public function run()
    {

        //     // if(!$usuario_carla && !$usuario_gabriel)
        //     // {


        //     // }

        //     // if(!$role1 && !$role2 &&!$role3)
        //     // {

        //         $role1 = ["nome_cargo" => "admin"];
        //         $role2 =["nome_cargo" => "prestador"];
        //         $role3 =["nome_cargo" => "cliente"];

        //         Role::create(
        //             $role1
        //         );
        //         Role::create(
        //             $role2
        //             );
        //         Role::create(
        //             $role3
        //         );

        //         $usuario_carla = [
        //             "name" => "Carla",
        //             "cellphone"=>"44998542131",
        //             "cellphone_verified_at"=>now(),
        //             "password" => Hash::make('senha123')

        //         ];

        //         $usuario_gabriel =[
        //             "name" => "Gabriel",
        //             "cellphone"=>"44988681040",
        //             "cellphone_verified_at"=>now(),
        //             "password" => Hash::make('senha123')
        //         ];

        //         User::create($usuario_carla);
        // //         User::create($usuario_gabriel);
        //         $usuario_carla = User::Where('cellphone',$usuario_carla->cellphone);
        //         $usuario_gabriel = User::Where('cellphone',$usuario_gabriel->cellphone);
        $rol_int = new RoleInteration;
        $rol_int->user_id = 1;
        $rol_int->role_id = 1;
        $rol_int->save();
        $rol_int2 = new RoleInteration;
        $rol_int2->user_id = 2;
        $rol_int2->role_id = 1;
        $rol_int2->save();
    }
}
