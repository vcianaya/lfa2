<?php
 
class Usuarios {
 
    /**
     * Make changes to the database.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::create('usuarios', function($tabla){
 
            $tabla->increments('id');
            $tabla->string('username', 60);
            $tabla->string('password', 100);
            $tabla->integer('edad');
            $tabla->timestamps();
 
        });
 
        DB::table('usuarios')->insert(array(
            array(
                'username' => 'israel965',
                'password' => Hash::make('123456'),
                'edad'	   => 32
            ),array(
                'username' => 'juan',
                'password' => Hash::make('123456'),
                'edad'	   => 32
            )
        ));
 
    }
 
    /**
     * Revert the changes to the database.
     *
     * @return void
     */
    public function down()
    {
        
        Schema::drop('usuarios');
 
    }
 
}