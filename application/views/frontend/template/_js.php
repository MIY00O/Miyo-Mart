<script src="<?= base_url('assets/aroma/') ?>vendors/jquery/jquery-3.2.1.min.js"></script>
<script src="<?= base_url('assets/aroma/') ?>vendors/nice-select/jquery.nice-select.min.js"></script>
<script src="<?= base_url('assets/aroma/') ?>vendors/jquery.ajaxchimp.min.js"></script>
<script src="<?= base_url('assets/aroma/') ?>vendors/bootstrap/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/aroma/') ?>vendors/skrollr.min.js"></script>
<script src="<?= base_url('assets/aroma/') ?>vendors/owl-carousel/owl.carousel.min.js"></script>
<script src="<?= base_url('assets/aroma/') ?>vendors/mail-script.js"></script>
<script src="<?= base_url('assets/aroma/') ?>js/main.js"></script>
<!-- <script src="https://cdn.tiny.cloud/1/727rw8zrzvc2slu2a17op75505e7ftodcongx7sxyl5mvv1y/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script> -->

<!-- Place the following <script> and <textarea> tags your HTML's <body> -->
<!-- <script>
    tinymce.init({
        selector: 'textarea',
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table | align lineheight | numlist bullist indent outdent | emoticons charmap | removeformat',
    });
</script> -->
<!-- TinyMCE textarea -->
<!-- <script>
    tinymce.init({
        selector: 'textarea',
        plugins: 'ai tinycomments mentions anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed permanentpen footnotes advtemplate advtable advcode editimage tableofcontents mergetags powerpaste tinymcespellchecker autocorrect a11ychecker typography inlinecss',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | align lineheight | tinycomments | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Author name',
        mergetags_list: [{
                value: 'First.Name',
                title: 'First Name'
            },
            {
                value: 'Email',
                title: 'Email'
            },
        ],
        ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant"))
    });
</script> -->
<!-- TinyMCE textarea -->
<script src="<?= base_url('assets/toastr/') ?>build/toastr.min.js"></script>
<script>
    toastr.options.positionClass = 'toast-bottom-right';
    <?php if ($this->session->flashdata('success')) : ?>
        toastr.success('<?php echo $this->session->flashdata('success'); ?>');
    <?php endif; ?>

    <?php if ($this->session->flashdata('error')) : ?>
        toastr.error('<?php echo $this->session->flashdata('error'); ?>');
    <?php endif; ?>
</script>


<!-- JS Sweetalert -->
<!-- JS Sweetalert -->