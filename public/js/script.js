$(function () {

    $(".edit").on('click', function () {
        console.log('edit');
    });
    $("#liveToastClose").on('click', function () {
        console.log('test');
        $('#liveToast').hide();
    });

    $("#imageFile").on('change', function () {
        const imageFile = document.querySelector('#imageFile');
        const imagePreview = document.querySelector('#imagePreview');
        const oFReader = new FileReader();
        oFReader.readAsDataURL(imageFile.files[0]);

        oFReader.onload = (oFREvent) => {
            imagePreview.src = oFREvent.target.result;
        }
    });

    

});

// function loadImage() {
//     const imageFile = document.querySelector('#imageFile');
//     const imagePreview = document.querySelector('#imagePreview');
//     console.log('load image done');
//     const oFReader = new FileReader();
//     oFReader.readAsDataURL(imageFile.files[0]);

//     oFReader.onload = (oFREvent) => {
//         imagePreview.src = oFREvent.target.result;
//     }
// }
