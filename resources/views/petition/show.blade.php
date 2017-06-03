@extends('layout.app')

@section('content')

    <div class="row">
        <div class="col-md-8 col-md-offset-2">

            <div class="box box-widget">
                <div class="box-header with-border">
                    <div class="user-block">
                        <img class="img-circle" src="https://dimg.voot.com/include/user-images/blank-user.jpg"
                             alt="User Image">
                        <span class="username"><strong>{{$petition->user->name}}</strong></span>
                        <span class="description">7:30 PM Today</span>
                    </div>
                </div>
                <div class="box-body">
                    <h4><strong>{{$petition->title}}</strong></h4>
                    <p>{{$petition->body}}</p>
                </div>

                <!--
                <div class="box-footer box-comments">

                    <div class="box-comment">

                        <img class="img-circle img-sm" src="https://dimg.voot.com/include/user-images/blank-user.jpg"
                             alt="User Image">

                        <div class="comment-text">
                          <span class="username"> Anonymous
                            <span class="text-muted pull-right">8:03 PM Today</span>
                          </span>

                            It is a long established fact that a reader will be distracted
                            by the readable content of a page when looking at its layout.
                        </div>

                    </div>

                </div>
                -->
                <hr>

                    <ul class="list-group">
                        @foreach($petition->comments as $item)
                            <li class="list-group-item">
                                <strong>
                                    {{$item->created_at->diffForHumans()}}
                                </strong>
                                {{$item->body}}
                            </li>
                        @endforeach
                    </ul>

                <hr>

                <div class="panel panel-default">
                    <div class="panel-body">

                        <form method="post" action="{{url('petition/'.$petition->id.'/comment')}}">
                        {{csrf_field()}}
                            <div class="form-group">
                                <textarea id="body" name="body" class="form-control" placeholder="tulis komentar di sini"></textarea>
                            </div>
                            <input type="submit" value="Tambah Komentar" class="btn btn-primary">
                        </form>
                    </div>
                </div>

                <!--
                <div class="box-footer">
                    <form action="#" method="post">
                        <div class="img-push">
                            <input type="text" class="form-control input-sm" placeholder="Press enter to post comment">
                        </div>
                    </form>
                </div>
                -->

            </div>

            <!-- Mengecek sudah login atau belum. klo sudah tampilkan, klo tidak skip-->
            @if(\Illuminate\Support\Facades\Auth::check())
                <div class="pull-right">
                    <div class="btn-group">
                        <a href="{{url('petitions/'.$petition->id.'/edit')}}" class="btn btn-warning">Edit</a>
                        <button type="button" class="btn btn-danger" onclick="event.preventDefault(); document.getElementById('delete-petition').submit()">Delete</button>
                    </div>
                </div>
            @endif

            <!-- DOM javascript harus pakai id di form-->
            <!-- Karena delete merupakan tombol diluar form maka dibuatkan jg form lain -->
            <form id="delete-petition" method="post" action="{{url('petitions/'.$petition->id)}}">
                {{csrf_field()}}
                {{method_field('delete')}}
            </form>

            <a class="btn btn-default" href="#">Back</a>
        </div>
    </div>
@endsection