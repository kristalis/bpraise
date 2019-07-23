@extends('layouts.app')

@section('content')
 
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Recently Uploaded
                    </div>
                    <div class="panel-body">
                        <div class="row">
                        @foreach($bnworship as $bnworships) 

                        <div class="video-grid col-xs-6 col-sm-4 col-md-3">
                            <div class="video">
                                <div class="thumbnail">
                                    <a href="{{$bnworships->vocalsURL}}">
                                <img src="http://img.youtube.com/vi/IePvhZqG-Ck/mqdefault.jpg" alt="Dizzy DROS - Paris"></a>
                                </div>
                                <div class="caption">
                                {!! str_limit($bnworships->title , $limit = 20, $end = '....') !!}
                            
                                </div>
                            </div>
                        </div>
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
@endsection