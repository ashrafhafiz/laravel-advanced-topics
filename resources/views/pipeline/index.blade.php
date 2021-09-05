<table>
    @foreach($casts as $cast)
        <tr>
            <td>{{ $cast->active }}</td>
            <td>{{ $cast->title }}</td>
        </tr>
    @endforeach
</table>

{{--{{ $casts->appends(request()->input())->links() }}--}}
