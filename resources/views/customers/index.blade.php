
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Customers</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <!--<style>-->
            <link rel="stylesheet" href="../css/form.css">
        <!--</style>-->
    </head>
    <body>
        <table border="2" style="margin: 10px;">
            <tr>
                <th>Customer Name  </th>
                <th>  Customer Email</th>
            </tr>

            @foreach ($customers as $val)
            
            <tr>
                <td> 
                    {{$val->customer_name}}
                </td>
                <td>
                    {{$val->email}}
                </td>
                <td><!---retreive id to update customer then add routes to web.php--->
                    <a href="/customers-edit/{{$val->id}}">Edit</a>
                </td>
            </tr>
            
            @endforeach

        </table>
        <br>
        <a href="{{route('customers-create')}}"><button style="margin: 10px;"><h2 style="color:red">    ADD CUSTOMER</h2></button></a>
    </body>
<html>
