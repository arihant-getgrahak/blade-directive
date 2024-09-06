@extends ("layouts.app")

@section("st-details")

<div class="flex flex-col">
    <h1 class="text-center text-2xl mb-2 underline decoration-dotted ">
        Students details using foreach loop
    </h1>
    <div class="-m-1.5 overflow-x-auto">
        <div class="p-1.5 min-w-full inline-block align-middle">
            <div class="overflow-hidden">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <tr>
                            <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Id</th>
                            <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Name</th>
                            <th scope="col" class="px-6 py-3 text-start text-xs font-medium text-gray-500 uppercase">Score</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach ($students as $student)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">{{$student["id"]}}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800"> {{$student["name"]}}</td>
                            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">{{$student["score"]}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
@section("divisible-by-2")

<div class="mt-10">
    <h1 class="text-center text-2xl underline decoration-dotted ">
        Check Number is even or odd using If-Else
    </h1>
    <form method="POST" action="{{url('/check')}}">
        @csrf
        <div>
            <label for="number">Enter Any Number</label>
            <input type="number" class="border-2 border-black" id="number" name="number">
        </div>
        <button type="submit">Submit</button>
    </form>
</div>


@endsection