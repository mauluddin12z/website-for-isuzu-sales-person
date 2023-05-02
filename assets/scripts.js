window.setTimeout(function () {
	$(".alert")
		.fadeTo(500, 0)
		.slideUp(500, function () {
			$(this).remove();
		});
}, 5000);

var mymodal = document.getElementById("my-modal");

var modalClose = document.getElementById("my-modal-close");
modalClose.addEventListener("click", function () {
	mymodal.style.display = "none";
});

document.addEventListener("click", function (e) {
	if (
		(e.target.className.indexOf("modal-target") !== -1) &
		(e.target.className.indexOf("landscape modal-target") !== -1)
	) {
		var img = e.target;
		var modalImg = document.getElementById("my-modal-content");
		modalImg.classList.add("landscape");
		mymodal.style.display = "block";
		modalImg.src = img.src;
	}
	if (
		(e.target.className.indexOf("modal-target") !== -1) &
		(e.target.className.indexOf("potrait modal-target") !== -1)
	) {
		var img = e.target;
		var modalImg = document.getElementById("my-modal-content");
		modalImg.classList.add("potrait");
		mymodal.style.display = "block";
		modalImg.src = img.src;
	}
});

const menumobiletoggle = document.getElementById("menu-mobile-toggle");
const mmtogglex = document.getElementById("mmtogglex");
const mmtogglebars = document.getElementById("mmtogglebars");
const menumobile = document.getElementById("menu-mobile");
menumobiletoggle.addEventListener("click", function () {
	menumobile.classList.toggle("mobile-menu-show");
	mmtogglex.classList.toggle("d-none");
	mmtogglebars.classList.toggle("d-none");
});

const size = window.matchMedia("(min-width: 991px)");
function mediaQuaryJs(size) {
	if (size.matches) {
		menumobile.classList.add("d-none");
	} else {
		menumobile.classList.remove("d-none");
	}
}
mediaQuaryJs(size);
size.addListener(mediaQuaryJs);

currentLocation = location.href;
menuitem = document.getElementsByClassName("navlinkheader");
menuparent = document.getElementsByClassName("menu-parent");
for (let i = 0; i < menuitem.length; i++) {
	if (menuitem[i].href === currentLocation) {
		menuitem[i].classList.add("menu-active");
		menuitem[
			i
		].parentElement.parentElement.parentElement.firstElementChild.classList.add(
			"menu-active"
		);
	}
}

// Data Table
$(document).ready(function () {
	$("#dt-produk").DataTable();
});
$(document).ready(function () {
	$("#dt-kategoriproduk").DataTable({
		lengthMenu: [
			[3, 5, 10],
			[3, 5, 10],
		],
	});
});

$(document).ready(function () {
	$("#dt-galeri").DataTable({
		lengthMenu: [
			[3, 5, 10],
			[3, 5, 10],
		],
	});
});
$(document).ready(function () {
	$("#dt-newsinfo").DataTable({
		lengthMenu: [
			[3, 5, 10],
			[3, 5, 10],
		],
	});
});
$(document).ready(function () {
	$("#dt-user").DataTable();
});
