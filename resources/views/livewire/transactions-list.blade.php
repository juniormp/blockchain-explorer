<div class="antialiased sans-serif bg-gray-200 h-screen">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>

    <div class="container mx-auto py-6 px-4">

        <div class="overflow-x-auto bg-white rounded-lg shadow overflow-y-auto relative"
             style="height: 405px;">

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

                @foreach ($transactions as $user)
                    <tr>
                        <td class="border-dashed border-t border-gray-200 userId">
                            <span class="text-gray-700 px-6 py-3 flex items-center">{{$user['id']}}</span>
                        </td>
                        <td class="border-dashed border-t border-gray-200 firstName">
                            <span class="text-gray-700 px-6 py-3 flex items-center">{{$user['timestamp']}}</span>
                        </td>
                        <td class="border-dashed border-t border-gray-200 lastName">
                            <span class="text-gray-700 px-6 py-3 flex items-center">{{$user['sender']}}</span>
                        </td>
                        <td class="border-dashed border-t border-gray-200 emailAddress">
                            <span class="text-gray-700 px-6 py-3 flex items-center">{{$user['recipient']}}</span>
                        </td>
                        <td class="border-dashed border-t border-gray-200 gender">
                            <span class="text-gray-700 px-6 py-3 flex items-center">{{$user['amount']}}</span>
                        </td>
                        <td class="border-dashed border-t border-gray-200 phoneNumber">
                            <span class="text-gray-700 px-6 py-3 flex items-center">{{$user['fee']}}</span>
                        </td>
                    </tr>
                @endforeach

                </tbody>
            </table>

        </div>

    </div>
</div>
