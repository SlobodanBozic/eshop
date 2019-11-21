<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\NewsletterSubscriber;
use App\Exports\subscribersExport;
use Maatwebsite\Excel\Facades\Excel;

class NewsletterContoroller extends Controller
{

  public function checkSubscriber(Request $request){

    if($request->ajax()){

      request()->validate([
      'subscriber_email' => 'required|email',
      ]);

      $data = $request->all();

      $subscriberCount = NewsletterSubscriber::where('email', $data['subscriber_email'])->count();

      if($subscriberCount > 0 ){
        echo 'exists';
      }else{
        // Add Newsletter Email in newsletter_subscribers table
        $newsletter = new NewsletterSubscriber;
        $newsletter->email = $data['subscriber_email'];
        $newsletter->status = 1;
        $newsletter->save();
      }

      }
     }

     public function viewNewsletterSubscribers(){
       $newsletters = NewsletterSubscriber::get();

       return view('admin.newsletters.view_newsletters')->with(compact('newsletters'));
     }

     public function updateNewsletterStatus($id,$status){
       NewsletterSubscriber::where('id', $id)->update(['status' => $status]);
       return redirect()->back()->with('flash_message_success','Newsletter Status has been updated!');
     }

     public function deleteNewsletterEmail($id){
       NewsletterSubscriber::where('id', $id)->delete();
       return redirect()->back()->with('flash_message_success','Newsletter Email has been deleted!');
     }

      public function exportNewsletterEmails(){
        return Excel::download(new subscribersExport,'subscribers.xlsx');
       }

}
