//var check = document.querySelectorAll('input[type="checkbox"]').length;
var check = document.querySelectorAll('.main-check').length;
var checkEdit = document.querySelectorAll('.checkEdit');

for (let i = 0; i < check; i++) {
    document.querySelectorAll('.main-check')[i].addEventListener("click", function () {
        //console.log(this.nextElementSibling);
        //console.log(this.checked);
        if (this.checked === true) {
            this.nextElementSibling.style.textDecoration = 'line-through';
            this.parentElement.parentElement.style.backgroundColor = '#dbe0ef82';
            fetch('./php/statusAjax.php?id=' + this.id.slice(5) + '&status=' + 1 + '');
            checkEdit[i].checked = true;
        } else {
            this.nextElementSibling.style.textDecoration = 'none';
            this.parentElement.parentElement.style.backgroundColor = '#fef8f0';
            fetch('./php/statusAjax.php?id=' + this.id.slice(5) + '&status=' + 0 + '');
            checkEdit[i].checked = false;
        }
    })

}