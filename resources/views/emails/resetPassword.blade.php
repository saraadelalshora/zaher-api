<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Email Messages</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href= "https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href= "https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
</head>

<body>
   <div class="row mt-3 ml-3">
           <div class="col-md-12">
            <table
                style="border:0;padding:0;margin:0;width:100%;max-width:700px;font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, 'Helvetica Neue', Arial, 'Noto Sans', sans-serif;font-size: .85rem;">
                <thead>
                    <tr style="">
                        <th style="padding:1rem 2rem;background: #008FCC;color:#FFF;width:200px;border-radius: .75rem .75rem 0 .75rem;">
                        
                            <span style="padding:10px 0 0;display:block;">Zaher </span>
                             Password Reset
                        </th>
                       
                    </tr>
                </thead>
                <tbody>
                    <tr>
                      
                        <td style="padding:1rem 2rem;background: #dcdcdc;color:#222;border-radius: 0 .75rem .75rem .75rem;">
                            <h4><strong>Dear {{$user['name']}}</strong> <br> Your Password Reset Code is: {{$resetPassCode ?? ''}}</h4>
                        </td>
                    </tr>
                </tbody>
            </table>
            </div>
            <div class="col-md-8 mt-3">
                <div class="table-responsive m-t-40">
                    <table id="example" class="table table-hover" style="margin-top: 5px;">
                        <tbody>
                            <tr style="text-align: center;">
                              <td style="padding: .5rem 2rem;"></td>
                              <td style="padding: .5rem 2rem;"></td>
                              <td style="padding: .5rem 2rem;"></td>
                              <td style="padding: .5rem 2rem;"></td>
                                <td style="padding: 1.5rem 2rem;font-size: .75rem;">
                                   <h4>Thank you for choosing Zaher</h4>
                                    <p>
                                        <strong>WEBSITE:</strong> www.zaherdairy.com<br>
                                        <strong>MAIL:</strong> info@zaherdairy.com
                                    </p>
                                </td>
                                
                                <td style="padding: .5rem 2rem;"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
    </div>
    <script>src="https://code.jquery.com/jquery-3.5.1.js"</script>
    <script>src= "https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js" </script>
    <script>src= "https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap4.min.js" </script>
    <script>
    $(document).ready(function() {
    $('#example').DataTable();
     });
   </script>