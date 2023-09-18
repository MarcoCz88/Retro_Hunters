<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Mail\BecomeRevisor;
use App\Models\Announcement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;


class RevisorController extends Controller
{
    public function index(){
        $announcement_to_check = Announcement::where('is_accepted', null)->first();
        $announcement_to_undo = Announcement::where('is_accepted', true)->orWhere('is_accepted', false)->latest()->first();
        return view('revisor.index', compact('announcement_to_check', 'announcement_to_undo'));
    }

    public function acceptAnnouncement(Announcement $announcement){
        $announcement->setAccepted(true);
        return redirect()->back()->with('message',"Finalmente l'articolo sara' visionabile!!!");
    }

    public function rejectAnnouncement(Announcement $announcement){
        $announcement->setAccepted(false);
        return redirect()->back()->with('message',"Hai rifiutato l'articolo di {$announcement->user->name}");
    }

    public function undoAnnouncement(Announcement $announcement){
        // $announcement_to_undo = Announcement::where('is_accepted', true)->orWhere('is_accepted', false)->latest()->first();
        // if($announcement_to_undo != null){
            $announcement->setAccepted(null);
            return redirect()->back()->with('message', "L'azione è stata annullata con successo");
        
    }

    public function becomeRevisor(){
        Mail::to('hello@example.com')->send(new BecomeRevisor(Auth::user()));
        return redirect()->back()->with('message', 'La tua candidatura è stata inviata con successo.');
    }

    public function makeRevisor(User $user){
        Artisan::call('retro:makeUserRevisor', ["email"=>$user->email]);
        return redirect()->back()->with('message', "L'utente è stato correttamente promosso a revisore.");
    }
}
