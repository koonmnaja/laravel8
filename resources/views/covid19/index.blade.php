<h1>World Coronavirus Report</h1>
<div style="width:50%;">
<table border='1' style="text-align:right;" >
<table>
    <tr>
        <th>Date</th> 
        <th>Country</th> 
        <th>Total</th> 
        <th>Active</th> 
        <th>Death</th>
        <th>Recovered</th> 
        <th>Total in 1 Million</th>
    </tr>
    @foreach($covid19s as $item)
    <tr>
        <td>{{ $item->date }}</td>
        <td>{{ $item->country }}</td>
        <td>{{ number_format( $item->total ) }}</td>
        <td>{{ $item->active }}</td>
        <td>{{ $item->death }}</td>
        <td>{{ $item->recovered }}</td>
        <td>{{ number_format( $item->total_in_1m , 2 ) }}</td>

    </tr>
    @endforeach
</table>
