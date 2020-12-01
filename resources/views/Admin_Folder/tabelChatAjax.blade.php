
<?php
    $ctr = 1;
?>
@foreach ($dataChat as $item)
    @if ($item['count'] > 0)
        <tr>
            <th scope="row">{{ $ctr }}</th>
            <td>{{ $item['namacust'] }}</td>
            <td><button type="button" id="{{ $item['namacust'] }}" class="btn btn-primary">
               <span class="badge badge-light">{{ $item['count'] }}</span> Unread Messages
            </button></td>
        </tr>
        @php
            $ctr = $ctr + 1;
        @endphp
    @endif
@endforeach
