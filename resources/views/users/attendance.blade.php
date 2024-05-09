<x-layout>
    <div class="w-screen d-flex flex-col ">
        <div class="flex flex-row items-center justify-between w-full p-2 bg-gray-100 rounded-lg">
            <div class="flex flex-row items-center justify-center w-full">
                <div class="flex flex-col items-center justify-center">
                    <div class="text-2xl underline  text-center font-semibold text-gray-800">Attendance</div>
                </div>
            </div>
        </div>
        {{-- show table with student status and reason --}}
        <div class="flex justify-center mx-auto w-full">
            <div class="flex flex-col w-full">
                <div class="w-full">
                    <div class="border-b border-gray-200 shadow w-full">
                        <table class="divide-y divide-gray-300 w-full">
                            <thead class="bg-gray-50 w-full">
                                <tr>
                                    <th class="px-6 py-2 text-xs text-center text-gray-500">
                                        Name
                                    </th>
                                    <th class="px-6 py-2 text-xs text-center text-gray-500">
                                        Status
                                    </th>
                                    <th class="px-6 py-2 text-xs text-center text-gray-500">
                                        Reason
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="bg-white divide-y divide-gray-300 w-full">
                                @foreach ($students as $student)
                                    <tr>
                                        <td class="px-6 py-2 whitespace-nowrap text-center">
                                            <div class="flex items-center">
                                                <div class="flex-shrink-0 h-10 w-10">
                                                    <img class="h-10 w-10 rounded-full"
                                                        src="https://ui-avatars.com/api/?name={{ $student->name }}"
                                                        alt="">
                                                </div>
                                                <div class="ml-4 text-center">
                                                    <div class="text-sm font-medium text-gray-900 text-center">
                                                        {{ $student->name }}
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="px-6 py-2 whitespace-nowrap text-center">
                                                <form action="{{ route('attendance.update', [$student->getOriginal('pivot_class_id'), $student->id]) }}" method="POST">
                                                @csrf
                                                @method('PATCH')
                                                <input type="hidden" name="is_present" value="{{ $student->getOriginal('pivot_is_present') ? 0 : 1 }}">
                                                
                                                
                                                @if ($student->getOriginal('pivot_is_present'))
                                                <button
                                                type="submit"
                                                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full">
                                                P
                                            </button>
                                            @else
                                            <button
                                            type="submit"
                                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">
                                            A
                                        </button>
                                        @endif
                                    </form>

                                        </td>
                                        <td class="px-6 py-2 whitespace-nowrap text-center">
                                            {{-- <div class="text-sm text-gray-900">{{ $student->getOriginal('pivot_reason') }}</div> --}}
                                            {{-- form with value reason and on change save icon aapears --}}
                                            <form action="{{ route('attendance.update', [$student->getOriginal('pivot_class_id'), $student->id]) }}" method="POST"
                                                class="flex flex-row items-center justify-center gap-16 w-full"
                                                >
                                                @csrf
                                                @method('PATCH')
                                                <input type="text" name="reason" value="{{ $student->getOriginal('pivot_reason') }}">
                                                <button
                                                    type="submit"
                                                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
                                                    Save
                                                </button>
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    </div>
                    </div>
                    </div>
       




    </div>
</x-layout>