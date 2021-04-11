<?php

namespace Modules\Core\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Jackiedo\DotenvEditor\DotenvEditor;
use Illuminate\Support\Facades\Artisan;
use Modules\User\Entities\User;
use Carbon\Carbon;
use Modules\Core\Http\Requests\CreateAdminRequest;
class CoreController extends Controller
{
    private $env;

    public function __construct(DotenvEditor $editor)
    {
        $this->env = $editor;
    }

    public function installFirst(Request $request)
    {
        $step = $request->get('step', 1);
        
        switch($step) {
            case 1:
                $system = [];

                $system['php_version'] = phpversion();
                $system['mysql_version'] = 5.7;
                $system['bcmath'] = phpversion('bcmath');
                $system['ctype'] = phpversion('ctype');
                $system['fileinfo'] = phpversion('fileinfo');
                $system['json'] = phpversion('json');
                $system['mbstring'] = phpversion('mbstring');
                $system['openssl'] = phpversion('openssl');
                $system['tokenizer'] = phpversion('tokenizer');
                $system['xml'] = phpversion('xml');
                
                return view('core::install.first', compact('system'));
            break;
            case 2:
                return view('core::install.second');
            break;
            case 3:
                try {
                    $connection = mysqli_connect(env('DB_HOST'), env('DB_USERNAME'), env('DB_PASSWORD'), env('DB_DATABASE'), env('DB_PORT'));

                    return view('core::install.third');
                } catch(\Exception $e) {
                    return redirect()->route('install', ['step' => 2])->withErrors($e->getMessage());
                }
            break;
            default:
                $this->env->setKey('APP_INSTALLED', true);
                $this->env->save();    
                        
                return view('core::install.completed');
        }
    }

    public function installSecond(Request $request) {
        $mysql = $request->all();
        try {
            $connection = mysqli_connect($mysql['hostname'],$mysql['username'],$mysql['password'],$mysql['database'], $mysql['port']);
            
            $this->env->setKeys([
                'DB_HOST'     => $mysql['hostname'],
                'DB_PORT'     => $mysql['port'],
                'DB_USERNAME' => $mysql['username'],
                'DB_PASSWORD' => $mysql['password'],
                'DB_DATABASE' => $mysql['database']
            ]);
            $this->env->save();

            $clear_configs = Artisan::call('config:clear');
            $create_migrations = Artisan::call('migrate:fresh');
            $migrate = Artisan::call('module:migrate');

            return redirect()->route('install', ['step' => 3]);
        } catch(\Exception $e) {
            return redirect()->route('install', ['step' => 2])->withErrors($e->getMessage());
        }
    }

    public function installThird(CreateAdminRequest $request) {
        try {
            $connection = mysqli_connect(env('DB_HOST'), env('DB_USERNAME'), env('DB_PASSWORD'), env('DB_DATABASE'), env('DB_PORT'));

            if($user = User::create(array_merge($request->all(), ['user_type' => 'admin']))) {
                $user->email_verified_at = Carbon::now();
                $user->save();
            }

            return redirect()->route('install', ['step' => 'completed']);
        } catch(\Exception $e) {
            return redirect()->route('install', ['step' => 3])->withErrors($e->getMessage());
        }
    }
}
