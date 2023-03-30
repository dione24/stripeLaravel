<?php

namespace App\Http\Controllers;

use App\Models\Plan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PlanController extends Controller
{
    public function index()
    {
        $plans = Plan::get();

        return view("plans", compact("plans"));
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function show(Plan $plan, Request $request)
    {
        $intent = auth()->user()->createSetupIntent();

        return view("subscription", compact("plan", "intent"));
    }
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function subscription(Request $request)
    {
        $plan = Plan::find($request->plan);

        $subscription = $request->user()->newSubscription($request->plan, $plan->stripe_plan)
            ->create($request->token);

        return view("subscription_success");
    }

    public function stripe()
    {
        $user = User::find(1);

        $intent = $user->createSetupIntent();

        return view("stripe", compact("intent"));
    }
}
