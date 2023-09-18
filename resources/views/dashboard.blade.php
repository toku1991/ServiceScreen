<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <form method="POST" action="{{ route('handleForm') }}">
{{--                        @dd($pins)--}}
                        @csrf <!-- Add CSRF token for Laravel -->
                        <label for="pin1">Select Pin:</label>
                        <select name="pin1" id="pin1" required>
                            <option value="">Select a Pin</option>
                            @foreach($pins as $pin)
                                <option value="{{ $pin->name }}">{{ $pin->name   }}</option>
                            @endforeach
                        </select>
                        <select name="pin2" id="pin2" >
                            <option value="">Select a Pin</option>
                            @foreach($pins as $pin)
                                <option value="{{ $pin->name }}">{{ $pin->name   }}</option>
                            @endforeach
                        </select>
                        <select name="pin3" id="pin3" >
                            <option value="">Select a Pin</option>
                            @foreach($pins as $pin)
                                <option value="{{ $pin->name }}">{{ $pin->name   }}</option>
                            @endforeach
                        </select>
                        <select name="pin4" id="pin4" >
                            <option value="">Select a Pin</option>
                            @foreach($pins as $pin)
                                <option value="{{ $pin->name }}">{{ $pin->name   }}</option>
                            @endforeach
                        </select>
                        <select name="pin5" id="pin5" >
                            <option value="">Select a Pin</option>
                            @foreach($pins as $pin)
                                <option value="{{ $pin->name }}">{{ $pin->name   }}</option>
                            @endforeach
                        </select>
                        <select name="pin6" id="pin6" >
                            <option value="">Select a Pin</option>
                            @foreach($pins as $pin)
                                <option value="{{ $pin->name }}">{{ $pin->name   }}</option>
                            @endforeach
                        </select>
                        <select name="pin7" id="pin7" >
                            <option value="">Select a Pin</option>
                            @foreach($pins as $pin)
                                <option value="{{ $pin->name }}">{{ $pin->name   }}</option>
                            @endforeach
                        </select>
                        <select name="pin8" id="pin8" >
                            <option value="">Select a Pin</option>
                            @foreach($pins as $pin)
                                <option value="{{ $pin->name }}">{{ $pin->name   }}</option>
                            @endforeach
                        </select>
                        <select name="pin9" id="pin9" >
                            <option value="">Select a Pin</option>
                            @foreach($pins as $pin)
                                <option value="{{ $pin->name }}">{{ $pin->name   }}</option>
                            @endforeach
                        </select>
                        <select name="pin10" id="pin10" >
                            <option value="">Select a Pin</option>
                            @foreach($pins as $pin)
                                <option value="{{ $pin->name }}">{{ $pin->name   }}</option>
                            @endforeach
                        </select>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
