function changeTheme() {
	var theme = document.getElementById("darkMode");

	if (theme.checked == true) {
		$("#thisBody").attr("data-bs-theme", "dark");
		$("#myTable").removeClass("table-secondary");
		$("#myTable").addClass("table-dark");
	} else {
		$("#thisBody").removeAttr("data-bs-theme");
		$("#myTable").removeClass("table-dark");
		$("#myTable").addClass("table-secondary");
	}
}
