@foreach ($chats as $chat)
    @if ($chat->jenis == 1)
        <div class="isiChat-wrapper chat-customer">
        <p class="chat-name">CS.GameBox</p>
    @else
        <div class="isiChat-wrapper chat-pegawai">
        <p class="chat-name">{{ucwords(strtolower($chat->sender))}}</p>
    @endif
        <div class="pesan-wrapper">
            <p>
                @php
                    echo $chat->pesan;
                @endphp
            </p>
        </div>
        <p class="pesan-timestamp dateFormat">{{$chat->created_at}}</p>
    </div>
@endforeach
