<html>
    <head>
        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </head>
    <body style="margin-left:20px;">
        
        
                @foreach ($toReturn as $value)
               <div style="margin-top:30px;"> {{$value['billing_address']}}</div>
                <br>
                <br>
                <h1 style="color:cornflowerblue">Tax Invoice</h1>
                <br>
                <h5><b>INVOICE TO :</b>&nbsp;&nbsp;{{$value['customer']}}</h5>
                
                <h5><b>PLACE OF SUPPLY :</b>&nbsp;&nbsp;{{$value['place_of_supply']}}</h5>
                <div style="float:right">
                <h5><b>INVOICE NO :</b>&nbsp;&nbsp;{{$value['invoice_no']}}</h5>
                <h5><b>DATE :</b>&nbsp;&nbsp;{{$value['invoice_date']}}</h5>
                <h5><b>DUE DATE :</b>&nbsp;&nbsp;{{$value['due_date']}}</h5>
                <h5><b>TERMS :</b>&nbsp;&nbsp;{{$value['terms']}}</h5>
                </div>

               
              @endforeach
        
    
    </body>
</html>