<!DOCTYPE html>
<html lang="zh-CN">
    <head>
        <title>后台-登陆</title>
        <meta charset="UTF-8"/>
        <link rel="stylesheet" href="{{asset('admin/style/css/ch-ui.admin.css')}}"/>
        <link rel="stylesheet" href="{{asset('admin/style/font/css/font-awesome.min.css')}}"/>
    </head>
    <body style="background:#F3F3F4;">
        <div class="login_box">
            <h1>Blog</h1>
            <h2>欢迎使用博客管理平台</h2>
            <div class="form">
                @if(session('msg'))
                    <p style="color:red">{{session('msg')}}</p>
                @endif
                <form action="{{url('admin/check')}}" method="post">
                    {{csrf_field()}}
                    <ul>
                        <li>
                            <input type="text" name="username" class="text"/>
                            <span><i class="fa fa-user"></i></span>
                        </li>
                        <li>
                            <input type="password" name="password" class="text"/>
                            <span><i class="fa fa-lock"></i></span>
                        </li>
                        <li>
                            <input type="text" class="code" name="code"/>
                            <span><i class="fa fa-check-square-o"></i></span>
                            <img src="{{url('admin/code')}}" alt="验证码" style="cursor: pointer;" onclick="this.src='{{url('admin/code')}}?'+Math.random()"/>
                        </li>
                        <li>
                            <input type="submit" value="立即登陆"/>
                        </li>
                    </ul>
                </form>
                <p><a href="#">返回首页</a> &copy; 2016 Powered by <a href="http://www.lnmp.org.cn" target="_blank">http://www.lnmp.org.cn</a></p>
            </div>
        </div>
    </body>
</html>