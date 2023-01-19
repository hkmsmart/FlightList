<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Flight</title>
        <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css"/>
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script type="text/javascript" src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    </head>
    <body class="antialiased">
        <div class="container container-fluid pt-3">
            <table id="flightTable" class="display" style="width:100%">
            <thead>
            <tr>
                <th>Flight Log Id</th>
                <th>Airline Code</th>
                <th>Scheduled</th>
                <th>Origin</th>
                <th>Destination</th>
                <th>Captain</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>
            </tbody>
        </table>
        </div>
    </body>
    <script>
        $(function () {
            $.fn.dataTable.ext.errMode = 'none';

            var table = $('#flightTable').DataTable({
                processing: true,
                serverSide: false,
                order: [[0, 'asc']],
                ajax: "{{ route('flight.list') }}",
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'code', name: 'code'},
                    {data: 'schedule_date', name: 'schedule_date'},
                    {data: 'origin', name: 'origin'},
                    {data: 'destination', name: 'destination'},
                    {data: 'captain.full_name', name: 'full_name'},
                    {
                        data: 'status',
                        name: 'status',
                        render: function (data, type, row) {
                            // Status true ise “Uçuş Tamamlandı”, aksi takdirde “Planlı” demektir
                            return (data ==1 ? 'Done':'Planned');
                        },
                    },
                ],

            });

            // 60 saniyede bir listeyi yenile.
            setInterval(function(){
                $('#flightTable').DataTable().ajax.reload();
            },60000);
        });
    </script>
</html>
