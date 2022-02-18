</div>
<!-- page-body-wrapper ends -->

</div>
<!-- container-scroller -->
@if (session('create'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Cadastrado com sucesso!',
            showConfirmButton: true
        })
    </script>

@elseif(session('destroy'))
    <script>
        Swal.fire({
            icon: 'info',
            title: 'Eliminado com sucesso!',
            showConfirmButton: true
        })
    </script>

@elseif(session('update'))
    <script>
        Swal.fire({
            icon: 'info',
            title: 'Atulização realizada com sucesso!',
            showConfirmButton: true
        })
    </script>
@elseif(session('edit'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Alterações foram salvas com sucesso!',
            showConfirmButton: true
        })
    </script>
@elseif(session('create_image'))
    <script>
        Swal.fire({
            icon: 'success',
            title: 'Imagens foram salvas com sucesso!',
            showConfirmButton: true
        })
    </script>
@elseif(session('NoAuth'))
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Não tem autorização para visualizar esta página!',
            showConfirmButton: false,
            timer: 2500
        })
    </script>
@endif


<script src="/js/sweetalert2.all.min.js"></script>



<script>
    // Replace the <textarea id="editor1"> with a CKEditor 4
    // instance, using default configuration.
    CKEDITOR.replace('editor1');
</script>

<!-- plugins:js -->
<script src="/dashboard/vendors/js/vendor.bundle.base.js"></script>
<script src="/dashboard/vendors/js/vendor.bundle.addons.js"></script>
<!-- endinject -->


<script src='/js/jquery.dataTables.min.js'></script>
<script src='/js/dataTables.bootstrap4.min.js'></script>

<script>
    $('#dataTable-1').DataTable({
        autoWidth: true,
        "lengthMenu": [
            [16, 32, 64, -1],
            [16, 32, 64, "All"]
        ],
        "order": [
            [0, 'desc']
        ]
    });
</script>
<script>
    function mens() {
        confirm('Tem certeza de que deseja excluir este arquivo');
    }
</script>

<!-- inject:js -->
<script src="/dashboard/js/shared/off-canvas.js"></script>
<script src="/dashboard/js/shared/misc.js"></script>
<!-- endinject -->

<!-- Custom js for this page-->
<script src="/dashboard/js/demo_1/dashboard.js"></script>

</body>
</html>
