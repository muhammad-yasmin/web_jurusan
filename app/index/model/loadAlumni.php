<link rel="stylesheet" href="../../../assets/plugins/datatables/jquery.dataTables.min.css">
<!-- <link rel="stylesheet" href="../../../assets/plugins/datatables/dataTables.bootstrap.min.css"> -->
<!-- <link rel="stylesheet" href="../../../assets/css/bootstrap.min.css"> -->

<table id="example" class="table table-bordered table-hover" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
        <tfoot>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Age</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </tfoot>
        <tbody>
            <tr>
                <td>Tiger Nixon</td>
                <td>System Architect</td>
                <td>Edinburgh</td>
                <td>61</td>
                <td>2011/04/25</td>
                <td>$320,800</td>
            </tr>
            <tr>
                <td>Garrett Winters</td>
                <td>Accountant</td>
                <td>Tokyo</td>
                <td>63</td>
                <td>2011/07/25</td>
                <td>$170,750</td>
            </tr>
</tbody>
</table>

<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script>
<!-- <script src="assets/plugins/datatables/dataTables.bootstrap.min.js"></script> -->

<script>
  $(document).ready(function() {
    $('#example').DataTable();
  });
</script>