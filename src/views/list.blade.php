<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ecard Infomration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link type="text/css" rel="stylesheet" href="{{ asset('ebusinesscards/css/bootstrap.min.css') }}">
    <!------ Include the above in your HEAD tag ---------->
    <link href="{{ asset('ebusinesscards/css/font-awesome.min.css') }}" rel="stylesheet">

</head>
<body>
<div class="top-bg">
    <div class="container">
        <a href="/ebusinesscard/create" class="btn btn-info add-new"><i class="fa fa-plus"></i> &nbsp;NEW</a>
        <h2>List of <b>E Business Cards</b></h2>
    </div>
</div>
<div class="container">
    @if (isset($success) && !empty($success))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <strong>{{ $success }}</strong>
        </div>
    @endif
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-12">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Pin</th>
                            <th>PDF view</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($ebusinesscard as $user)
                            <tr>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phone }}</td>
                                <td>{{ $user->zipcode }}</td>
                                <td>
                                    <a href="/generate-pdf/{{ $user->slug }}" class="btn btn-primary"><i class="fa fa-file"></i></a>&nbsp;&nbsp;
                                </td>
                                <td>
                                    <div style="display: flex;">
                                        <a href="/ebusinesscard/{{ $user->slug }}" class="btn btn-primary"><i
                                                    class="fa fa-eye"></i></a>

                                        <a href="/ebusinesscard/{{ $user->slug }}/edit" class="btn btn-primary"><i
                                                    class="fa fa-edit"></i></a>&nbsp;
                                        <form class="delete" action="/ebusinesscard/{{ $user->slug }}"
                                              onclick="return confirm('Are you sure want to delete this card?')"
                                              method="POST">
                                            <input type="hidden" name="_method" value="DELETE">
                                            {{ csrf_field() }}
                                            <button type="submit" class="btn btn-danger pull-right"><i
                                                        class="fa fa-trash-o"></i></button>
                                            {{--<input type="submit" class="btn btn-danger pull-right" value="">--}}
                                        </form>
                                        <i class="fa fa-trash"></i>
                                    </div>
                                </td>

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="float-left">{{ $ebusinesscard->links() }}</div>
                </div>
            </div>
        </div>
    </div>
    <link href="{{ asset('ebusinesscards/css/custom.css') }}" rel="stylesheet">
</body>
</html>

