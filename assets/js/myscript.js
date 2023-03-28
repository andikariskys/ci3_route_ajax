$(document).ready(function () {
	loadData();
});

function loadData() {
	$.ajax({
		type: "GET",
		url: "../../getmenu",
		success: function (response) {
			$("#dataMenu").html();
			$("#dataMenu").html(response);
		},
	});
}

function simpanMenu() {
	var menu_nama = $("#nama_menu").val();
	var menu_jenis = $("input[name='jenis']:checked").val();
	var menu_harga = $("#harga_menu").val();

	$.ajax({
		type: "POST",
		url: "../../savemenu",
		data: {
			nama: menu_nama,
			jenis: menu_jenis,
			harga: menu_harga,
		},
		success: function (response) {
			loadData();
			resetForm();
		},
	});
}

function resetForm() {
	$("#btn_simpan").removeAttr("hidden");
	$("#btn_simpan_edit").attr("hidden", "");
	$("#btn_reset").attr("hidden", "");

	$("#id_menu").val("");
	$("#nama_menu").val("");
	$("#makanan").prop("checked", false);
	$("#minuman").prop("checked", false);
	$("#snack").prop("checked", false);
	$("#harga_menu").val("");
}

function hapusData(id_menu) {
	$.ajax({
		type: "POST",
		url: "../../deletemenu",
		data: {
			id: id_menu,
		},
		success: function (response) {
			loadData();
		},
	});
}

function editData(id_menu) {
	$.ajax({
		type: "POST",
		url: "../../getmenuid",
		data: {
			id: id_menu,
		},
		dataType: "JSON",
		success: function (response) {
			// console.log(response[0]['id']);
			$("#btn_simpan").attr("hidden", "");
			$("#btn_simpan_edit").removeAttr("hidden", "");
			$("#btn_reset").removeAttr("hidden", "");

			$("#id_menu").val(response[0]["id"]);
			$("#nama_menu").val(response[0]["nama"]);

			var jenisMenu = response[0]["jenis"];
			if (jenisMenu == "makanan") {
				$("#makanan").prop("checked", true);
			} else if (jenisMenu == "minuman") {
				$("#minuman").prop("checked", true);
			} else {
				$("#snack").prop("checked", true);
			}

			$("#harga_menu").val(response[0]["harga"]);
		},
	});
}

function simpanEditMenu() {
	var menu_id = $("#id_menu").val();
	var menu_nama = $("#nama_menu").val();
	var menu_jenis = $("input[name='jenis']:checked").val();
	var menu_harga = $("#harga_menu").val();

	$.ajax({
		type: "POST",
		url: "../../saveeditmenu",
		data: {
			id: menu_id,
			nama: menu_nama,
			jenis: menu_jenis,
			harga: menu_harga,
		},
		success: function (response) {
			loadData();
			resetForm();
		},
	});
}

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
