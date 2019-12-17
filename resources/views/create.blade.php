<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content = "width=device-width, initial-scale = 1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>

    <body>
        <h1>不区分大小写(可以自行完善)</h1>
        <br>
        <form class="" action="{{route('sjunit.store')}}" method="post">
            <input type="hidden" name="__token" value="{{csrf_token()}}">
            命名空间: <input type="text" value="" style="width:300px" name="namespace" placeholder="如： app\index\controller 或 app\index\controller\Index">可以写全，然后下面的类名可以省略<br>
            类名：<input type="text" name="className" placeholder="如：index">命名空间写全可以不用写<br>
            测试方法名：<input type="text" name="action" placeholder="index"><br>
            传递参数以|分割：<input type="text" placeholder="如1|2|#" name="param"><br>
            <input type="submit" name="" value="测试" />
        </form>
    </body>
</html>