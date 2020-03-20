<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'DBS') }}</title>

    @include('layouts.navbar.nav')
    @include('layouts.library.master-library')
</head>

<body>
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-2">
                @guest

                @else
                    <div class="list-group">
                        @if(Auth::user()->userTypeId == 4)
                            <button type="button" class="list-group-item list-group-item-action active">
                                <strong class="text-center">Tasks Customer </strong>
                            </button>
                            <button type="button" class="list-group-item list-group-item-action ">
                                Item List
                            </button>
                            <button type="button" class="list-group-item list-group-item-action">Suggestion list</button>
                            <button type="button" class="list-group-item list-group-item-action">Notification</button>
                            <button type="button" class="list-group-item list-group-item-action">Upload Item</button>
                            <button type="button" class="list-group-item list-group-item-action" >Wish List / Add wish list</button>
                            <button type="button" class="list-group-item list-group-item-action" >Update timeline</button>
                            <button type="button" class="list-group-item list-group-item-action" >Report Scam broker</button>
                            <button type="button" class="list-group-item list-group-item-action" >Rating broker</button>
                        @endif
                        @if(Auth::user()->userTypeId == 3)
                            <button type="button" class="list-group-item list-group-item-action active">
                                <strong class="text-center">Tasks broker</strong>
                            </button>
                            <button type="button" class="list-group-item list-group-item-action ">
                                Item List
                            </button>
                            <button type="button" class="list-group-item list-group-item-action">Suggestion list</button>
                            <button type="button" class="list-group-item list-group-item-action">Notification</button>
                            <button type="button" class="list-group-item list-group-item-action">Upload Item</button>
                            <button type="button" class="list-group-item list-group-item-action" disabled>Wish List</button>
                        @endif
                        @if(Auth::user()->userTypeId == 5)
                            <button type="button" class="list-group-item list-group-item-action active">
                                <strong class="text-center">Tasks Company</strong>
                            </button>
                            <button type="button" class="list-group-item list-group-item-action ">
                                Post list
                            </button>
                            <button type="button" class="list-group-item list-group-item-action">Upload Item</button>
                        @endif
                        @if(Auth::user()->userTypeId == 1)
                            <button type="button" class="list-group-item list-group-item-action active">
                                <strong class="text-center">Admin Tasks</strong>
                            </button>
                            <button type="button" class="list-group-item list-group-item-action ">
                                Usage status
                            </button>
                            <button type="button" class="list-group-item list-group-item-action">show rate of company</button>
                            <button type="button" class="list-group-item list-group-item-action">Manage Encoder</button>
                            <button type="button" class="list-group-item list-group-item-action">Manage Scam broker</button>
                        @endif
                        @if(Auth::user()->userTypeId == 2)
                            <button type="button" class="list-group-item list-group-item-action active">
                                <strong class="text-center">Encoder Tasks</strong>
                            </button>
                        <a href="{{ route('encoder') }}" type="button" class="list-group-item list-group-item-action ">
                                Manage users
                            </a>
                        @endif
                        
                    </div>
                @endguest

            </div>
            <div class="col-md-8 mb-5 ml-5">
                @yield('content')
            </div>
        </div>
    </div>

</body>

@stack('scripts')

</html>