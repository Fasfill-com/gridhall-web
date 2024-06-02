<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class FasfillController extends Controller
{
    //
    public function requestAccountDeletion(Request $request)
    {

        if ($request->email == null) {
            return redirect()->back()->with('error', 'Email is required');
        }

        // Check if the email is valid
        if (!filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
            return redirect()->back()->with('error', 'Provide a valid email address');
        }

        // Extract the domain from the email
        $domain = substr(strrchr($request->email, "@"), 1);

        // Check if the domain has MX records
        if (!checkdnsrr($domain, 'MX')) {
            return redirect()->back()->with('error', 'Provide a valid email address');
        }


        $response = Http::post('https://api.fasfill.com/api/account-deletion-request', [
            'email' => $request->email,
        ]);

        // Decode the JSON response
        $responseData = json_decode($response->body(), true);

        // Check if the response was successful
        if (!$responseData['success']) {
            // Extract the message
            $message = $responseData['message'];
            return redirect()->back()->with('error', $message);
        }

        if ($responseData['success']) {
            // Extract the message
            $message = $responseData['message'];
            return redirect()->route('fasfill.fasfill-account-deletion-confirmed')->with(['success' => $message, 'email' => $request->email]);
        }
    }

    public function accountDeletionConfirmed(Request $request)
    {
        if ($request->otp == null) {
            return redirect()->back()->with('error', 'OTP is required');
        }

        if ($request->email == null) {
            return redirect()->back()->with('error', 'Email is required');
        }

        // Check if the email is valid
        if (!filter_var($request->email, FILTER_VALIDATE_EMAIL)) {
            return redirect()->back()->with('error', 'Provide a valid email address');
        }

        // Extract the domain from the email
        $domain = substr(strrchr($request->email, "@"), 1);

        // Check if the domain has MX records
        if (!checkdnsrr($domain, 'MX')) {
            return redirect()->back()->with('error', 'Provide a valid email address');
        }

        $response = Http::post('https://api.fasfill.com/api/account-deletion-confirmed', [
            'email' => $request->email,
            'otp' => $request->otp,
        ]);

        // Decode the JSON response
        $responseData = json_decode($response->body(), true);

        // Check if the response was successful
        if (!$responseData['success']) {
            // Extract the message
            $message = $responseData['message'];
            return redirect()->back()->with('error', $message);
        }

        if ($responseData['success']) {
            // Extract the message
            $message = $responseData['message'];
            return redirect()->route('fasfill-account-deletion-request')->with(['success' => $message]);
        }
    }
}
