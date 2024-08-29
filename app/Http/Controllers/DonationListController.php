<?php

namespace App\Http\Controllers;

use App\Models\DonationList;
use Illuminate\Http\Request;

class DonationListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'contact' => 'required'

        ]);

        DonationList::create(
            [
                'name' => $request->name,
                'contact' => $request->contact,
                'amount' => $request->custom_amount == null ? $request->amount : $request->custom_amount
            ]
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(DonationList $donationList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DonationList $donationList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DonationList $donationList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DonationList $donationList)
    {
        //
    }
}


