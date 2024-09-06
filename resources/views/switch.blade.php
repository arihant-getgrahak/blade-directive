@foreach ($inputs as $input)
    @switch($input) 
        @case ("a")
            <h2>
                Alphabet is A
            </h2>
        @break
        @case ("b")
            <h2>
                Alphabet is B
            </h2>
        @break
        @case ("c")
            <h2>
                Alphabet is C
            </h2>
        @break
        @case ("d")
            <h2>
                Alphabet is D
            </h2>
        @break
    @endswitch
@endforeach