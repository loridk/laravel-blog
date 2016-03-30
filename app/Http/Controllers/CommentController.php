<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Post;
use App\Comment;

class CommentController extends Controller
{
    public function store(Request $request, Card $card) {

        // validate

        $this->validate($request, [
            'body' => 'required|min:10'
        ]);

        $note = new Note($request->all());

        $card->addNote($note, 1);


        /*

               // simple with create

                $card->notes()->create([
                    'body' => $request->body
                ]);
                */

        return back();
    }
}
