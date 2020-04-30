<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2019</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript-->
<script src="{{asset('dashboard/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('dashboard/assets/js/bootstrap.bundle.min.js')}}"></script>

<!-- Core plugin JavaScript-->
<script src="{{asset('dashboard/assets/js/jquery.easing.min.js')}}"></script>

<!-- Custom scripts for all pages-->
<script src="{{asset('dashboard/assets/js/sb-admin-2.min.js')}}"></script>
<script src="{{asset('dashboard/assets/js/datatable1.js')}}"></script>
<script src="{{asset('dashboard/assets/js/datatable2.js')}}"></script>
<script src="{{asset('dashboard/assets/js/moment.js')}}"></script>
<script src="{{asset('dashboard/assets/js/daterangepicker.js')}}"></script>
<script src="{{asset('dashboard/assets/js/bootstrap-datepicker.js')}}"></script>
<script src="{{asset('dashboard/assets/js/bootstrap-timepicker.js')}}"></script>
<script src="{{asset('dashboard/assets/js/icheck.js')}}"></script>
<script src="{{asset('dashboard/assets/js/select2.js')}}"></script>



<script src="{{asset('dashboard/assets/js/main.js')}}"></script>
<!-- Page script -->
<script>
    $(function () {
        //Date range as a button
        $('#daterange-btn').daterangepicker(
            {
                ranges   : {
                    'This Month'  : [moment().startOf('month'), moment().endOf('month')],
                },
                startDate: moment().subtract(29, 'days'),
                endDate  : moment()
            },
            function (start, end) {
                $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
            }
        );

        //Date picker
        $('#datepicker').datepicker({
            autoclose: true
        });
        $('#datepicker1').datepicker({
            autoclose: true
        });

        //iCheck for checkbox and radio inputs
        $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass   : 'iradio_minimal-blue'
        })   ;



        //Timepicker
        $('.timepicker').timepicker({
            showInputs: false
        })
    })
</script>
<script>
    $(".js-example-tokenizer").select2({
        tags: true,
        tokenSeparators: [',', ' ']
    });
</script>
@include('notify::messages')
<script src="{{asset('dashboard/assets/js/notify.js')}}"></script>
</body>

</html>
