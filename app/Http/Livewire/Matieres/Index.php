<?php

namespace App\Http\Livewire\Matieres;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Matiere ;
use Spatie\Permission\Models\Permission;

class Index extends Component
{
    use WithPagination;

    protected $listeners = ['render'=>'render'];
 
    public $search = '', $trieePar = '', $column = 'name', $columName="", $columnValue="", $attributeName, $column_data_collection ;
 
    public function updatedColumName(){
       $this->attributeName = $this->columName;
       $this->column_data_collection = User::orderBy('name','ASC')->get(['id',$this->attributeName]);
    }
    
    public function resetAttribute(){
       $this->reset(['columName', 'columnValue', 'attributeName', 'column_data_collection']);
    }
    public function resetSort(){
       $this->reset(['trieePar', 'column']);
    }
 
    public function render()
    {
       $matieres = $this->columnValue === "" ? 
<<<<<<< HEAD
                   Matiere::search($this->search)->orderBy($this->column, $this->trieePar == '' ? 'ASC' : $this->trieePar )->paginate(10) :
=======
                   Matiere::search($this->search)->with('permissions')->orderBy($this->column, $this->trieePar == '' ? 'ASC' : $this->trieePar )->paginate(10) :
>>>>>>> 3cb14510a7fa4a1cf023b7f0c55f7d0d40c0d72c
                   Matiere::filter($this->columName,$this->columnValue)->orderBy($this->column, $this->trieePar == '' ? 'ASC' : $this->trieePar )->paginate(10) ;
 
       return view('livewire.matieres.index', compact(['matieres']));
    }
}
