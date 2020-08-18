<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<?php
    $komentar = [
        'name' => 'komentar',
        'id' => 'komentar',
        'value' => null,
        'class' => 'form-control'   
    ];
    $barang = [
        'name' => 'id_barang',
        'id' => 'id_barang',
        'value' => $id_barang,
        'type' => 'hidden'  
    ];
    $user = [
        'name' => 'id_user',
        'id' => 'id_user',
        'value' => session()->get('id'),
        'type' => 'hidden'  
    ];
    $submit = [
        'name' => 'submit',
        'id' => 'submit',
        'type' => 'submit',
        'value' => 'Submit',
        'class' => 'btn btn-success'
    ];
?>
<h1>Tinggalkan Komentar</h1>
<?= form_open('Komentar/create/'.$id_barang) ?>
    <?= form_input($user) ?>
    <?= form_input($barang) ?>
    <div class="form-group">
        <?= form_label("Komentar", "komentar") ?>
        <?= form_textarea($komentar) ?>
    </div>
    <div class="text-right">
        <?= form_submit($submit) ?>
    </div>
<?= form_close() ?>
<?= $this->endSection() ?>
<?= $this->section('script') ?>
    <script src="<?= base_url('ckeditor5-build-classic/ckeditor.js')?>" type="text/javascript"></script>
    <style>
        .ck-editor__editable_inline{
            min-height: 200px;
        }
    </style>
    <script>
        ClassicEditor
            .create( document.querySelector( '#komentar' ) )
            .then( editor => {
                console.log( editor );
            } )
            .catch( error => {
                console.error( error );
            } );
    </script>
<?= $this->endSection() ?>