<?php

class Posts {

	/**
	 * Make changes to the database.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('posts',function($tabla){

			$tabla->increments('id');
			$tabla->integer('user_id');
            $tabla->string('titulo', 100);
            $tabla->text('post');
            $tabla->timestamps();
 
		});

		DB::table('posts')->insert(array(
            array(
                'user_id' => '1',
                'titulo' => 'Un primer post',
                'post'  =>	'Cuerpo del primer post'

            ),array(
                'user_id' => '2',
                'titulo' => 'Un segundo post',
                'post'  =>	'Cuerpo del segundo post'

            ),array(
                'user_id' => '1',
                'titulo' => 'Un tercer post',
                'post'  =>	'Cuerpo del tercer post'

            ),array(
                'user_id' => '1',
                'titulo' => 'Otro post del usuario con id 1',
                'post'  =>	'Nuevo post de Israel'

            ),array(
                'user_id' => '2',
                'titulo' => 'Un nuevo post de Juan',
                'post'  =>	'Nuevo post de Juan'

            ),array(
                'user_id' => '2',
                'titulo' => 'Escribiendo más posts',
                'post'  =>	'Hola, soy Juan'

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
		
		Schema::drop('posts');

	}

}