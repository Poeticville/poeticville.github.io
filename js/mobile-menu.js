console.clear();

const navExpand = [].slice.call(document.querySelectorAll('.nav-expand'));
const backLink = '<li class="nav-item">\n\t<a class="nav-link nav-back-link" href="javascript:;">\n\t\tBack\n\t</a>\n</li>';


navExpand.forEach(function (item) {
	item.querySelector('.nav-expand-content').insertAdjacentHTML('afterbegin', backLink);
	item.querySelector('.nav-link').addEventListener('click', function () {return item.classList.add('active');});
	item.querySelector('.nav-back-link').addEventListener('click', function () {return item.classList.remove('active');});
});


// ---------------------------------------
// not-so-important stuff starts here

const ham = document.getElementById('ham');
ham.addEventListener('click', function () {
	document.body.classList.toggle('nav-is-toggled');
});