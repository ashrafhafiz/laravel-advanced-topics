<table>
    <th>
        <tr>
            <td>#id</td>
            <td>Name</td>
            <td>Contacted at</td>
            <td>Active</td>
        </tr>
    </th>
    @foreach($customers as $key => $customer)
    <tr>
        <td>{{ $customer->id }}</td>
        <td>{{ $customer->name }}</td>
        <td>{{ $customer->Contacted_at }}</td>
        <td>{{ $customer->active }}</td>
    </tr>
    @endforeach
</table>
