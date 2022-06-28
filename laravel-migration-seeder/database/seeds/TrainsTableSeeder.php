<?php
use App\Train;
use Illuminate\Database\Seeder;

class TrainsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $newTrain = new Train();
        $newTrain->azienda='prova';
        $newTrain->partenza ='prova';
        $newTrain->arrivo='prova';
        $newTrain->orario_partenza='prova';
        $newTrain->orario_arrivo='prova';
        $newTrain->codie_treno='prova';
        $newTrain->numero_carrozze='prova';
        $newTrain->corsa_cancellata='prova';
        $newTrain->in_orario='prova';
        $newTrain->save();
    }
}
