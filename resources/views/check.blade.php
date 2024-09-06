<h1>
    @if($res['status'])
    @php
    echo $res["status"];
    @endphp
    <script>
        alert('{{$res["status"]}}')
    </script>
    @else
    @php
    echo "No res foung";
    @endphp

    @endif
</h1>