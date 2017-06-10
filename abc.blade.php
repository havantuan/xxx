@extends('backend::layouts.default')
@section('content')
<?php $page = 9;?>
<div class="fixed-table-pagination">
    <div class="pull-right pagination" style="margin-right: 10px;"></div>
    <ul class="pagination pull-right">
        @for($i=$page-3;$i<$page+3;$i++)
            @if($i > 0)
                @if($i == $page)
                    <li class="active"><span>{{ $i }}</span></li>
                @else
                    <li><a href="{{campp_link('union')}}data/schools?page={{ $i }}">{{ $i }}</a></li>
                @endif
            @endif
        @endfor
    </ul>
</div>

@stop