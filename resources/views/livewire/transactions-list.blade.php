<div>
    <table class="border-collapse table-auto w-full whitespace-no-wrap bg-white table-striped relative">
        <thead>
        <tr class="text-left">
            <th class="bg-gray-100 sticky top-0 border-b border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs">
                ID
            </th>
            <th class="bg-gray-100 sticky top-0 border-b border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs">
                Timestamp
            </th>
            <th class="bg-gray-100 sticky top-0 border-b border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs">
                Sender
            </th>
            <th class="bg-gray-100 sticky top-0 border-b border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs">
                Recipient
            </th>
            </th>
            <th class="bg-gray-100 sticky top-0 border-b border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs">
                Amount
            </th>
            </th>
            <th class="bg-gray-100 sticky top-0 border-b border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs">
                Fee
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach ($transactions as $transaction)
            <tr class="hover:bg-gray-200">
                <td class="border-dashed border-t border-gray-200 userId">
                    <span class="text-blue-500 px-6 py-3 flex items-center cursor-pointer" wire:click="showDetails('{{$transaction['id']}}')">
                                {{$transaction['id']}} </span>
                </span>
                </td>
                <td class="border-dashed border-t border-gray-200 firstName">
                    <span class="text-gray-700 px-6 py-3 flex items-center">{{$transaction['timestamp']}}</span>
                </td>
                <td class="border-dashed border-t border-gray-200 lastName">
                    <span class="text-gray-700 px-6 py-3 flex items-center">{{$transaction['sender']}}</span>
                </td>
                <td class="border-dashed border-t border-gray-200 emailAddress">
                    <span class="text-gray-700 px-6 py-3 flex items-center">{{$transaction['recipient']}}</span>
                </td>
                <td class="border-dashed border-t border-gray-200 gender">
                    <span class="text-gray-700 px-6 py-3 flex items-center">{{$transaction['amount']}}</span>
                </td>
                <td class="border-dashed border-t border-gray-200 phoneNumber">
                    <span class="text-gray-700 px-6 py-3 flex items-center">{{$transaction['fee']}}</span>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
</div>





