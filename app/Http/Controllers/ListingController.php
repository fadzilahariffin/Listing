<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;

class ListingController extends Controller
{
    public function index(){
        $listings = Listing::all();
        
        return view('listing.index',compact('listings'));
    }

    public function create(){
        return view('listing.create');
    }

    public function store(Request $request){
        $this->validate($request,[
            'list_name'         => 'required',
            'address'           => 'required',
            'latitude'          => 'required|numeric',
            'longitude'         => 'required|numeric',
        ]);
        Listing::create([
            'list_name'           => $request->list_name,
            'address'             => $request->address,
            'latitude'            => $request->latitude,
            'longitude'           => $request->longitude,
            'submitter_id'        => auth()->user()->id
        ]);

        return redirect('listing')->with('flash_success','Listing Successfully Added!');
    }

    public function edit(Listing $listing){
        return view('listing.edit',compact('listing'));
    }

    public function update(Request $request,Listing $listing){
        $this->validate($request,[
            'list_name'         => 'required',
            'address'           => 'required',
            'latitude'          => 'required|numeric',
            'longitude'         => 'required|numeric',
        ]);
        $listing->update([
            'list_name'           => $request->list_name,
            'address'             => $request->address,
            'latitude'            => $request->latitude,
            'longitude'           => $request->longitude,
            'submitter_id'        => auth()->user()->id  // also update the submitter 
        ]);

        return redirect('listing')->with('flash_success','Data '.$listing->list_name.' Successfully Updated!');
    }

    public function show(Listing $listing){
        return view('listing.show',compact('listing'));
    }

    public function destroy(Listing $listing){
        $listing->delete();
        return redirect('listing')->with('flash_danger','Data '.$listing->name.' has been deleted!');
    }
}
