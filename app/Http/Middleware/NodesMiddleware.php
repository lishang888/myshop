<?php

namespace App\Http\Middleware;

use Closure;

class NodesMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // 获取session
        $nodes = session('admin_user_nodes');
        // 获取 所有可以操作的控制器
        $controller_all = array_keys($nodes);

        // 获取当前正在 操作的控制器 和 方法
        $actions=explode('\\', \Route::current()->getActionName());
        //或$actions=explode('\\', \Route::currentRouteAction());
        $modelName=$actions[count($actions)-2]=='Controllers'?null:$actions[count($actions)-2];
        $func=explode('@', $actions[count($actions)-1]);
        $controllerName=strtolower($func[0]);
        $actionName=strtolower($func[1]);

        // dump($actionName);
        // dump($nodes);
        // dump($controllerName);
        // dd($controller_all);

        // dd(in_array($controllerName,$controller_all));
        if (!in_array($controllerName,$controller_all)) {
            return redirect('admin/rbac');
            exit;
            // echo '没有权限 -- 控制器';
            // exit;
        }

        // 所有可以操作的 方法名
        $action_all = $nodes[$controllerName];
        // dd($action_all);
        if (!in_array($actionName,$action_all)) {
            return redirect('admin/rbac');
            exit;
            // echo '没有权限 -- 方法名';
            // exit;
        }

        return $next($request);
        
    }
}
