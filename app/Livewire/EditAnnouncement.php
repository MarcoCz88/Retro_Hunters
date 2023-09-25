<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;
use App\Models\Announcement;
use Illuminate\Http\Request;

class EditAnnouncement extends Component
{
    public $announcementId;
    public $title;
    public $body;
    public $price;
    public $developer;
    public $publisher;
    public $category;
    public $platform;
    public $temporary_images;
    public $images = [];
    public $announcement;
    

    public function mount(Request $request, $announcementid){
        $this->announcementId = $announcementid;

        $this->announcement = Announcement::find($announcementid);
            $this->title = $this->announcement->title;
            $this->body = $this->announcement->body;
            $this->price = $this->announcement->price;
            $this->developer = $this->announcement->developer;
            $this->publisher = $this->announcement->publisher;
            $this->category = $this->announcement->category->id;
            $this->platform = $this->announcement->platform;
            // if ($request->hasFile('images')) {
            //     $path = $request->file('image')->store('images');
            //     $object->image = $path;
            // }
    }

    public function update(){
        $announcement = Announcement::find($this->announcementId);
        $announcement->update(
            [
                'title' => $this->title,
                'body'=>$this->body,
                'price'=>$this->price, 
                'developer'=> $this->developer, 
                'publisher'=>$this->publisher,
                'category_id'=>$this->category,
                'platform'=>$this->platform          
            ]
        );
        $announcement->category_id = $this->category;
        $announcement->save();
        
        return redirect()->route('user.myAnnouncements');
    }

    public function render()
    {
        $announcement = $this->announcement;
        return view('livewire.edit-announcement', compact('announcement'));
    }
}
