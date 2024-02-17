<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Http\Requests\SendEmailRequest;
use App\Models\Messages;
use App\Models\Portfolio;
use App\Models\Product;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class GeneralController extends Controller
{
    public function index(): View
    {
        $services = Service::query()->where('status', 1)->orderBy('order', 'asc')->get();

        return view('Frontend.index', compact('services'));
    }

    public function contact(): View
    {
        return \view('Frontend.contact');
    }

    public function servicesSingle($locale, $slug): View
    {
        $service = Service::query()->where('slug', $slug)->first();

        if (!$service) {
            abort(404);
        }

        return \view('Frontend.singleServices', compact('service'));
    }

    public function products(): View
    {
        $products = Product::paginate(15);

        return \view('Frontend.products', compact('products'));
    }

    public function productsSingle($locale, $slug): View
    {
        $product = Product::query()->where('slug', $slug)->first();

        if (!$product) {
            abort(404);
        }

        return \view('Frontend.singleProduct', compact('product'));
    }

    public function portfolio(): View
    {
        $portfolios = Portfolio::query()->orderBy('order', 'asc')->paginate(9);

        return \view('Frontend.portfolio', compact('portfolios'));
    }

    public function sendEmail(SendEmailRequest $request)
    {
        Messages::create($request->validated());

        $data = array(
            'name' => $request->name,
            'email' => $request->email,
            'message' => $request->message,
        );

        $emails = array(
            'rpasayeff@gmail.com',
        );

        foreach ($emails as $email) {
            Mail::to($email)->send(new \App\Mail\MessageMail($data));
        }

        return back()->with('success', __("Your message has been sent successfully."));
    }
}
