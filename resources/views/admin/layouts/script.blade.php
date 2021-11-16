<script src="/assets/admin/vendor/global/global.min.js"></script>
<script src="/assets/admin/vendor/jquery-nice-select/js/jquery.nice-select.min.js"></script>
<script src="/assets/admin/js/custom.min.js"></script>
<script src="/assets/admin/js/deznav-init.js"></script>
<!-- Datatable -->
<script src="/assets/admin/vendor/datatables/js/jquery.dataTables.min.js"></script>
<script src="/assets/admin/js/plugins-init/datatables.init.js"></script>

@if(isset($ckeditor))
    <script src="{{ asset('js/ckeditor.min.js') }}"></script>
    <script>
        ClassicEditor.create(document.querySelector("#editor"));
    </script>
@endif

<script src="/assets/admin/vendor/toastr/js/toastr.min.js"></script>

<script src="/assets/admin/js/custom-admin.js"></script>
<script>
    @if(Session::has('msg'))
        var type = "{{ Session::get('msg')[1] }}"
        switch (type) {
            case 'info':
                toastr.info("{{ Session::get('msg')[0] }}");
                break;
            case 'success':
                toastr.success("{{ Session::get('msg')[0] }}");
                break;
            case 'warning':
                toastr.warning("{{ Session::get('msg')[0] }}");
                break;
            case 'error':
                toastr.error("{{ Session::get('msg')[0] }}");
                break;
        }
    @endif
</script>