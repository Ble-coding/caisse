<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Suivi;
use App\Models\Initial;

class SuiviPagination extends Component
{
    use WithPagination;

    // public $suivis;
    public $initial;
    
    public $date;
    public $libelle;
    public $ids;
     public $data;
     public $ver;
   //  $libelle, $entree, $sortie, $selected_id;
    public $entree;
    public $sortie;
    public $updateMode = false;

    public  $query;

    public function render()
    {
        $suivis = Suivi::where(function($sub_query)
        {
            $sub_query->where('libelle', 'like', '%'. $this->query . '%');
        })->latest()->paginate(10);

        return view('livewire.suivi-pagination', [
            'suivis' => $suivis,
        ]);

    }

    public function submit()
    {
       $validateData = $this->validate(
           [
               'date' => 'required|string',
                'libelle' => 'required|string',
                'entree' => 'required|string',
                'sortie' => 'required|string',
           ]
       );

    Suivi::create($validateData);
        // session()->flash('message', 'caisse Created Successfully.');

        $this->resetInput();

        // $this->emit('suiviPaginate');
    }

    private function resetInput()
    {
        // $this->date = null;
        // $this->libelle = null;
        // $this->entree = null;
        // $this->sortie = null;
        $this->date = '';
        $this->libelle = '';
        $this->entree = '';
        $this->sortie = '';
    }

    public function edit($id)
    {
      
        // ->findOrFail($id)
         $suivis = Suivi::where('id',$id)->first();
         $this->ids = $suivis->id;
         $this->date = $suivis->date;
        $this->libelle = $suivis->libelle;
        $this->entree = $suivis->entree;
        $this->sortie = $suivis->sortie;

        // $this->updateMode = true;
        
    }

    public function cancel()
    {
        $this->updateMode = false;
        $this->resetInput();
    }

    public function update()
    {
        $this->validate(
            [
                'date' => 'required|string',
                 'libelle' => 'required|string',
                 'entree' => 'required|string',
                 'sortie' => 'required|string',
            ]
        );

        if ($this->ids) {
            $suivis = Suivi::find($this->ids);
            $suivis->update([
                'date' => $this->date,
                'libelle' => $this->libelle,
                'entree' => $this->entree,
                'sortie' => $this->sortie,
            ]);

            $this->resetInput();
            // $this->updateMode = false;
        }

    }
 
   
    public function delete($id)
    {
        if($id){
            // Suivi::where('id',$id)->delete();
            Suivi::where('id',$id)->delete($id);
            // session()->flash('message', 'Users Deleted Successfully.');
        }
    }

}
