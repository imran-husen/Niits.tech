<?php

namespace App\Http\Controllers;

use DB;
use Illuminate\Http\Request;
use App\Models\CulturalEvents;
use App\Models\SportEvents;
use App\Models\AcademicEvents;
use App\Models\externCadidate;
use App\Models\extfinaldat;

class EventController extends Controller
{

    // It is the routings of the cultural events
    public function cultural(){
        return view('Pragyan2025.cultural');
    }


    // This is the routing of the sports events
    public function sports(){
        return view('Pragyan2025.sports');
    }
    

    // This is the routins of the academic events list
    public function academic(){
        return view('Pragyan2025.Academic');
    }
     
    public function extFinal_data(){
        return view('Pragyan2025.extFinal');
    }



    // Here i am creating the routings of the externa participants
    public function External(){
        return view('Pragyan2025.ExternalPart');
    }

    // here i am write the code for the thanyou page
    public function thanks(){
        return view('Pragyan2025.thanks');
    }

    // this is the routings of the prgyan main page
    public function pragyanHome(){
        return view('Pragyan2025.pragyanhome');
    }

    // Here i am creating the routres of the accountant controller
    public function accountant(){
        return view('Pragyan2025.Account');
    }

    // Here i am creating the routresadmin and head fest login 
    public function adminlog(){
        return view('Pragyan2025.adminlog');
    }



    
    // Here  i am writing code to shows the data
    public function culturalData(){

        $culturalData = CulturalEvents::all();
        return view('Pragyan2025.culturalData', compact('culturalData'));
    }



    // Writing the code for the seaching the list data
    public function cltr_Data(Request $request)
    {
        $data = $request->input('number');
        // dd($data);
        // Check if input is provided
        if ($data) {
            $culturalData = DB::table('cultural_events')->where('number', 'like', '%' . $data . '%')->get();
            return view('Pragyan2025.culturalData', compact('culturalData'));
        } else {
            $culturalData = []; // Empty data when no input
        }

        return view('Pragyan2025.culturalData', compact('culturalData'));
    }

    // Here  i am writing code to show the data of the sports Events
    public function sportData(){

        $sportData = SportEvents::all();
        return view('Pragyan2025.sportData', compact('sportData'));
    }
    // Writing the code for the seaching the data from the list of sport events
    public function sprt_Data(Request $request)
    {
        $data = $request->input('number');
        // dd($data);
        // Check if input is provided
        if ($data) {
            $sportData= DB::table('sport_events')->where('number', 'like', '%' . $data . '%')->get();
            return view('Pragyan2025.sportData', compact('sportData'));
        } else {
            $sportData = []; // Empty data when no input
        }

        return view('Pragyan2025.sportData', compact('sportData'));
    }


    // Here i am writing the code of the academic data searching
    public function acdmData(){

        $acdmData =AcademicEvents::all();
        return view('Pragyan2025.academicData', compact('acdmData'));
    }
    // Writing the code for the seaching the data from the list of academic events
    public function acdm_Data(Request $request)
    {
        $data = $request->input('number');
        // dd($data);
        // Check if input is provided
        if ($data) {
            $acdmData = DB::table('academic_events')->where('number', 'like', '%' . $data . '%')->get();
            return view('Pragyan2025.academicData', compact('acdmData'));
        } else {
            $acdmData = []; // Empty data when no input
        }

        return view('Pragyan2025.academicData', compact('acdmData'));
    }




