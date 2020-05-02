<div>
    <table class="border-collapse table-auto w-full whitespace-no-wrap bg-white table-striped relative">
        <thead>
        <tr class="text-left">
            <th class="bg-gray-100 sticky top-0 border-b border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs">
                Address
            </th>
            <th class="bg-gray-100 sticky top-0 border-b border-gray-200 px-6 py-2 text-gray-600 font-bold tracking-wider uppercase text-xs">
                Balance
            </th>
        </tr>
        </thead>
        <tbody>
        @foreach ($wallets as $wallet)
            <tr class="hover:bg-gray-200">
                <td class="border-dashed border-t border-gray-200 firstName">
                    <span class="text-gray-700 px-6 py-3 flex items-center">{{$wallet['address']}}</span>
                </td>
                <td class="border-dashed border-t border-gray-200 lastName">
                    <span class="text-gray-700 px-6 py-3 flex items-center">{{$wallet['balance']}}</span>
                </td>
            </tr>
        @endforeach

        </tbody>
    </table>
</div>





