<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisis Kepuasan Pelanggan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            text-align: center;
            color: #333;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Analisis Kepuasan Pelanggan</h1>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Informasi Kontak Pelanggan</th>
                    <th>Interaksi dengan Pelanggan</th>
                    <th>Skor Kepuasan Pelanggan</th>
                    <th>Skor Customer Effort</th>
                    <th>Analisis Trend</th>
                </tr>
            </thead>
            <tbody>
                @forelse($analisisData as $item)
                    <tr>
                        <td>{{ $item->ID }}</td>
                        <td>{{ $item->informasi_kontak_pelanggan }}</td>
                        <td>{{ $item->interaksi_dengan_pelanggan }}</td>
                        <td>{{ $item->skor_kepuasan_pelanggan }}</td>
                        <td>{{ $item->skor_customer_effort }}</td>
                        <td>{{ $item->analisis_trend }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6">Tidak ada data</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>
</html>
