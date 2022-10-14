<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Chapter;
use App\Models\Course;
use App\Models\Student;
use Illuminate\Http\Request;

class ChapterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($course)
    {
        $chapter = Course::findOrFail($course)->chapters()->orderBy('chapters.order')->get();
        return $chapter;
    }

    public function notes($chapter)
    {
        $notes = Chapter::findOrFail($chapter)->notes()->get();
        return $notes;
    }

    public function comments($chapter){
        $notes = Chapter::findOrFail($chapter)->comments()->get();
        return $notes;
    }

    public function nextChapter($chapter, $course )
    {
        //return Course::findOrFail($course);
        $chapter = Chapter::findOrFail($chapter);
        $next = $chapter->order + 1;

        $nextChapter = Course::findOrFail($course)->chapters()->where('order',$next)->first();

        return $nextChapter;
    }

    public function previousChapter($chapter, $course)
    {
        $chapter = Chapter::findOrFail($chapter);
        $next = $chapter->order - 1;

        $nextChapter = Course::findOrFail($course)->chapters()->where('order',$next)->first();

        return $nextChapter;
    }

    public function userChapter($course, $student) {
        $curso = Course::findOrFail($course);

        $chapterByStudent =Student::with(['chapters' =>  function($query) {
            $query->select('*');
        }])->get();
        return $chapterByStudent;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Chapter  $chapter
     * @return \Illuminate\Http\Response
     */
    public function show(Chapter $chapter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Chapter  $chapter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Chapter $chapter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Chapter  $chapter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Chapter $chapter)
    {
        //
    }
}
