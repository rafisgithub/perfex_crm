<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>
<!-- Include DataTables CSS and JS -->
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.css">
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.js"></script>

<style>
    .table th,
    .table td {
        padding: 10px;
        text-align: left;
        border: 1px solid #dee2e6;
    }

    .table th {
        background-color: #000;
        color: #fff;
        cursor: pointer;
    }

    .table th:hover {
        background-color: #0056b3;
    }

    .table tbody tr:hover {
        background-color: #f5f5f5;
    }
</style>

<div id="wrapper">
    <div class="content">
        <div class="row">
            <table class="table" id="allTable">
                <thead>
                    <tr>
                        <th scope="col" class="table-header" data-table="all">Phone</th>
                        <th scope="col" class="table-header" data-table="call-details">Message</th>
                        <th scope="col" class="table-header" data-table="sms">Call duration</th>
                        <th scope="col" class="table-header" data-table="recording">Call type</th>
                        <th scope="col" class="table-header" data-table="recording">Datea and Time</th>
                        <th scope="col" class="table-header" data-table="recording">Recording</th>
                    </tr>
                </thead>
                <tbody>
                <tbody>
                    <?php foreach ($allringcentralRecords as $record) : ?>
                        <tr>
                            <td data-table="all"><?php echo $record->phone_number; ?></td>
                            <td data-table="call-details"><?php echo $record->message; ?></td>
                            <td data-table="sms"><?php echo $record->call_duration; ?></td>
                            <td data-table="recording"><?php echo $record->call_type; ?></td>
                            <td data-table="recording"><?php echo $record->call_timestamp; ?></td>
                            <td data-table="recording"><a href="path/to/<?php echo $record->recording_url; ?>.mp3" download>Download</a></td>
                        </tr>
                    <?php endforeach; ?>

                </tbody>

                </tbody>
            </table>


        </div>
    </div>
</div>

<?php init_tail(); ?>
<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>


</body>

</html>