<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<?php init_head(); ?>

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
                        <th scope="col" class="table-header" data-table="all">All</th>
                        <th scope="col" class="table-header" data-table="call-details">Call Details</th>
                        <th scope="col" class="table-header" data-table="sms">SMS</th>
                        <th scope="col" class="table-header" data-table="recording">Recording</th>
                    </tr>
                </thead>
                <tbody>
                    <!-- Add your data rows here -->
                </tbody>
            </table>

            <table class="table" id="callDetailsTable" style="display: none;">
                <!-- Call Details Table Content -->
            </table>

            <table class="table" id="smsTable" style="display: none;">
                <!-- SMS Table Content -->
            </table>

            <table class="table" id="recordingTable" style="display: none;">
                <!-- Recording Table Content -->
            </table>
        </div>
    </div>
</div>

<?php init_tail(); ?>
<script>
    $(document).ready(function () {
        $('.table-header').click(function () {
            var tableName = $(this).data('table');
            $('.table').hide();
            $('#' + tableName + 'Table').show();
        });
    });
</script>
</body>

</html>
