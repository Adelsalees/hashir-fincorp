<x-admin-layout>
    <x-datatable-layout>
        @section('title', 'Permissions')
        @section('tableTitle', 'Permissions')
        @section('createRoute')
            @role('admin')
        @section('buttons')
            <a class="btn btn-primary btn-sm mr-2" href=" {{ route('permission.create') }}">Add new</a>
            <button class="btn btn-danger btn-sm mr-2" id="bulk_delete">Delete Selected</button>
        @endsection
        @endrole
    @endsection
    @section('tableHead')
        <th>Select</th>
        <th>Name</th>
        <th>Slug</th>
        <th>Action</th>
    @endsection
    @section('table-script')

        <script type="text/javascript">
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $(function() {

                var table = $('#tb1').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: "{{ route('permission.index') }}",
                    columns: [{
                            data: 'select',
                            name: 'select',
                            orderable: false,
                            searchable: false
                        },
                        {
                            data: 'name',
                            name: 'name'
                        },
                        {
                            data: 'slug',
                            name: 'slug'
                        },
                        {
                            data: 'action',
                            name: 'action',
                            orderable: false,
                            searchable: false
                        },
                    ]
                });

            });

            function edit(id) {
                window.location = '/permission/' + id + '/edit';
            }
            var selectMe = [];

            function checkThis(id, el) {
                //if (!confirm('Are you sure?')) return false;
                if ($(el).is(":checked")) {
                    selectMe.push(id);
                } else if ($(el).is(":not(:checked)")) {
                    selectMe.pop(id);
                }
            }
            $('#bulk_delete').click(function() {

                if (selectMe.length > 0) {
                    if (!confirm('Are you sure?')) return false;
                    $.ajax({
                        type: 'POST',
                        url: "/permission/bulk-delete",
                        data: {
                            ids: selectMe,
                        },
                        success: function(data) {
                            alert('Data deleted successfully')
                            location.reload();
                        },
                        error: function(data) {
                            alert('Some error occured');
                        }
                    });

                } else {
                    alert('Please select atleast one checkbox');
                }

            });
        </script>
    @endsection
</x-datatable-layout>
</x-admin-layout>
