<?php
//use Monolog\Formatter\LineFormatter;
use Monolog\Handler\StreamHandler;
use Monolog\Handler\RotatingFileHandler;
use Monolog\Logger;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
    return view('viewpages/input');
});

Route::post('viewpage', function() {
 //return redirect('viewpages/page1');
/*
        $log_path = storage_path('../logs/.log');
	$days = 0;
        $log_level = 'debug';
        $bubble = true;
        $filePermission = 0777;
        $handler = new RotatingFileHandler($log_path, $days, $log_level, $bubble, $filePermission);
        $formatter = new LineFormatter(null, null, true, true);
        $handler->setFormatter($formatter);
 
        $logger = new Logger('user-register');
        $logger->pushHandler($handler);
        $logger->info(sprintf('ユーザーID:%s TEST', "aaaa"));
*/
	$log = new Logger('user-register');
	$mytime = Carbon\Carbon::now();
	$log_path = sprintf('%s/../logs/%s.log',storage_path(),$mytime->format('Y_m_d H:i:s'));
	$log_level =  config('app.log_level');
	$bubble = true;
	$filePermission = 0777;
	$log->pushHandler(new StreamHandler($log_path, $log_level , $bubble, $filePermission));
	$log->addInfo(
		sprintf(
		'%s,todohuken=%s,fname=%s,lname=%s,viewcnt=%s,%s,%s,%s',
		$mytime->format('Y-m-d H:i:s'),
		Request::input('todohuken'),
		Request::input('fname'),
		Request::input('lname'),
		Request::input('viewcnt'),
		Request::ip(),
		Request::server('HTTP_REFERER'),
		Request::header('user-agent')
		)
	);
	DB::table('exam_log')->insert(
	['crnt_date'=>$mytime->format('Y-m-d H:i:s'),'todohuken'=>Request::input('todohuken'),'fname'=>Request::input('fname'),'lname'=>Request::input('lname'),'viewcnt'=>Request::input('viewcnt'),'ip_addr'=>Request::ip(),'referer'=>Request::server('HTTP_REFERER'),'usr_agent'=>Request::header('user-agent'),]
	);

 return view('viewpages/viewpage');
});

