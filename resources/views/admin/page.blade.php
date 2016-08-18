@if($currentUser['permission'] == true)


    @extends('parts.doctype')
    @include('parts.navbarIsLog')

@section('page-content')

    <h2>List of users</h2>
    <div class="row">
        <div class="col-sm-2 rol-sm-2" style="background-color:lavender;"> Id
            <ul class="list-group">
                @foreach ($users as $user)
                    <li class="list-group-item">{{$user->id}}</li>
                @endforeach
            </ul>
        </div>
        <div class="col-sm-2" style="background-color:lavender;"> Name
            <ul class="list-group">
                @foreach ($users as $user)
                    <li class="list-group-item">{{$user->name}}</li>
                @endforeach
            </ul>
        </div>
        <div class="col-sm-2" style="background-color:lavender;"> Email
            <ul class="list-group">
                @foreach ($users as $user)
                    <li class="list-group-item">{{$user->email}}</li>
                @endforeach
            </ul>
        </div>
        <div class="col-sm-2" style="background-color:lavender;"> Created at
            <ul class="list-group">
                @foreach ($users as $user)
                    <li class="list-group-item">{{ date('d F, Y', strtotime($user->created_at))}}</li>
                @endforeach
            </ul>
        </div>
        <div class="col-sm-2" style="background-color:lavender;"> permission
            <ul class="list-group">
                @foreach ($users as $user)
                    <li class="list-group-item">@if($user->permission == 1)
                            Admin
                        @else
                            User
                        @endif</li>
                @endforeach
            </ul>
        </div>
    </div>
            @stop


            @else
                <!DOCTYPE html>
                <html>
                <head>
                    <title>Be right back.</title>

                    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

                    <style>
                        html, body {
                            height: 100%;
                        }

                        body {
                            margin: 0;
                            padding: 0;
                            width: 100%;
                            color: #B0BEC5;
                            display: table;
                            font-weight: 100;
                            font-family: 'Lato';
                        }

                        .container {
                            text-align: center;
                            display: table-cell;
                            vertical-align: middle;
                        }

                        .content {
                            text-align: center;
                            display: inline-block;
                        }

                        .title {
                            font-size: 72px;
                            margin-bottom: 40px;
                        }
                    </style>
                </head>
                <body>
                <div class="container">
                    <div class="content">
                        <div class="title">Be right back.</div>
                    </div>
                </div>
                </body>
                </html>

    @endif
