<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add post</title>
</head>
<body>
                @if(Session::has('data_update'))
                <span>{{Session::get('data_update')}}</span>
                @endif
                <form method="post" action="{{route('update.data')}}">
                    @csrf
                    <input type="hidden" name="id" value="{{$data->id}}">
                    Name : <br><input type="text" name="name" value="{{$data->name}}"><br>
                    Phone : <br><input type="text" name="phone" value="{{$data->phone}}"><br>
                    <input type="submit" value="Submit">
                </form>
            </body>
            </html>



