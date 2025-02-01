<?php

namespace App\Http\Controllers;

use App\Models\MarketBulletin;
use Illuminate\Http\Request;

class BulletinController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'itemName' => 'required|string|max:255',
            'selectBulletinorTemplate' => 'required|string|max:50',
            'itemDescription' => 'required|string',
        ]);

        $bulletin = MarketBulletin::create([
            'pname' => $request->itemName,
            'kind' => $request->selectBulletinorTemplate,
            'content' => $request->itemDescription,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Bulletin added successfully!',
            'bulletin' => $bulletin
        ]);
    }
}
