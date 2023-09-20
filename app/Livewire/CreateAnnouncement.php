<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Announcement;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class CreateAnnouncement extends Component
{
    use WithFileUploads;

    public $title;
    public $body;
    public $price;
    public $developer;
    public $publisher;
    public $category;
    public $temporary_images;
    public $images = [];
    public $announcement;

    protected $rules = [
        'title' => 'required|min:2|max:100',
        'body' => 'required|min:20|max:300',
        'price' => 'required|numeric',
        'developer' => 'required|min:2|max:35',
        'publisher' => 'required|min:2|max:35',
        'category' => 'required',
        'images.*' => 'image|max:1024',
        'temporary_images.*' => 'image|max:1024'
    ];

    public function updatedTemporaryImages(){
        if($this->validate([
            'temporary_images.*' => 'image|max:1024',
        ])) {
            foreach ($this->temporary_images as $image){
                $this->images[] = $image;
            }
        }
    }

    public function removeImage($key){
        if(in_array($key, array_keys($this->images))){
            unset($this->images[$key]);
        }
    }

    public function store(){

        $this->validate();

        $category = Category::find($this->category);
        $this->announcement = $category->announcements()->create([
            'title'=>$this->title,
           'body'=>$this->body,
           'price'=>$this->price,
           'developer'=>$this->developer,
           'publisher'=>$this->publisher,
           
        ]);

        if(count($this->images)){
            foreach($this->images as $image){
                $this->announcement->images()->create(['path'=>$image->store('images', 'public')]);
            }
        }
        Auth::user()->announcements()->save($this->announcement);

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
