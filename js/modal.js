document.querySelectorAll(".delete-button").forEach((button) => {
	button.addEventListener("click", () => {
		const userId = button.getAttribute("data-user-id");
		document.getElementById("userIdToDelete").value = userId;
		const deleteModal = new bootstrap.Modal(
			document.getElementById("deleteModal"),
			{}
		);
		deleteModal.show();
	});
});
