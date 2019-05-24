
     <table border="1" cellspacing="0">
            <tr>
                <th colspan="3" width="100">用户评论</th>
            </tr>
            @if($ress)
                @foreach($ress as $v)
            <tr>
                <td colspan="2" align="left">匿名用户</td><td align="right">{{$v->p_lv}}</td>
            </tr>
            <tr>
                <td colspan="3">{{$v->p_desc}}</td>
            </tr>
                @endforeach
                @endif
        </table>
        {{$ress->appends(['goods_id'=>$goods_id])->links()}}
