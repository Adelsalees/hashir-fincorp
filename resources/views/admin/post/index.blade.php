<x-admin-layout>
    <x-datatable-layout>
        @section('title', 'Posts')
        @section('tableTitle', 'Posts')

            @can('post-create')
                @section('buttons')
                    <a class="btn btn-primary btn-sm mr-2" href=" {{ route('post.create') }}">Add new</a>
                    <button class="btn btn-danger btn-sm mr-2" id="bulk_delete">Delete Selected</button>
                @endsection
            @endcan
            @can('post-list')
                @section('tableHead')
                    <th>Select</th>
                    <th>Title</th>
                    <th>Cover Image</th>
                    <th>Action</th>
                @endsection
            @endcan

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
                        ajax: "{{ route('post.index') }}",
                        columns: [{
                                data: 'select',
                                name: 'select',
                                orderable: false,
                                searchable: false
                            },
                            {
                                data: 'title',
                                name: 'title'
                            },
                            {
                                data: 'cover_image',
                                name: 'cover_image',
                                orderable: false,
                                searchable: false
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
                    window.location = '/admin/post/' + id + '/edit';
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
                            url: "/admin/post/bulk-delete",
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
