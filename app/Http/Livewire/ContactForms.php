<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Suivi;
use App\Models\Initial;

class ContactForms extends Component
{
    public $data;
    public $initial;
    public $date;
    public $libelle;
    // public $ids;
    public $entree;
    public $sortie;
    public $updateMode = false;

//   protected $rules = [
//     // 'initial' => 'required|integer',
//     'date' => 'required|string',
//     'libelle' => 'required|string',
//     'entree' => 'required|string',
//     'sortie' => 'required|string',
//     ];

    public function render()
    {
        $this->data = Suivi::all();
        return view('livewire.contact-forms');
    }

    
    private function resetInput()
    {
        // $this->date = null;
        // $this->libelle = null;
        // $this->entree = null;
        // $this->sortie = null;
        $this->initial = '';
        $this->date = '';
        $this->libelle = '';
        $this->entree = '';
        $this->sortie = '';
    }

    public function submit()
    {
       $validateData = $this->validate(
           [
               'date' => 'required|string',
                'libelle' => 'required|string',
                'entree' => 'required|string',
                'sortie' => 'required|string',
                'initial' => 'integer|nullable',
           ]
       );

    //    $v = Suivi::orderBy('id', 'DESC')->first();
       $v = Suivi::select('initial')->where('id', 1)->get();
       $vc = $v->count();


       if($vc == 0){
         $data = Suivi::create($validateData);
       }
       else{
        //    dd($v[0]->initial);

    
        $ver = [];
        foreach ((array) $v as $item) {

          $ver =  $v[0]->initial + $this->entree - $this->sortie;
            }
dd($ver);

        // $data = Suivi::create([
        //     'date' => $this->date ,
        //         'libelle' => $this->libelle ,
        //         'entree' => $this->entree,
        //         'sortie' => $this->sortie ,
        //         'initial' => $ver,
        // ]);
       }

   
        // session()->flash('message', 'caisse Created Successfully.');

        $this->resetInput();

        // $this->emit('suiviPaginate');
    }

    // public function edit($id)
    // {
    //     $data = Suivi::findOrFail($id);
    //     // $this->id = $id;
    //     $this->date = $data->date;
    //     $this->libelle = $data->libelle;
    //     $this->entree = $data->entree;
    //     $this->sortie = $data->sortie;
    //     $this->updateMode = true;
    // }
}
