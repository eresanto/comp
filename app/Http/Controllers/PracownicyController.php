<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pracownicy;
use DB;

class PracownicyController extends Controller
{
            public function index()
        {
            $pracownicy =  Pracownicy::all(['id','name','surname','section','email','tel'])
            ->sortBy('surname');

            return view('pracownicy.show', compact('pracownicy','keywords'));
        }

        public function create()
        {
            return view('pracownicy.create');
        }

        public function store(Request $request)
        {

        //    $keyword = new \App\Keyword;

    //        $keyword->keyword = request('keyword');
    //        $keyword->keyword_category = request('keyword_category');
    //        $keyword->save();
    //  ekwiwalent w postaci laravela; koniecna modyfikacja w pliku klasy -> protected $fillable...
            $this->validate(request(), [
                'name' => 'required|max:10',
                'surname' => 'required|max:25',
                'section' => 'required',
                'email' => 'required',
                'tel' => 'required|max:12'

            ]);
            Pracownicy::create(request(['name','surname','section','email','tel']));
        // return a view
            return redirect('/pracownicy');

     }

     public function edit($id)
     {
         //
     }

     /**
      * Update the specified resource in storage.
      *
      * @param  \Illuminate\Http\Request  $request
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function update(Request $request, $id)
     {
        $klucz = $request['keyword'];

        foreach ($klucz as $key) {
        //$istniejace = \DB::table('keyword_pracownicy')->where(['pracownicy_id' => $id, 'keyword_id' => $key ]);


                 \DB::table('keyword_pracownicy')->insert(
                     ['pracownicy_id' => $id, 'keyword_id' => $key ]
                 );

        }
     // return a view
         return redirect('/pracownicy');
     }

     /**
      * Remove the specified resource from storage.
      *
      * @param  int  $id
      * @return \Illuminate\Http\Response
      */
     public function destroy(Request $request, $id)
     {

        Pracownicy::destroy($id);

        return redirect('/pracownicy');
     }

}
