document.querySelector("html").style.scrollBehavior = "smooth";
userProfileSetup();

document.querySelectorAll(".navbar-default li a.page-scroll").forEach((el) => {
	if (window.location.pathname.includes(el.getAttribute("href"))) {
		el.parentElement.classList.add("active");
		document
			.querySelector(
				`footer .footer-links li a[href=${el.getAttribute("href")}]`
			)
			.parentElement.classList.add("active");
	}
});

window.onscroll = function () {
	var currentScrollPos = window.pageYOffset;
	if (currentScrollPos < 100) {
		document.querySelector("a.scroll-up").style.opacity = "0";
	} else {
		document.querySelector("a.scroll-up").style.opacity = "1";
	}
};

const toggleUserModal = () => {
	document.querySelector(".user-modal");
};

//Profile dropdown
var profileToggle = document.querySelector(".dropdown-profile");
var headerProfileDropdown = document.getElementById("dropdownWrapper");

document.addEventListener("click", function (event) {
	const profileDropdownClicked = headerProfileDropdown.contains(event.target);
	const hasUserModalClass =
		headerProfileDropdown.classList.contains("user-modal");

	if (!profileDropdownClicked || hasUserModalClass) {
		if (headerProfileDropdown.classList.contains("active")) {
			headerProfileDropdown.classList.remove("active");
			profileToggle.classList.remove("active");
		}

		if (!hasUserModalClass)
			document.querySelector(".navbar-collapse.collapse").classList.remove("in");
	}
});

profileToggle.addEventListener("click", function (event) {	
	event.target.classList.toggle("active");
	headerProfileDropdown.classList.toggle("active");
	document.querySelector(".navbar-collapse.collapse").classList.add("in");
	event.stopPropagation();
});

window.addEventListener("resize", (el) => {
	userProfileSetup();
});

function userProfileSetup() {
	if (window.outerWidth < 768)
		document.querySelector(".dropdown-wrapper").classList.add("user-modal");
	else
		document.querySelector(".dropdown-wrapper").classList.remove("user-modal");
}

//Profile dropdown
