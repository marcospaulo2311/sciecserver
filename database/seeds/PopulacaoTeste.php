<?php

use Illuminate\Database\Seeder;

class PopulacaoTeste extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Entities\User::class, 100)->create();
        factory(App\Entities\TypeUser::class, 5)->create();
        factory(App\Entities\UserTypeUser::class, 100)->create();
        factory(App\Entities\Event::class, 100)->create();
        factory(App\Entities\TypeActivity::class, 100)->create();
        factory(App\Entities\Activity::class, 10)->create();
        factory(App\Entities\TypeActivityUser::class, 5)->create();
        factory(App\Entities\ActivityUser::class, 5)->create();
        factory(App\Entities\Article::class,100)->create();
        factory(App\Entities\Participation::class,100)->create();
        factory(App\Entities\Instution::class,10)->create();
        factory(App\Entities\Course::class,10)->create();

        // Erro nessa dois
        factory(App\Entities\CourseEvent::class,5)->create();
        factory(App\Entities\UserEvent::class,5)->create();
    }
}
