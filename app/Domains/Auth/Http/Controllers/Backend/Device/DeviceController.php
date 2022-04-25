<?php

namespace App\Domains\Auth\Http\Controllers\Backend\Device;

use Illuminate\Http\Request;
use App\Domains\Auth\Models\Device;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;


class DeviceController extends Controller
{
    
  
    public function index()
    {   $device = Device::all();
        return view('backend.auth.device.index');
    }

  
    public function create()
    {
        return view('backend.auth.device.create');
           
    }

   
    public function store(Request $request)
    {
        
              $this->validate($request, [
              'front_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
              'back_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',

          ]);
      
          $device = new Device();
      
            if ($request->hasFile('front_image')) {
              $image = $request->file('front_image');
              $name = str_slug($request->front_image).'.'.$image->getClientOriginalExtension();
              $destinationPath = public_path('/uploads/front_image/');
              $imagePath = $destinationPath. "/".  $name;
              $image->move($destinationPath, $name);
              $device->front_image = $name;
            }
            if ($request->hasFile('back_image')) {
              $image = $request->file('back_image');
              $name = str_slug($request->back_image).'.'.$image->getClientOriginalExtension();
              $destinationPath = public_path('/uploads/back_image/');
              $imagePath = $destinationPath. "/".  $name;
              $image->move($destinationPath, $name);
              $device->back_image = $name;
            }
            $device->device_name = $request->get('device_name');
            $device->device_model = $request->get('device_model');
            $device->comments = $request->get('comments');
            $device->serial_number = $request->get('serial_number');
            $device->sim_card = $request->get('sim_card');
            $device->handfree = $request->get('handfree');
            $device->charger = $request->get('charger');
            $device->box = $request->get('box');
            $device->save();
     
        return view('backend.auth.device.index',compact('device'));

        
    }

   
    public function show(Device $device)
    { 
       
        return view('backend.auth.device.show',compact('device'));
           
    }

   
    public function edit( Device $device)
    {
        return view('backend.auth.device.edit',compact('device'));
            
          
    }

    
    public function update(Request $request, Device $device)
    { 
            // $request->validate([
            //     'front_image' => 'required',
            //     'back_image' => 'required',
            // ]);
      
            $input = $request->all();
      
            if ($image = $request->file('front_image')) {
                $destinationPath = public_path('/uploads/front_image/');
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $input['front_image'] = "$profileImage";
            }else{
                unset($input['front_image']);
            }
            if ($image = $request->file('back_image')) {
                $destinationPath =public_path('/uploads/back_image/');
                $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $input['back_image'] = "$profileImage";
            }else{
                unset($input['back_image']);
            }
              
            $device->update($input);
           
         return view('backend.auth.device.index',compact('device'));
       
    }

    
    public function destroy(Device $device)
    {
        $device->delete();
    
        return redirect()->route('admin.auth.device.index')
                        ->with('success','Device deleted successfully');
    }
}