    // Contional routings for the admin
    public function admin(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            // dd($data);
    
            if (isset($data['mail'], $data['pass'])){
                if ($data['mail'] === "niits2025@rrgi.in" &&
                    $data['pass'] === "Niits!@#$%"){
                    // I am fetching the data of the cultural Events
                    $cltr_Data =CulturalEvents::all();
                    $cltrPrice = $cltr_Data->sum('amount');
                    $cltr_totalStudents = $cltr_Data->count();

                    // I am fetching the data of the sports Events
                    $sprt_Data = SportEvents::all();
                    $sprtPrice = $sprt_Data->sum('amount');
                    $sprt_totalStudents = $sprt_Data->count();

                    // I am fetching the data of the Academic Data
                    $acdm_Data =AcademicEvents::all();
                    $acdmPrice = $acdm_Data->sum('amount');
                    $acdm_totalStudents = $acdm_Data->count();
                    

                    // Here i am fetching the external data of students
                    $extr_Data =extfinaldat::all();
                    $extrPrice = $extr_Data->sum('amount');
                    $extr_totalStudents = $extr_Data->count();


                    // Calculating Total Revenue
                    $total_revenue = $cltrPrice+$sprtPrice+$acdmPrice+$extrPrice;


                    return view('Pragyan2025.PragyanAdmin', compact('cltr_Data','cltrPrice', 'cltr_totalStudents','sprt_Data','sprtPrice','sprt_totalStudents','acdm_Data', 'acdmPrice', 'acdm_totalStudents','total_revenue', 'extrPrice','extr_Data', 'extr_totalStudents'));
                }
            }
    
            return back()->withErrors(['error' => 'Invalid credentials. Please try again.']);
        }
        else
        {
            print_r("This is the error form");
        }
    }

    // accountant login panels usings the verification
    public function acountant_log(Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
    
            if (isset($data['mail'], $data['pass'])){
                if ($data['mail'] === "niits2025@rrgi.in" &&
                    $data['pass'] === "Niits!@#$%"){

                   // I am fetching the data of the cultural Events
                    $cltr_Data =CulturalEvents::all();
                    $cltrPrice = $cltr_Data->sum('amount');
                    $cltr_totalStudents = $cltr_Data->count();

                    // I am fetching the data of the sports Events
                    $sprt_Data = SportEvents::all();
                    $sprtPrice = $sprt_Data->sum('amount');
                    $sprt_totalStudents = $sprt_Data->count();

                    // I am fetching the data of the Academic Data
                    $acdm_Data =AcademicEvents::all();
                    $acdmPrice = $acdm_Data->sum('amount');
                    $acdm_totalStudents = $acdm_Data->count();
                    

                    // Here i am fetching the external data of students
                    $extr_Data =extfinaldat::all();
                    $extrPrice = $extr_Data->sum('amount');
                    $extr_totalStudents = $extr_Data->count();

                    // Here i am fetching the all data of the external apply cadidate
                    $extrn_Data =externCadidate::all();
                    return view('Pragyan2025.registration', compact('extrn_Data', 'cltr_totalStudents', 'sprt_totalStudents', 'acdm_totalStudents','extr_totalStudents'));
                }
            }
    
            return back()->withErrors(['error' => 'Invalid credentials. Please try again.']);
        }
        else
        {
                // i am rendering the data of the external participants
                $exter_Data =externCadidate::all();
                return view('Pragyan2025.registration', compact('exter_Data'));
        }
    }


    // Here i am writing the code of the Participants
       public function Ext_data(Request $request)
       {
   
        if($request->hasFile('reciept'))
        {
        
            $receiptFile = $request->file('reciept');
            $timestamp = time(); // Get the current timestamp
            $receiptFilename = $timestamp . '_receipt.' . $receiptFile->getClientOriginalExtension();
            $receiptFile->move('external-Candidate', $receiptFilename);
            $receiptPath = 'external-Candidate/' . $receiptFilename;
        
            // Save data in database
            $uploadData =externCadidate::create([
                "name" => $request->name,
                "gender" => $request->gender,
                "number" => $request->number,
                "mail" => $request->mail,
                "college" => $request->college,
                "event" => $request->event,
                "event_name" => $request->event_name,
                "reciept" => $receiptPath
            ]);
            if($uploadData)
            {
                return view('Pragyan2025.thanks');
            }
            else
            {
                dd("did not uploaded You DATA, Kindly Uload PDF Formate");
            }

        }
        else
        {
           dd("need pdf File, Kindly upload PDF File");
        }
    }

        
     // Here i am storing the data of the clients message to call them and connectivity
     public function CulturalEvent(Request $request)
     {
 
         $cultureData=CulturalEvents::create($request->all());
         if( $cultureData)
         {
            return view('Pragyan2025.thanks');
         }
         else
         {
             return redirect('/')->with('message','data not added');
         }
 
 
     }

     // Here i am writing sode for stored the data in database
     public function SportEvents(Request $request)
     {
 
         $cultureData=SportEvents::create($request->all());
         if( $cultureData)
         {
            return view('Pragyan2025.thanks');
         }
         else
         {
             return redirect('/')->with('message','data not added');
         }
 
 
     }

     // Here i am storing the data of the Academics events
     public function AcademicEvents(Request $request)
     {
 
         $cultureData=AcademicEvents::create($request->all());
         if( $cultureData)
         {
            return view('Pragyan2025.thanks');
         }
         else
         {
             return redirect('/')->with('message','data not added');
         }
 
 
     }

     // Here i am writing the code of the Final External Data
     public function Final_Ext_data(Request $request)
     {
 
         $cultureData=extfinaldat::create($request->all());
         if( $cultureData)
         {
            return view('Pragyan2025.thanks');
         }
         else
         {
             return redirect('/')->with('message','data not added');
         }
 
 
     }
}
