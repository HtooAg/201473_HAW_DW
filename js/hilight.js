$(document).ready(function () {
	$(".searchform").submit(function (e) {
		e.preventDefault();
		var searchTerm = $("#searchInput").val();
		if (searchTerm.trim() === "") {
			$("#context").unmark();
		} else {
			$("#context").unmark().mark(searchTerm);
		}
	});
});
