<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Storage;
use App\Notifications\TelegramNotification;
use Illuminate\Validation\Rule;
use Ixudra\Curl\Facades\Curl;
class UserController extends Controller
{
    use NotificationTrait;

    public function __construct()
    {
        $this->middleware(['admin'])->except(['account','security','subscribe','update']);
    }

    public function index(){
      $users=User::all();
         return view('dashboard.users.index',['users'=>$users]);
  }
  public function create(){
      return view('dashboard.users.create');
  }
  public function store(Request $request){

     $request->validate([
         'name'=>'required|string|max:191',
         'email'=>'required|string|max:191|unique:users',
         'avatar'=>'image',
         'tid'=>'required|integer|unique:users',
         'password'=>'required|min:5',
     ]);

        if ($request->hasFile('avatar')){
            $validated_data=$request->except(['avatar','password']);
            $request->file('avatar')->store('');
            $validated_data['avatar']=$request->file('avatar')->hashName();
        }else{
            $validated_data=$request->except('password');
        }

        $validated_data['password']=bcrypt($request->password);
      $url="https://api.telegram.org/bot";
      $token=env('TELEGRAM_BOT_TOKEN');
      $params='/sendMessage?chat_id='.$request->tid.'&text=Welcome To You In My Application';
      $response=Curl::to($url.$token.$params)->get();
      if (json_decode($response)->ok){
          $user=User::create($validated_data);
          if ($user){
              self::SuccessCreate();
          }   else{
              self::FailOperation();
          }
          return redirect(route('user.index'));
      }   else{
          self::TelegramNotFound();
          return redirect(route('user.create'))->withErrors(['test'=>'Write Invalid Telegram ID']);
      }

  }
  public function edit($id){
      $user=User::find($id);
      return view('dashboard.users.edit',['user'=>$user]);

  }
  public function update(Request $request,$id){
      $user=User::find($id);
      $request->validate([
          'name'=>'required|string|max:191',
          'email'=>['required',Rule::unique('users','email')->ignore($user->id)],
          'avatar'=>'image',
          'tid'=>'required',
      ]);

      if ($request->hasFile('avatar')){
          $validated_data=$request->except('avatar');
          if ($user->avatar!='default-user.png')
          Storage::disk('public_uploads')->delete($user->avatar);
          $request->file('avatar')->store('');
          $validated_data['avatar']=$request->file('avatar')->hashName();
      }else{
          $validated_data=$request->all();
      }

      $url="https://api.telegram.org/bot";
      $token=env('TELEGRAM_BOT_TOKEN');
      $params='/sendMessage?chat_id='.$request->tid.'&text=Welcome To You In My Application';
      $response=Curl::to($url.$token.$params)->get();
      if (json_decode($response)->ok){
          $user->update($validated_data);
          if ($user){
              self::SuccessUpdate();
          }   else{
              self::FailOperation();
          }
          if ($user->id==auth()->user()->id)
          return redirect(route('user.account'));
          else
          return redirect(route('user.index'));
      }   else{
          self::TelegramNotFound();
          return redirect(route('user.edit',$user->id))->withErrors(['test'=>'Write Invalid Telegram ID']);
      }

  }
  public function destroy($id){
      $user=User::find($id);
      if ($user->avatar!='default-user.png'){
          Storage::disk('public_uploads')->delete($user->avatar);
      }
      //remove all related jobs
      $user->delete();
      self::SuccessDelete();
      return redirect(route('user.index'));
  }
  public function security(Request $request){
      $request->validate([
          'password'=>'required|confirmed|min:5'
      ]);

      $user=auth()->user();
      $user->password=bcrypt($request->password);
      $user->save();
      self::SuccessUpdate();
      auth()->logout();
      return redirect(route('user.account'));
  }
  public function account(){
      return view('dashboard.users.profile');
  }
  public function subscribe(){
        $user=auth()->user();
        $user->subscribe=($user->subscribe)?false:true;
        $user->save();
        self::SuccessOperation();
        return redirect()->back();
  }
  public function sendTelegramMessage($id,Request $request){
      $user=User::find($id);
      //$x=new TelegramNotification($user->tid,$request->message);
      $url="https://api.telegram.org/bot";
      $token=env('TELEGRAM_BOT_TOKEN');
      $params='/sendMessage?chat_id='.$user->tid.'&text='.$request->message;
      $response=Curl::to($url.$token.$params)->get();
     if (json_decode($response)->ok){
         //Notification::send(null, $x);
         self::SuccessOperation();
         return redirect(route('user.index'));
     }   else{
         self::NotFound();
         return redirect(route('user.index'));
     }

  }
}
