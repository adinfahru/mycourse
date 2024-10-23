<x-app-layout>
    <div class="container mx-auto py-12">
        <h2 class="text-2xl font-bold mb-6">Your Purchase History</h2>

        <div class="overflow-x-auto bg-white shadow-md rounded-lg">
            <table class="min-w-full bg-white">
                <thead class="bg-indigo-800 text-white">
                    <tr>
                        <th class="py-3 px-4 text-left">Course</th>
                        <th class="py-3 px-4 text-left">Amount</th>
                        <th class="py-3 px-4 text-left">Status</th>
                        <th class="py-3 px-4 text-left">Date</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orders as $order)
                    <tr class="border-b hover:bg-gray-100">
                        <td class="py-3 px-4">{{ $order->course->title }}</td>
                        <td class="py-3 px-4">${{ number_format($order->amount, 2) }}</td>
                        <td class="py-3 px-4">
                            <span class="inline-block px-2 py-1 text-sm font-semibold rounded-full capitalize {{ $order->status === 'completed' ? 'bg-green-500 text-white' : 'bg-red-500 text-white' }}">
                                {{ $order->status }}
                            </span>
                        </td>
                        <td class="py-3 px-4">{{ $order->created_at->format('d-m-Y') }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>