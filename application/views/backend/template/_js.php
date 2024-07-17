<script src="<?= base_url('assets/modernize/assets/') ?>libs/jquery/dist/jquery.min.js"></script>
<script src="<?= base_url('assets/modernize/assets/') ?>libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('assets/modernize/assets/') ?>js/sidebarmenu.js"></script>
<script src="<?= base_url('assets/modernize/assets/') ?>js/app.min.js"></script>
<script src="<?= base_url('assets/modernize/assets/') ?>libs/apexcharts/dist/apexcharts.min.js"></script>
<script src="<?= base_url('assets/modernize/assets/') ?>libs/simplebar/dist/simplebar.js"></script>
<script src="<?= base_url('assets/modernize/assets/') ?>js/dashboard.js"></script>
<script src="<?= base_url('assets/toastr/') ?>build/toastr.min.js"></script>
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
<script>
    function openCity(evt, cityName) {
        // Declare all variables
        var i, tabcontent, tablinks;

        // Get all elements with class="tabcontent" and hide them
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }

        // Get all elements with class="tablinks" and remove the class "active"
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }

        // Show the current tab, and add an "active" class to the button that opened the tab
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

    toastr.options.positionClass = 'toast-bottom-right';
    <?php if ($this->session->flashdata('success')) : ?>
        toastr.success('<?php echo $this->session->flashdata('success'); ?>');
    <?php endif; ?>

    <?php if ($this->session->flashdata('error')) : ?>
        toastr.error('<?php echo $this->session->flashdata('error'); ?>');
    <?php endif; ?>
</script>