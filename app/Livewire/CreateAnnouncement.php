<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Support\Facades\Auth;

class CreateAnnouncement extends Component
{
    public $title;
    public $body;
    public $price;
    public $developer;
    public $publisher;
    public $category;

    protected $rules = [
        'title' => 'required|min:2|max:100',
        'body' => 'required|min:20|max:300',
        'price' => 'required|numeric',
        'developer' => 'required|min:2|max:35',
        'publisher' => 'required|min:2|max:35',
        'category' => 'required',
    ];

    public function store(){

        $this->validate();

        $category = Category::find($this->category);
        $announcement = $category->announcements()->create([

            'title'=>$this->title,
           'body'=>$this->body,
           'price'=>$this->price,
           'developer'=>$this->developer,
           'publisher'=>$this->publisher,

        ]);
        Auth::user()->announcements()->save($announcement);

        $this->reset();
        return redirect()->route('home')->with('message', 'Annuncio creato con successo');
    }

    public function updated($propertyName){
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.create-announcement');
    }
}
