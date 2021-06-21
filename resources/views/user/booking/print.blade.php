<!DOCTYPE html>
<html>
    <head>
        <title>Invoices - Gass Movie</title>
    </head>
    <body>
        <style type="text/css">
            .{
                font-family: Arial, Helvetica, sans-serif;
            }
            table{
                border: 1px solid #ddd;
                width: 100%;
                padding: 8px;
                text-align: left;
            }

            th{
                padding-top: 12px;
                padding-bottom: 12px;
                text-align: left;
                background-color: #FFC312;
                color: white;
            }

            table tr td,
            table tr th{
                font-size: 14pt;
            }

            p{
                margin-left: 1rem;
                font-size: 14pt;
            }

            h1{
                font-size: 28pt;
            }
        </style>
        
        <img src="{{ storage_path('app/public/images/kop-nota.png')}}" alt="" margin="0 0 0 0">
        <center>
            <h2>Invoice</h2>
        </center>
        <p>
        User Name    : {{ $booking->user->name}} <br>
        Booking For     : {{ $booking->tanggal }}<br>
        </p>
        <br><br><br>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Judul Film</th>
                    <th>Jumlah Tiket</th>
                    <th>Jam</th>
                    <th>Harga</th>
                    <th>Total Harga</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td>{{ $booking->movie->nama_film }}</td>
                        <td>{{ $booking->jumlah_tiket }}</td>
                        <td>{{ $booking->jam }}</td>
                        <td>{{ $booking->movie->harga }}</td>
                        <td>{{ $booking->total_harga }}</td>
                    </tr>
            </tbody>
        </table>

        <br><br><br>
        <hr>
        <center>
            <p>
                <b> Terima kasih telah menggunakan Gass Movie!</b>
            </p>
        </center>
    </body>
</html>