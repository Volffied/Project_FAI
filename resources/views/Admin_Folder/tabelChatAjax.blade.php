<?php
    $ctr = 1;
?>
@foreach ($dataChat as $item)
    <tr>
        <th scope="row">{{ $ctr }}</th>
        <td>{{ $item->nama_cust }}</td>
        @foreach ($dataChat as $item)

        @endforeach
        <td><button type="button" class="btn btn-primary">
            <a href="{{ url('') }}" >Chat</a><span class="badge badge-light">9</span>
            <span class="sr-only">unread messages</span>
          </button></td>
    </tr>
    @php
        $ctr = $ctr + 1;
    @endphp
@endforeach
