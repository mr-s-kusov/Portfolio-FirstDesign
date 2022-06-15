submit_at.onclick = function() {
    elem1 = document.getElementById('form_name').value;
    elem2 = document.getElementById('form_tel').value;
    elem3 = document.getElementById('form_text').value;

    if (elem1 == '' || elem2 == '' || elem3 == '') {
        alert('Все поля должны быть заполнены');
    } else obj = {
        name: elem1,
        tel: elem2,
        text: elem3
    }
};