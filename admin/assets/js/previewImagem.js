/*----------------------------------------
 Upload btn
 ------------------------------------------*/
var SITE = SITE || {};

SITE.fileInputs = function () {
    var $this = $(this),
            $val = $this.val(),
            valArray = $val.split('\\'),
            newVal = valArray[valArray.length - 1],
            $button = $this.siblings('.btn'),
            $fakeFile = $this.siblings('.file-holder');
    if (newVal !== '') {
        $button.text('Photo Chosen');
        if ($fakeFile.length === 0) {
            $button.after('<span class="file-holder">' + newVal + '</span>');
        } else {
            $fakeFile.text(newVal);
        }
    }
};

$('.file-wrapper input[type=file]').bind('change focus click', SITE.fileInputs);

function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        var tmppath = URL.createObjectURL(event.target.files[0]);

        reader.onload = function (e) {
            $('#img-uploaded').attr('src', e.target.result);
            $('input.img-path').val(tmppath);
        }

        reader.readAsDataURL(input.files[0]);
    }
}

$(".uploader").change(function () {
    readURL(this);
});