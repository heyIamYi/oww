<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;


class CommentController extends Controller
{
        //購物網站留言板
        public function comment()
        {
            $comments = Comment::orderby('id', 'desc')->get();

            return view('comment.comment', compact('comments'));
        }

        public function save_comment(Request $request)
        {
            Comment::create([
                'title' => $request->title,
                'name' => $request->name,
                'content' => $request->content,
            ]);

            return redirect('/comment');
        }

        public function edit_comment($id)
        {
            $comment = DB::table('comments')->find($id);
            // dd($comment);
            return view('comment.edit', compact('comment'));
        }

        public function update_comment($id, Request $request)
        {
            DB::table('comments')
                ->where('id', $id)
                ->update([
                    'title' => $request->title,
                    'name' => $request->name,
                    'content' => $request->content,
                ]);

            return redirect('/comment');
        }

        public function delete_comment($target)
        {
            $delete = DB::table('comments')
                ->where('id', $target)
                ->delete();

            return redirect('/comment');
        }

}
