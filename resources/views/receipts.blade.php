<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="p-6">
                    <table>
                        @foreach ($receipts as $receipt)
                        <tr>
                            <td>{{ $receipt->paid_at->toFormattedDateString() }}</td>
                            <td>{{ $receipt->amount() }}</td>
                            <td><a href="{{ $receipt->receipt_url }}" target="_blank">Download</a></td>
                        </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
