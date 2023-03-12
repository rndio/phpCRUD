$(document).ready(function () {


    const inputKeyword = document.getElementById('keyword')
    const buttonCari = document.getElementById('btnCari')
    const outputMain = document.getElementById('main')

    // inputKeyword.oninput = function () { }

    inputKeyword.addEventListener('input', function () {
        // buat object ajax
        const xhr = new XMLHttpRequest()

        // cek kesiapan ajax
        xhr.onreadystatechange = function () {
            if (xhr.readyState == 4 && xhr.status == 200) {
                outputMain.innerHTML = xhr.responseText;
            }
        }

        // eksekusi ajax
        xhr.open('GET', `ajax/mahasiswa.php?keyword=${inputKeyword.value}`)
        xhr.send();

    })


    buttonCari.addEventListener('click', function () {

    })

});